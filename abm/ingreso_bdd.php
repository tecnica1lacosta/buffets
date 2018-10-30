<?php


session_name("loginbuffet");
session_start();


if(!isset($_SESSION["documento"])){
	header("Location: ../index.html");
	exit();
}
require_once("conexion.php");