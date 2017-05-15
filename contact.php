<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

$pagename = "Contact";
include "includes/header.inc.php";

if (isset($_POST['login'])) {
    echo 'login';
} else if (isset($_POST['register'])) {
    echo 'register';
} else {
    //No button pressed
}
include 'includes/menu.inc.php';
?>
    <main class="mdl-layout__content" style="margin: auto;">
<!--        <span class="mdl-chip mdl-chip--contact">-->
<!--            <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>-->
<!--            <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem te kunnen gebruiken verzoek wij je <a href='settings.php'>hier</a> alles in te vullen.</span>-->
        </span>
        <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div>
                <h3>U kunt via hier contact met ons opnemen.</h3>
               <a href="mailto:Nyma@telfort.nl"> Nyma Dolat</a> <br><br>
               <a href="mailto:Jurgenklomp883@gmail.com">Jurgen Klomp</A>
            </div>
            </div>
        </main>
    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
