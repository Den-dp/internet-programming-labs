<?php
session_start();
if (isset($_SESSION['user'])) {
	$auth = "<p>Hello, ".$_SESSION['user']."!</p>\n";
	$auth .= "<a href='logout.php' style='text-decoration:none; color:#0055AA'>Logout</a>";
	$docum = "<p style='color:#999999;'>This info is only for authorithed users.</p>";
} else {
	$auth = <<< AUTH
	<form action="login.php" method="post">
		<table>
			<tr>
				<td>Login:</td>
				<td><input type="text" name="login" /></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Sumbit" name="submit"/></td>
			</tr>
		</table>
	</form>
AUTH;
   $docum = "<p style='color:#999999;'>This info is for all users</p>";
}
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>lab6</title>
</head>
<body>
	<?php echo $auth; ?>
	<hr />
	<?php echo $docum; ?>
</body>
</html>