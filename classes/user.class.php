<?php
if(stristr($_SERVER['REQUEST_URI'], 'housekeeping/')) {
    require_once('../includes/config.inc.php');
} else {
    require_once("includes/config.inc.php");
}

class USER {
    private $conn;
    public function __construct() {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql) {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function register($uname,$umail,$upass) {
        try {
            $new_password = password_hash($upass, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass,registerdate) 
		                                               VALUES(:uname, :umail, :upass, CURRENT_TIMESTAMP)");
            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":umail", $umail);
            $stmt->bindparam(":upass", $new_password);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function addBook($bname,$bauthor,$breleasedate,$binfo) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO books(name, author, releasedate, info) 
                                                           VALUES(:bname, :bauthor, :breleasedate, :binfo)");
            $stmt->bindparam(":bname", $bname);
            $stmt->bindparam(":bauthor", $bauthor);
            $stmt->bindparam(":breleasedate", $breleasedate);
            $stmt->bindparam(":binfo", $binfo);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function doLogin($uname,$umail,$upass) {
        try {
            $stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
            $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() == 1) {
                if(password_verify($upass, $userRow['user_pass'])) {
                    $_SESSION['user_session'] = $userRow['user_id'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function checkInfo($uname,$umail,$upass)
    {
        try {
            $stmt = $this->conn->prepare("SELECT gender, birthdate, phonenumber, altnumber FROM users WHERE user_name=:uname OR user_email=:umail");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt['gender'] == "" || $stmt['birtdate'] == "" || $stmt['phonenumber'] == "" || $stmt['altnumber'] == "") {
                $error[] = "wtf kerel";
            } else {
                echo "XD";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function is_loggedin() {
        if(isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function doLogout() {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
}
?>