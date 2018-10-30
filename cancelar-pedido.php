<?php
include("conexion.php");
include("sesion-login.php");

$id=$_GET['id_pedido'];

if($result=mysqli_query($con, "DELETE FROM pedido 
WHERE pedido.dni=".$_SESSION['documento']." AND (select hora_cancelacion_hasta from buffet_horas)>TIME(NOW());")){
	header("Location: canasta.php");
?>
	
	<script type="text/javascript" src="alerta.js"></script>

<?php


}else
{
  echo "error";
}