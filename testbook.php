<?php
require_once("classes/session.class.php");
require_once('classes/user.class.php');
$auth_user = new USER();
$servername = "145.129.251.239";
$username = "root";
$password = "Welkom01";
$dbname = "bookonshelf";
try {
    $conn = new PDO("mysql:host=$servername;dbname=bookonshelf", $username, $password);
    $stmt = $conn->prepare("SELECT name, author, releasedate, info FROM books");
    $data = array();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$data = $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
$data = array();
while ($row = $stmt->fetch())
{
    $data[] = $row;
} foreach

?>