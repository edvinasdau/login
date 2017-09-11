<?php
session_start();
if(isset($_GET['action']) && $_GET['action'] == 'logout'){
	unset($_SESSION['username']);
	setcookie('username', '', 0, "/");
	setcookie('password', '', 0, "/");
	header('location:index1.php');
}
echo 'Welcome '. $_SESSION['username'];
?>
<br>
<a href="welcome.php?action=logout">Logout</a>