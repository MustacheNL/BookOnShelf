<?php
if(stristr($_SERVER['REQUEST_URI'], 'config.inc.php')){
    die("Wait a minute... who are you? You're not allowed to come here.");
}

class Database {
    private $host = "IP here";
    private $db_name = "DB name here";
    private $username = "Username here";
    private $password = "Password here";
    public $conn;

    public function dbConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        } return $this->conn;
    }
}
?>