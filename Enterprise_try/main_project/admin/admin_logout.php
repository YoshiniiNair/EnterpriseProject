<?php
//include('include/php/connection.php');
include('include/php/session.php');

//$_SESSION = array(); 
session_destroy();

// Redirect to the admin logout page
header('Location: admin_login.php');
exit;

?>