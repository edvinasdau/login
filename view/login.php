<?php

$vardas = "";

#COOKIES

//setcookie("username", "gigigkltr", time() + (86400 * 30), "/");
/*
if(isset($_COOKIE["username"])){
    $vardas = $_COOKIE["username"];
} else {
    $vardas = "nezinomas";
}
*/


#SESSIONS

session_start();

$_SESSION['username'] = "Antanas";

if(isset($_SESSION["username"])){
$vardas = $_SESSION['username'];
} else {
    $vardas = "nezinomas";
}

include "templates/login.php";


//include "templates/cookies.php";