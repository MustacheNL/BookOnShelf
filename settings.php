<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

$pagename = "Instellingen";
include "includes/header.inc.php";

if (isset($_POST['login'])) {
    echo 'login';
} else if (isset($_POST['register'])) {
    echo 'register';
} else {
    //No button pressed
}

$result = $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $street = $row['street'];
    $zipcode = $row['zipcode'];
    $city = $row['city'];
    $country = $row['country'];
    $registerdate = $row['registerdate'];
    $rank = $row['rank'];
}
include 'includes/menu.inc.php';
?>
    <main class="mdl-layout__content" style="margin: auto;">
        <?php //include_once ("includes/check.inc.php"); ?>
        <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                        <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem volledig te kunnen gebruiken verzoeken wij je de benodigde informatie <a href='settings.php'>hier</a> in te vullen</span>
        </span>
        <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1">
                    <label class="mdl-textfield__label" for="sample1"><?php echo $street; ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street" >
                    <label class="mdl-textfield__label" for="sample1"><?php echo $zipcode; ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street" >
                    <label class="mdl-textfield__label" for="sample1"><?php echo $city; ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street" >
                    <label class="mdl-textfield__label" for="sample1"><?php echo $country; ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street" >
                    <label class="mdl-textfield__label" for="sample1"><?php echo $registerdate; ?></label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street" >
                    <label class="mdl-textfield__label" for="sample1"><?php echo $rank; ?></label>
                </div>
            </div>
        </main>
    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
