<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

$pagename = "Boek(en) toevoegen";
include "includes/header.inc.php";

if (isset($_POST['login'])) {
    echo 'login';
} else if (isset($_POST['register'])) {
    echo 'register';
} else {
    //No button pressed
}
?>
<html lang="en">
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            <h3>BookOnShelf</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
            <a href="home.php" class="mdl-layout__tab">Home</a>
            <a href="settings.php" class="mdl-layout__tab">Mijn account</a>
            <a href="books.php" class="mdl-layout__tab">Mijn boeken</a>
            <a href="booklist.php" class="mdl-layout__tab">Boek(en) huren</a>
            <a href="addbook.php" class="mdl-layout__tab is-active">Boek(en) toevoegen</a>
            <a href="contact.php" class="mdl-layout__tab">Contact</a>
            <div class="mdl-layout-spacer"></div>
            <a href="housekeeping/index.php" class="mdl-layout__tab" style="color: green;">Dashboard</a>
            <a href="logout.php?logout=true" class="mdl-layout__tab" style="color: red;">Uitloggen</a>
        </div>
    </header>
    <main class="mdl-layout__content" style="margin: auto;">
<!--        <span class="mdl-chip mdl-chip--contact">-->
<!--            <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>-->
<!--            <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem te kunnen gebruiken verzoek wij je <a href='settings.php'>hier</a> alles in te vullen.</span>-->
        </span>
        <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 25%; text-align: center;">
                <div class="container">
                    < class="signin-form">
                        <div class="container">
                            <form action="register.php" method="post" class="form-signin">
                                <h4 class="form-signin-heading">Voeg een boek toe</h4><hr />
                                    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bname" >
                                            <label class="mdl-textfield__label" for="sample1">Boek naam...</label>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bautor" >
                                            <label class="mdl-textfield__label" for="sample1">Boek auteur...</label>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bpublic" >
                                            <label class="mdl-textfield__label" for="sample1">Boek uitgavedatum...</label>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_binfo" >
                                            <label class="mdl-textfield__label" for="sample1">Boek info...</label>
                                        </div>
                                    </div>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary" type="submit" name="btn-signup">
                                    <i class="glyphicon glyphicon-open-file"></i> Voeg toe
                                </button>
                            </form>
<?php
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

                            public function addbook($uname,$umail,$upass,$ustreet,$uzipcode,$ucity,$ucountry) {
                            try {
                            $new_password = password_hash($upass, PASSWORD_DEFAULT);
                            $stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass,street,zipcode,city,country,registerdate)
                            VALUES(:uname, :umail, :upass, :ustreet, :uzipcode, :ucity, :ucountry, CURRENT_TIMESTAMP)");
                            $stmt->bindparam(":uname", $uname);
                            $stmt->bindparam(":umail", $umail);
                            $stmt->bindparam(":upass", $new_password);
                            $stmt->bindparam(":ustreet", $ustreet);
                            $stmt->bindparam(":uzipcode", $uzipcode);
                            $stmt->bindparam(":ucity", $ucity);
                            $stmt->bindparam(":ucountry", $ucountry);
                            $stmt->execute();
                            return $stmt;
                            } catch(PDOException $e) {
                            echo $e->getMessage();
                            }
                            ?>
                            <br>
                            <br />

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
