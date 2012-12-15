<?php
include_once("config.php");
if(isset($_POST['submit'])) {
	$login = $_POST['login'];
	$password = $_POST['password']; 
	$login=mysql_real_escape_string($login);
	$password=mysql_real_escape_string($password);
	$query = "SELECT id, login, password
	FROM users
	WHERE login ='{$login}' AND password='{$password}'
	LIMIT 1";
	$sql = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($sql) == 1) {
		session_start();
		$_SESSION['user'] = $login;
		header("location: index.php");
	} else {
		header('Content-Type: text/html; charset= utf-8');
		echo("<p style='color:#990000;'>Wrong login or password.<br>");
		echo("<a href='index.php' style='text-decoration:none; color:#0055AA'>Go back</a></p>");
	}
}
?>