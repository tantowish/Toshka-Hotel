<?php 
session_start();
$_SESSION['session_email'] = "";
$_SESSION['session_password'] = "";
session_destroy();

$cookie_name = "cookie_email";
$cookie_value = "";
$time = time() - (60 * 60 * 24);
setcookie($cookie_name,$cookie_value,$time,"/");

$cookie_name = "cookie_password";
$cookie_value = "";
$time = time() - (60 * 60 * 24);
setcookie($cookie_name,$cookie_value,$time,"/");

header("location:../login.php");
?>