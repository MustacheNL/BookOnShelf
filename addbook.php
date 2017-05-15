<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$user = new USER();
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
$pagename = "Boek toevoegen";
include "includes/header.inc.php";
if (isset($_POST['btn-signup'])) {
    $bname = strip_tags($_POST['txt_bname']);
    $bauthor = strip_tags($_POST['txt_bauthor']);
    $breleasedate = strip_tags($_POST['txt_breleasedate']);
    $binfo = strip_tags($_POST['txt_binfo']);
    if ($bname == "" || $bauthor == "" || $breleasedate == "" || $binfo == "") {
        $error[] = "Je hebt niet alle velden ingevuld!";
    } else {
        try {
            $stmt = $user->runQuery("SELECT name, author, info FROM books WHERE name=:bname OR author=:bauthor OR info=:binfo");
            $stmt->execute(array(':bname' => $bname, ':bauthor' => $bauthor, ':binfo' => $binfo));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row['name'] == $bname) {
                $error[] = "Deze naam bestaat al!";
            } else {
                if ($user->addBook($bname, $bauthor, $breleasedate, $binfo)) {
                    $user->redirect('addbook.php?joined');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
include 'includes/menu.inc.php';
?>
    <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 25%; text-align: center;">
            <div class="container">
                <div class="signin-form">
                    <div class="container">
                        <form action="addbook.php" method="post" class="form-signin">
                            <h4 class="form-signin-heading">Voeg een boek toe</h4>
                            <hr/>
                            <?php
                            if (isset($error)) {
                                foreach ($error as $error) {
                                    ?>
                                    <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                                <span class="mdl-chip__text"><?php echo $error; ?></span>
                            </span>
                                    <?php
                                }
                            } else if (isset($_GET['joined'])) {
                                header("refresh:5;url=index.php");
                                ?>
                                <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--green mdl-color-text--white">:D</span>
                                <span class="mdl-chip__text">Je hebt met succes een boek toegevoegd. <a
                                            href='booklist.php'>here</a>!</span>
                            </span>
                            <?php } ?>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bname">
                                <label class="mdl-textfield__label" for="sample1">Boek naam...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bauthor">
                                <label class="mdl-textfield__label" for="sample1">Boek auteur...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_breleasedate">
                                <label class="mdl-textfield__label" for="sample1">Boek uitgavedatum...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_binfo">
                                <label class="mdl-textfield__label" for="sample1">Boek info...</label>
                            </div>

                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary"
                                    type="submit" name="btn-signup">
                                <i class="glyphicon glyphicon-open-file"></i> Voeg toe
                            </button>
                        </form>

                        <br>
                        <br/>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>