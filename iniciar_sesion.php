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
	$query= sprintf("SELECT tipo_usuario AS TIPO_USUARIO, nombre AS NOMBRE, apellido AS APELLIDO, COUNT(dni) AS CANTIDAD, dni FROM usuario WHERE dni='%s' AND password=SHA1('%s')", 
		mysqli_real_escape_string($con,$user), 
		mysqli_real_escape_string($con,$pass),
		mysqli_real_escape_string($con,$nombre));
	$result=mysqli_query($con,$query) or die(mysqli_error());
	$row=mysqli_fetch_array($result);
	//$cant=mysqli_num_rows($result) or die(mysqli_error());
	$cant=$row['CANTIDAD'];
	$tipo_usuario=$row['TIPO_USUARIO'];
	$nombre_consulta=$row['NOMBRE'];
	$apellido_consulta=$row['APELLIDO'];
	if($cant==1){
		session_name("loginbuffet");
		session_start();
		$_SESSION["documento"]=$row["dni"];

		$_SESSION["nombre"]=$nombre_consulta;
		$_SESSION["apellido"]=$apellido_consulta;
		$_SESSION["url_menu"]="menu-pedido.php";
		$_SESSION["logout_texto"]="Logout";
		$_SESSION["logout_icono"]="glyphicon glyphicon-log-out";
		$_SESSION["logout"]="logout.php";
		$_SESSION["icono_user"]="glyphicon glyphicon-user glyphicon-user-header";
		//$_SESSION["icono_burger"]="";
		if ($tipo_usuario==3) {
			$_SESSION["admin_header"]="<a href='admin/home.php' class='p-nav' style='color: #fff;'><span class='glyphicon glyphicon-user glyphicon-user-admin' style='margin-right: 5px;'></span>Administración</a>";
		}
		header("Location: menu-pedido.php");
	}else{
		//echo "<p>Sesion Incorrecta</p> <br>";
		//echo "<a href='login.php'>Volver al Login</a>";
		header("Location: login.php");
	}
	//echo "Existe/n ".$row["CANTIDAD"]." usuario/s encontrados";//
	//echo "La contraseña de ".$row["nombre"]." es ".$row["password"];//
	//echo "el nombre del usuario es: ".$row["nombre"];//
	//echo "el nombre es: ".$row["nombre"]. "apellido es: ".row["apellido"];//
	//para mostrar el campo que yo desee debo cambiar esto COUNT(dni) AS CANTIDAD por 
}
