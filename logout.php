<?php
require_once('classes/session.class.php');
require_once('classes/user.class.php');
$user_logout = new USER();

if($user_logout->is_loggedin()!="") {
    $user_logout->redirect('home.php');
}

if(isset($_GET['logout']) && $_GET['logout']=="true") {
    $user_logout->doLogout();
    $user_logout->redirect('index.php');
}