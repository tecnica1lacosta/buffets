<?php
require_once("conexion.php");
include("sesion-login.php");
$consulta=mysqli_query($con, "SELECT COUNT(dni) AS CANTIDAD FROM pedido WHERE dni=".$_SESSION['documento'].";");
$resu_consulta=mysqli_fetch_array($consulta);
if($resu_consulta['CANTIDAD']==1){
	$habilitar_btn=0;
}else{
	$consulta2=mysqli_query($con, "SELECT if(time(now()) BETWEEN hora_pedido_desde AND hora_pedido_hasta, 1, 0) AS ESTADO FROM buffet_horas;");
	$resu_consulta2=mysqli_fetch_array($consulta2);
	if($resu_consulta2['ESTADO']){
		$habilitar_btn=1;
	}else{
		$habilitar_btn=0;
	}

}

/*while($fila=mysqli_fetch_array($consulta)){
	$resultado=$fila['CANTIDAD'];
}*/

$result=mysqli_query($con, "CALL select_menu();");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menú de Pedidos</title>
	<link rel="icon" href="estilos/img/hamburguesa_icono.png">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<?php
			include("header.php");
		?>
	</header>

	<div class="container-fluid container-fluid-inicio">
		<!--<div class="jumbotron jumbotron-inicio jumbotron-inicio-margenes" style="border-radius: 0px;">
		  <div class="container text-center jumbotron-texto-menu">
		    <h1>Menú De Pedidos</h1>      
		    <p>El menú más rico y completo de toda la costa</p>
		  </div>
		</div>-->
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
					$id_menu=$row['id_menu'];
					
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
													echo "<p class='descripcion'>".$descripcion."</p>";
												?>
											</div>
											<div class="pater">
												<div>
													<?php
														echo "<p class='precio'>$".$precio."</p>";
													?>
												</div>
												<div style="float: right;">
												<?php if($habilitar_btn) { ?>
													<p><a class="btn btn-lg btn-primary btn-index" href="<?="canasta.php?pid_menu=$id_menu";?>" role="button">Encargar</a></p>
												<?php }else{ ?>
													<p><a class="btn btn-lg btn-primary btn-index" href="#" role="button" disabled>Encargar</a></p>
												<?php } ?>
													<!--
													<script type="text/javascript">
														function alerta()
														    {
														    var mensaje;
														    var opcion = confirm("Confirme su pedido");
														    if (opcion == true) {
														        mensaje = "OK";
															} else {
															    mensaje = "Cancelar";
															}
														}
													</script>
													<button onclick="alerta()" class="">Clicka para mostrar mensaje</button>
													<p><a class="btn btn-lg btn-primary btn-index" href="canasta.php?pid_menu=<?=$id_menu;?>" role="button" onclick="alerta()">Encargar</a></p>-->
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