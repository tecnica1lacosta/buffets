<?php
session_name("loginbuffet");
session_start();

if (isset($_GET["id"])) {
	$id=$_GET["id"];
}else
{

	header("Location: ../admin/home.php");
	exit();
}

require_once("../conexion.php");


$result=mysqli_query($con, "SELECT * FROM menu WHERE id_menu=$id;");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Menú</title>
</head>
<body>
	<form action="editar_menu.php" method="POST">
		<input type="hidden" name="id" value="<?= $id;?>">
		<label for="plato">Plato: </label>
		<input type="text" id="plato" name="plato" value="<?=$row['plato'];?>">
        <br>
        <br>
      	<label for="precio">Precio: </label>
		<input type="number" id="precio" name="precio" value="<?=$row['precio'];?>">
		<br>
		<br>
		<label for="descripcion">Descripción: </label>
		<input type="text" id="descripcion" name="descripcion" value="<?=$row['descripcion'];?>">
		<br>
		<br>
		<label for="estado">Estado: </label>
		<input type="radio" name="estado" checked="on" value="<?=$row['estado'];?>" >Disponible
        <input type="radio" name="estado"  value="<?=$row['estado'];?>">No Disponible
		<br>
		<br>
		<label for="stock">Stock: </label>
		<input type="number" id="stock" name="stock" value="<?=$row['stock'];?>">
		<br>
		<br>
		<button type="submit" class="btn btn-primary btn-lg">Guardar</button>

	</form>
</body>
</html>
