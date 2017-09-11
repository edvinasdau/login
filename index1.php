<?php

session_start();

if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
	if($_COOKIE['username'] == 'abc' && $_COOKIE['password'] == '123'){
		$_SESSION['username'] = $_COOKIE['username'];
		header('location:welcome.php');
	} else
		$error = "Account is invalid";
}

if(isset($_POST['login'])){
	if($_POST['username'] == 'abc' && $_POST['password'] == '123'){
		$_SESSION['username'] = $_POST['username'];
		if($_POST['remember'] != NULL){
			setcookie("username", $_POST['username'], time() + (86400*30),"/");
			setcookie("password", $_POST['password'], time() + (86400*30),"/");
		} 
		header('location:welcome.php');
	} else {
		$error = "Account is invalid";
	}
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Login</legend>
			<table cellpadding="2" cellspacing="2">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Remember ME</td>
					<td><input type="checkbox" name="remember"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
		</fieldset>
		
	</form>
</body>
</html>