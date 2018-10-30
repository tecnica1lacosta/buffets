<?php
require_once("../conexion.php");
$result=mysqli_query($con, "CALL select_menu();");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion menu</title>
</head>
<body>
	<table>
	<thead>
		<td>
			Plato
		</td>
		<td>
			Precio
		</td>
		<td>
			Descripcion
		</td>
		<td>
			Estado
		</td>
		<td>
			Stock
		</td>
		<td>
			opciones
		</td>

			</thead>
	<?php
		while($row=mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>" .$row['plato']. "</td>";
				echo "<td>" .$row['precio']. "</td>";
				echo "<td>" .$row['descripcion']. "</td>";
				echo "<td>" .$row['estado']. "</td>";
				echo "<td>" .$row['stock']. "</td>";
				echo "<td>";
	?>
				<button><a href='borrar.php?id=<?=$row['id_menu'];?>'>borrar</a></button> 
				<button><a href='editar.php?id=<?=$row['id_menu'];?>'>editar</a></button>
				</td>
		<?php

				
			echo "</tr>";
		}
	?>
</table>
</body>
</html>

