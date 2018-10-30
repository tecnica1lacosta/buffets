<?php
	include("sesion-login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Horarios</title>
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
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="estilos/img/contrato.jpg" style="height: 100%;" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="titulo-inicio">Horarios de pedido</h1>
	            </div>
	          </div>
	        </div>
	      </div>
		</div>
		<form action="horario-pedir-php.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>
							Horario para encargar desde: 
						</h2>
						<input type="time" name="pedir_desde">
					</div>
					<div class="col-md-4">
						<h2>
							Horario para encargar hasta: 
						</h2>
						<input type="time" name="pedir_hasta">
					</div>
					<div class="col-md-4">
						<img src="estilos/img/menu-jumbo2.jpg" class="img-responsive">
					</div>
				</div>
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-4">
						<h2>
							Horario para cancelar encargue desde: 
						</h2>
						<input type="time" name="cancelar_desde">
					</div>
					<div class="col-md-4">
						<h2>
							Horario para cancelar encargue hasta: 
						</h2>
						<input type="time" name="cancelar_hasta">
					</div>
					<div class="col-md-4">
						<img src="estilos/img/cancelar.jpg" class="img-responsive">
					</div>
				</div>
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-4">
						<h2>
							Horario para retirar encargue desde: 
						</h2>
						<input type="time" name="retirar_desde">
					</div>
					<div class="col-md-4">
						<h2>
							Horario para retirar encargue hasta: 
						</h2>
						<input type="time" name="retirar_hasta">
					</div>
					<div class="col-md-4">
						<img src="estilos/img/delivery.jpg" class="img-responsive">
					</div>
				</div>
				<!--<p><a class="btn btn-lg btn-primary btn-index" type="submit" role="button"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px;"></span>Cambiar</a>-->
				<input type="submit" value="Cambiar" name="enviar" class="btn btn-lg btn-primary btn-index">
			</div>
		</form>
		<footer>
		<?php 
			include("footer.php");
		?>
	</footer>
	</div>
</body>
</html>