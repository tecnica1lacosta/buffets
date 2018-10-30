<?php


session_name("loginbuffet");
session_start();


if(!isset($_SESSION["documento"])){
	header("Location: login.php");
	exit();
}
?>
