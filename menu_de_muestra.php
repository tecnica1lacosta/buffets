<?php
require("conexion.php");
$result=mysqli_query($con, "CALL select_menu();");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menú de muestra</title>
	<link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>

	<header>
		<?php
			include("header.php");
		?>
	</header>

	<div class="container-fluid container-fluid-inicio">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="estilos/img/menu-jumbo.jpg" style="height: 100%;" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="titulo-inicio">Menú</h1>
	            </div>
	          </div>
	        </div>
	      </div>
		</div>
		<div class="container">
		
		<?php
			$indice=0;
			while($row=mysqli_fetch_array($result)){
				if($indice==3){
					$indice=0;
				}
				$plato=$row['plato'];
				$precio=$row['precio'];
				$img=$row['url_img'];
				$descripcion=$row['descripcion'];
				
		?>
				
					<?php if($indice==0){ ?>
					<div class="row">
					<?php }	?>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<?php
										echo $plato;
									?>
								</div>
								<div class="panel-body">
									<?php
										echo "<img src='estilos/img/menu/".$img."' class='img-responsive' style='width:100%; height:auto;' alt='img'>";
									?>
								</div>
								<div class="panel-footer">
									<div>
										<div>
											<?php
												echo "<p class='descripcion-menu'>".$descripcion."</p>";
											?>
										</div>
										<div>
											<?php
												echo "<p class='precio'>$".$precio."</p>";
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php if($indice==2){ ?>
					</div>
					<?php }	
					$indice++;
				}
				?>
			</div>
	</div>
	<footer>
			<?php
				include("footer.php");
			?>
		</footer>
</body>
</html>