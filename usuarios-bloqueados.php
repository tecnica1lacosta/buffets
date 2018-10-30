<?php
include("sesion-login.php");
require("conexion.php");
$query=mysqli_query($con, "SELECT usuario.nombre, usuario.apellido, tipo_usuario.tipo_usuario, estado_usuario.tipo_estado FROM usuario INNER JOIN 
	tipo_usuario ON usuario.tipo_usuario=tipo_usuario.id_tipo_usuario INNER JOIN estado_usuario ON usuario.estado=estado_usuario.id_estado_usuario 
	WHERE usuario.estado=2;;");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios bloqueados</title>
	<meta charset="utf-8">
	<link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>
<header>
	<?php 
		include("header.php");
	?>
</header>
<div class="container-fluid container-fluid-inicio">
	<div id="myCarousel" class="carousel">
	    <div class="carousel-inner">
		    <div class="item active">
	    	    <img class="first-slide" src="estilos/img/bloqueado.jpg" style="height: 100%;" alt="First slide">
	        	<div class="container">
	        		<div class="carousel-caption">
	            		<h1 class="titulo-inicio">Usuarios bloqueados</h1>
	          		</div>
	        	</div>
	      	</div>
	    </div>
	</div>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped tabla-carrito">
						<?php 
							$indice=0;
							while($row=mysqli_fetch_array($query)){
								if($indice==1){
									$indice=0;
								}
								$nombre=$row['nombre'];
								$apellido=$row['apellido'];
								$tipo_usuario=$row['tipo_usuario'];
								$estado=$row['tipo_estado'];
						 ?>
						<?php if($indice==0){ ?>
							<tr>
						<?php }	 ?>
								<td>
									<?php 
										echo "<p class='descripcion' style= 'color:#000;'>".$nombre."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion' style= 'color:#000;'>".$apellido."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion' style= 'color:#000;'>".$tipo_usuario."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion' style= 'color:#000;'>".$estado."</p>";
									 ?>
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
	<footer>
		<?php 
			include("footer.php");
		?>
	</footer>
</div>
</body>
</html>