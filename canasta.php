<?php 
	require_once("conexion.php");
	include("sesion-login.php");

	$query2="CALL canasta(".$_SESSION['documento'].");";

	if(isset($_GET['pid_menu'])){
		$id=$_GET['pid_menu'];
	}else{
		$id=0;
	}
	$query="CALL insertar_pedido(".$id.",".$_SESSION['documento'].");";
	$insertar_pedido_en_bdd=mysqli_query($con, $query);
	$mostrar_pedido=mysqli_query($con, $query2);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
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
	          <img class="first-slide" src="estilos/img/carrito-jumbo.jpg" style="height: 100%;" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="titulo-inicio">Carrito</h1>
	            </div>
	          </div>
	        </div>
	      </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<table class="table table-striped tabla-carrito">
						<?php 
							$indice=0;
							while($row=mysqli_fetch_array($mostrar_pedido)){
								if($indice==1){
									$indice=0;
								}
								$nombre=$row['nombre'];
								$apellido=$row['apellido'];
								$plato=$row['plato'];
								$precio=$row['precio'];
								$estado_pedido=$row['estado_pedido'];
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
										echo "<p class='descripcion' style= 'color:#000;'>".$plato."</p>";
									 ?>
								</td>
								<td>
									<?php 
										echo "<p class='descripcion' style= 'color:#000;'>".$estado_pedido."</p>";
									 ?>
								</td>
								<td>
									<p><a class="btn btn-lg btn-primary btn-index" href="cancelar-pedido.php?id=<?=$row['id_pedido'];?>" role="button">Cancelar</a>
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