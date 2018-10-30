<?php
include("../conexion.php");
var_dump($_POST);
$plato = $_POST['plato'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$stock = $_POST['stock'];
$id=$_POST['id'];

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "estilos/img/menu/" . $_FILES['imagen']['name'];
$destino = "estilos/img/menu/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

$query="UPDATE menu SET plato='".$plato."', precio='".$precio."',descripcion='".$descripcion."', estado='".$estado."',stock='".$stock."', url_img='".$nombre."' WHERE id_menu=$id;";

if($result=mysqli_query($con, $query)){

	echo "se grabo";
	header("Location: gestion_menu.php");
}
else{
	echo "$query";
}

