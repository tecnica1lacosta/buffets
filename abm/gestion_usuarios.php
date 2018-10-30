<?php
include("ingreso_bdd.php");
$result=mysqli_query($con, "CALL sp_usuarios();");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion de usuarios</title>
	<meta charset="utf-8">

</head>
<body>
<h1>
	Usuarios BuffetS
</h1>
<table>
	<thead>
		<td>
			DNI
		</td>
		<td>
			NOMBRE
		</td>
		<td>
			APELLIDO
		</td>
		<td>
			TIPO_USER
		</td>
		<td>
			ESTADO
		</td>
	</thead>
	<?php
		while($row=mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>" .$row['dni']. "</td>";
				echo "<td>" .$row['nombre']. "</td>";
				echo "<td>" .$row['apellido']. "</td>";
				echo "<td>" .$row['tipo_usuario']. "</td>";
				echo "<td>" .$row['tipo_estado']. "</td>";
			echo "</tr>";
		}
	?>
</table>
<button > <a href="gestion_menu.php">Gestion menú</a> </button>
</body>
</html>