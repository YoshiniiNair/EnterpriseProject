<?php

session_start(); 
$_SESSION = array(); 
//unset($_SESSION['user_login']['username']);
session_destroy();
 
header("location: user_login.php");
exit;

?>

<!--
session_start();
require_once('include/connection.php');
session_destroy();
header("location: Login.php");
exit();
-->