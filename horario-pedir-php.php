<?php 
	include("conexion.php");

	$pedir_desde=$_POST['pedir_desde'];
	$pedir_hasta=$_POST['pedir_hasta'];
	$cancelar_desde=$_POST['cancelar_desde'];
	$cancelar_hasta=$_POST['cancelar_hasta'];
	$retirar_desde=$_POST['retirar_desde'];
	$retirar_hasta=$_POST['retirar_hasta'];
	
	if($result=mysqli_query($con, "UPDATE buffet_horas SET hora_pedido_desde='".$pedir_desde."', hora_pedido_hasta='".$pedir_hasta."'")){
	 	header("Location: horario-pedir.php");
	}else{
	 	var_dump();
	}
?>