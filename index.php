<?php
$pagename = "Index";
include 'includes/includes.inc.php';
session_start();
require_once('classes/user.class.php');
$login = new USER();

if($login->is_loggedin()!="") {
    $login->redirect('home.php');
}

if(isset($_POST['btn-login'])) {
    $uname = strip_tags($_POST['txt_uname_email']);
    $umail = strip_tags($_POST['txt_uname_email']);
    $upass = strip_tags($_POST['txt_password']);

    if($login->doLogin($uname,$umail,$upass)) {
        $login->redirect('home.php');
    } elseif($uname == "") {
        $error = "Provide a username or email!";
    } elseif(!$uname == "" && $upass == "") {
        $error = "Provide a password!";
    } else {
        $error = "Wrong credentials!";
    }
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
    </header>
    <main class="mdl-layout__content">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="container">
                <div class="signin-form">
                    <div class="container">
                        <h2 class="form-signin-heading">Log In</h2><hr />
                        <div id="error">
                            <?php
                            if(isset($error)) {
                                ?>
                                <span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                                    <span class="mdl-chip__text"><?php echo $error; ?></span>
                                </span>
                            <?php } ?>
                        </div>
                        <form action="index.php" method="post">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_uname_email">
                                <label class="mdl-textfield__label" for="sample1">Gebruikersnaam of E-mail...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="sample1" name="txt_password">
                                <label class="mdl-textfield__label" for="sample1">Wachtwoord...</label>
                            </div>

                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn btn-default 2" href="register.php" name="btn-register" style="float: right;">
                                    <i class="glyphicon glyphicon-log-in"></i> <a href="register.php" style="text-decoration: none; color: black;">Registeren</a>
                                </button>
                                <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn btn-default" type="submit" name="btn-login" style="float: left";>
                                <i class="glyphicon glyphicon-log-in"></i> Inloggen
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <?php include 'includes/footer.inc.php' ?>
</body>
</html>
