<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

$pagename = "Boek(en) huren";
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
            <a href="booklist.php" class="mdl-layout__tab is-active">Boek(en) huren</a>
            <a href="contact.php" class="mdl-layout__tab">Contact</a>
            <div class="mdl-layout-spacer"></div>
            <a href="housekeeping/index.php" class="mdl-layout__tab" style="color: green;">Dashboard</a>
            <a href="logout.php?logout=true" class="mdl-layout__tab" style="color: red;">Uitloggen</a>
        </div>
    </header>
    <main class="mdl-layout__content" style="margin: auto;">
        <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
            <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem te kunnen gebruiken verzoek wij je <a href='settings.php'>hier</a> alles in te vullen.</span>        </span>
        <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="width: 100%">

                    <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Naam</th>
                        <th>Auteur</th>
                        <th>Beschikbaar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">Boek 1</td>
                        <td>Nyma</td>
                        <td>Ja</td>
                    </tr>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">Boek 2</td>
                        <td>Nyma</td>
                        <td>Ja</td>
                    </tr>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">Boek 3</td>
                        <td>Nyma</td>
                        <td>Ja</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
