<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
$pagename = "Contact";
include "includes/header.inc.php";
include "includes/menu.inc.php";
?>
<main class="mdl-layout__content" style="margin: auto;">
    <?php include_once("includes/check.inc.php"); ?>
    <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div>
                <h3>Contact opnemen</h3>
                <a href="mailto:nyma@telfort.nl"> Nyma Dolatkhahnejad</a> <br><br>
                <a href="mailto:jurgenklomp883@gmail.com">Jurgen Klomp</A>
            </div>
        </div>
    </main>
</main>
<?php include "includes/footer.inc.php" ?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>