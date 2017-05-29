
<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$servername = "localhost";
$username = "root";
$password = "";
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
$allowedlimit = 29;
$pagename = "Boek(en) huren";
include "includes/header.inc.php";
include 'includes/menu.inc.php';
?>
    <main class="mdl-layout__content" style="margin: auto;">
        <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
            <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem te kunnen gebruiken verzoek wij je <a href='settings.php'>hier</a> alles in te vullen.</span>        </span>
        <main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="width: 100%">
                <div id="boeken">
                    <?php
                    echo "<table style='border: solid 1px black;margin-bottom: 30%>'";
                    echo "<tr><th><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn-primary\"style=\"margin-left: 25%;\"
                                <i class=\"glyphicon glyphicon-open-file\"></i><a href='http://localhost/booklist.php?name'>naam</a> </th><th><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn-primary\"style=\"margin-left: 25%;\"
                                <i class=\"glyphicon glyphicon-open-file\"></i><a href='http://localhost/booklist.php?author'>Auteur</a></th><th><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn-primary\"style=\"margin-left: 25%;\"
                                <i class=\"glyphicon glyphicon-open-file\"></i><a href='http://localhost/booklist.php?date'>Release datum</a></th><th>Info</th><th>Huren</th></tr>";
                    class TableRows extends RecursiveIteratorIterator
                    {
                        function __construct($it)
                        {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }
                        function current() {
                            return "<td class='boek' style='max-width: 100%; width: 5%;height: 25=/px; border: 1px solid black;'>" . parent::current(). "</td>";
                        }
                        function beginChildren() {
                            echo "<tr>";
                        }
                        function endChildren() {
                            echo '<td class=\'boek\' style=\'max-width:100%; width: 5%;height: 25px; border: 1px solid black;\'><form id="huren"*/ method="post"> <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary" type="submit" onsclick="return confirm(\'Are you sure you want to submit?\')" name="btn-huren" style="margin-left: 25%;"
                                <i class="glyphicon glyphicon-open-file"></i> Huren</form>
                            </button></td>';
                            echo "</tr>" . "\n";
                        }
                    }
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=bookonshelf", $username, $password);
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                    catch(PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    }
                    try {
                        if (isset($_GET['name'])){
                            $stmt = $auth_user->runQuery("SELECT name, author, releasedate, info FROM books ORDER BY name ASC");
                            $stmt->execute();
                        } elseif(isset($_GET['author'])) {
                            $stmt = $auth_user->runQuery("SELECT name, author, releasedate, info FROM books ORDER BY author");
                            $stmt->execute();
                        } elseif(isset($_GET['date'])) {
                            $stmt = $auth_user->runQuery("SELECT name, author, releasedate, info FROM books ORDER BY releasedate DESC");
                            $stmt->execute();
                        } else {
                            $stmt = $conn->prepare("SELECT name, author, releasedate, info FROM books");
                        }
                            $stmt->execute();
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$results) {
                            echo $results;
                        }
                    } catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                ?>
                </div>
                </table>
            </div>
        </main>
    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>

