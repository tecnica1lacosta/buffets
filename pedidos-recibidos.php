<?php
require("conexion.php");
$result=mysqli_query($con, "CALL mostrar_pedidos;");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pedidos Recibidos</title>
	<meta charset="utf-8">
	<link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>

	<div class="container-fluid container-fluid-inicio">
		<div class="container">
			<div class="jumbotron jumbotron-inicio" style="border-radius: 0px;">
			  <div class="container text-center">
			    <h1>Pedidos recibidos</h1>      
			    <p>Lista de los pedidos realizados</p>
			  </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
						<?php 
							$indice=0;
							while($row=mysqli_fetch_array($result)){
								if($indice==1){
									$indice=0;
								}
								$nombre=$row['nombre'];
								$apellido=$row['apellido'];
								$plato=$row['plato'];
								$estado_pedido=$row['estado_pedido'];
						 ?>
						<?php if($indice==0){ ?>
							<tr>
						<?php }	 ?>
								<td>
									<?php 
										echo "<p class='descripcion'>".$nombre."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion'>".$apellido."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion'>".$plato."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion'>".$estado_pedido."</p>";
									 ?>
								</td>
								<td>
									<select class="form-control">
									  <option>En espera</option>
									  <option>Disponible</option>
									  <option>No retirado</option>
									  <option>Retirado</option>
									  <option>Cancelado</option>
									</select>
								</td>
								<td>
									<a href="#" class="btn btn-primary" role="button">Actualizar estado</a>
								</td>
						<?php if($indice==1){ ?>
							</tr>
						<?php }	$indice++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>

<footer>
	<?php 
		include("footer.php");
	 ?>
</footer>
</body>
</html>