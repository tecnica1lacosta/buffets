<?php
require_once("conexion.php");
$result=mysqli_query($con, "CALL select_menu();");

session_name("loginbuffet");
session_start();
if(!isset($_SESSION["documento"]) || $_SESSION["documento"] ==""){
   header("Location: login.php");
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion menu</title>
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
				$estado=$row['estado'];
				$stock=$row['stock'];
				
		?>
				
					<?php if($indice==0){ ?>
					<div class="row" style="margin-top: 40px;">
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
												echo "<p class='descripcion'>Descripción: ".$descripcion."</p>";
											?>
										</div>
										<div class="pater">
											<div>
												<?php
													echo "<p class='texto-editar-borrar'>Precio: $".$precio."</p>";
													echo "<p class='texto-editar-borrar'>Estado: ".$estado."</p>";
													echo "<p class='texto-editar-borrar'>Stock: ".$stock."</p>";
												?>
											</div>
											<div style="float: right;">
												<p><a class="btn btn-lg btn-primary btn-index" href='editar.php?id=<?=$row['id_menu'];?>' role="button"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px;"></span>Editar</a></p>
												<p><a class="btn btn-lg btn-primary btn-index" href='borrar.php?id=<?=$row['id_menu'];?>' role="button"><span class="glyphicon glyphicon-trash" style="margin-right: 5px;"></span>Borrar</a></p>
											</div>
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




