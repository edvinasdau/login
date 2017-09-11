<?php

//$vardas = "";
//$old_user = "";
#COOKIES

setcookie("username", "Edvinas", time() + 15);
/*
if(isset($_COOKIE["username"])){
    $vardas = $_COOKIE["username"];
} else {
    $vardas = "nezinomas";
}
*/


#SESSIONS

//session_start();

/*$_SESSION['username'] = "Antanas";

if(isset($_SESSION["username"])){
$vardas = $_SESSION['username'];
} else {
    $vardas = "nezinomas";
}
*/
session_start();


if(isset($_POST['username']) && isset($_POST['password'])){
	# yra ivesti prisijungimo duomenys
	if($_POST['username'] == "Edvinas" && $_POST['password'] == "slaptas") {
		#vartotojo vardas ir slaptazodis tinka

		$_SESSION['user']['username'] = $_POST['username'];
		$_SESSION['user']['level'] = 'admin';
	
	} else {
		#vartotojo vardas arba slaptazodis netinkamas
		$error = "Wrong username or password";
	}

} else if (isset($_POST['submit'])) {
	#prisijungimo duomenys nebuvo ivesti
	$error = "No login data";
}



if(isset($_GET['logout'])) {
	session_destroy();
}



//Session check

if (isset($_SESSION['user'])) {

	$vardas = $_SESSION['user']['username'];
	include "view/main.php";

} else {

include "view/login.php";

}

//include "templates/cookies.php";