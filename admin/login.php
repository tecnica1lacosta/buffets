<?php
require("conexion.php");
$user="";
$pass="";


if(isset($_POST["usuario"])) {
	$user=$_POST["usuario"];
} 
if(isset($_POST["password"])) {
	$pass=$_POST["password"];
}

if($user!='' || $pass!=''){
	$query= sprintf("SELECT COUNT(dni) AS CANTIDAD, dni FROM usuario WHERE dni='%s' AND password=SHA1('%s')", 
		mysqli_real_escape_string($con,$user), 
		mysqli_real_escape_string($con,$pass));

	$result=mysqli_query($con,$query) or die(mysqli_error());

	$row=mysqli_fetch_array($result);
	//$cant=mysqli_num_rows($result) or die(mysqli_error());
	$cant=$row['CANTIDAD'];

	if($cant==1){
		echo "Existe/n ".$row["CANTIDAD"]." usuario/s encontrados";
		session_name("loginbuffet");
		session_start();
		$_SESSION["documento"]=$row["dni"];
		header("Location: home.php");
		exit();
	}
	else{
		header("Location: index.php");
	}
	
}
