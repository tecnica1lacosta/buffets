<?php
function conectar(){
	define('SERVIDOR_MYSQL','localhost');
	define('USUARIO_MYSQL','root');
	define('PASSWORD_MYSQL','');
	define('BASE_DATOS','buffets');

	$con=mysqli_connect(SERVIDOR_MYSQL,USUARIO_MYSQL,PASSWORD_MYSQL,BASE_DATOS)or die("Error en la conexion");
	mysqli_select_db($con,BASE_DATOS) or die("Problemas al selecionar la base de datos");
	return $con;
}

$con=conectar();