<?php
session_start();
$user = 'admin';
$pwd = '123456';

$username = $_POST['uname'];
$password = $_POST['psw'];

if($user==$username && $pwd==$password) {
	 $_SESSION["login"] ='true';
	$URL = "room1.php";
	header("Location: $URL");
} else {
	$_SESSION["login"] ='false';
	$URL = "index.html?err=1";
	header("Location: $URL");
}
?>
