<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
$pagename = "Instellingen";
include "includes/header.inc.php";

$result = $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $street = $row['street'];
    $housenumber = $row['housenumber'];
    $zipcode = $row['zipcode'];
    $city = $row['city'];
    $country = $row['country'];
    $registerdate = $row['registerdate'];
    $rank = $row['rank'];
}
include 'includes/menu.inc.php';
if (isset($_POST['btn-submit'])) {
    $stmt = $auth_user->runQuery("UPDATE users SET `street` = :street, `housenumber` = :housenumber, `zipcode` = :zipcode, `city` = :city, `country` = :country WHERE `user_id` = :user_id");
    $stmt->execute(array(':street' => $_POST['txt_street'], ':housenumber' => $_POST['txt_housenumber'], ':zipcode' => $_POST['txt_zipcode'], ':city' => $_POST['txt_city'], ':country' => $_POST['txt_country'], ':user_id' => $user_id));
    } else {
       // error[4] = XD;
    }
?>
<main class="mdl-layout__content" style="margin: auto;">
    <?php //include_once ("includes/check.inc.php"); ?>
    <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                        <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem volledig te kunnen gebruiken verzoeken wij je de benodigde informatie <a
                                    href='settings.php'>hier</a> in te vullen</span>
        </span>
    <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form method="post" class="form-signin">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street" value="<?php echo $street; ?>">
                    <label class="mdl-textfield__label" for="sample1">Straat</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_housenumber" value="<?php echo $housenumber; ?>">
                    <label class="mdl-textfield__label" for="sample1">Huisnummer</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_zipcode" value="<?php echo $zipcode; ?>">
                    <label class="mdl-textfield__label" for="sample1">Postcode</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_city" value="<?php echo $city; ?>">
                    <label class="mdl-textfield__label" for="sample1">Stad</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_country" value="<?php echo $country; ?>">
                    <label class="mdl-textfield__label" for="sample1">Land</label>
                </div>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-0">
                    <input type="radio" id="option-0" class="mdl-radio__button" name="options" value="0">
                    <span class="mdl-radio__label">Man</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                    <span class="mdl-radio__label">Vrouw</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                    <span class="mdl-radio__label">Apache Helicopter</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                    <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
                    <span class="mdl-radio__label">Privé</span>
                </label>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" disabled name="txt_register" value="<?php echo $registerdate; ?>">
                    <label class="mdl-textfield__label" for="sample1">Registratiedatum</label>
                </div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary"
                        type="submit" name="btn-submit">
                    <i class="glyphicon glyphicon-open-file"></i>Submit
                </button>
            </form>
        </div>
    </main>
</main>
<?php include 'includes/footer.inc.php' ?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
