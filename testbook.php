<?php
$servername = "145.129.251.239";
$username = "jurgen";
$password = "1231234";
$dbname = "bookonshelf";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Boeknaam</th><th>Auteur</th><th>Release datum</th><th>Info</th><th>Huren</th></tr>";
class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }

}
try {
    $conn = new PDO("mysql:host=$servername;dbname=bookonshelf", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully ";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
try {
    $stmt = $conn->prepare("SELECT name, autor, releasedate, info FROM books");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>