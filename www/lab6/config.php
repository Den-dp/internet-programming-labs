<?php
$dblocation = "localhost";
$dbname = "lab6";
$dbuser = "root";
$dbpasswd = "password";
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) 
{
	echo("<p style='color:#990000;'>Error connectiong to DB.</p>");
	exit();
}
if (!@mysql_select_db($dbname, $dbcnx)) 
{
	echo("<p style='color:#990000;'>Error connectiong to DB.</p>");
	exit();
}
?>