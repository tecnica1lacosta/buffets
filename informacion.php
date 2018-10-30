<?php
	session_name("loginbuffet");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Información</title>
	<link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>
	<header>
		<?php
			include("header.php");
		?>
	</header>

	<div class="container-fluid container-fluid-informacion">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="estilos/img/contrato.jpg" style="height: 100%;" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="titulo-inicio">Terminos y Condiciones</h1>
	            </div>
	          </div>
	        </div>
	      </div>
		</div>
		
		<section id="about" class="section-padding">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-12 text-center marb-35">
		          <h1 class="header-h" style="color: #000;">La aplicación Buffet'S</h1>
		          <h4 class="dark-blue regular">Esta está creada para ser el nexo entre el alumno promedio y los encargados del buffet</h4>
		        </div>
		        <div class="col-md-1"></div>
		        <div class="col-md-10">
		          <div class="col-md-6 col-sm-6">
		            <div class="about-info">
		              <h2 class="heading" style="color: #000;">Horarios de uso de la plataforma web</h2>
		              <p>A continuación se detallara los horarios estipulados para poder realizar el encargue de la comida, horarios para realizar la cancelación del pedido y el horario para retirar el pedido ya realizado.<br>
		              	Todo pedido que haya sido cancelado estara nuevamente disponible para su compra en el buffet.<p>
		              	<span><p style="color: #e60000;">ATENCIÓN:</p></span>
		              	<p>Cabe aclarar que en caso de no retirar el pedido realizado logicamente sin haberlo cancelado anteriormente, se tomara como medida de consecuencia el bloqueo de la cuenta impidiendo la realización de un nuevo encargue hasta que el usuario afectado pague en el buffet en pedido no retirado.</p>
		              <div class="details-list">
		                <ul>
		                  <div class="media-2">
				            <div class="media-left">
				              <div class="contact-email bg-14 text-center" style="background-color: #1a53ff;"><span class="hour-icon fa fa-clock-o"></span></div>
				            </div>
				            <div class="media-body">
				              <h4 class="dark-blue regular">Horarios de pedido</h4>
				              <p class="light-blue regular alt-p" style="color: #000;"> Lunes a Viernes 09:00 - 10:30</p>
				            </div>
		          		  </div>
		                  <div class="media-2">
				            <div class="media-left">
				              <div class="contact-email bg-14 text-center" style="background-color: #1a53ff;"><span class="hour-icon fa fa-clock-o"></span></div>
				            </div>
				            <div class="media-body">
				              <h4 class="dark-blue regular">Horarios de cancelación</h4>
				              <p class="light-blue regular alt-p" style="color: #000;"> Lunes a Viernes 10:30 - 11:30</p>
				            </div>
		          		  </div>
		          		  <div class="media-2">
				            <div class="media-left">
				              <div class="contact-email bg-14 text-center" style="background-color: #1a53ff;"><span class="hour-icon fa fa-clock-o"></span></div>
				            </div>
				            <div class="media-body">
				              <h4 class="dark-blue regular">Horarios de retiro de pedido</h4>
				              <p class="light-blue regular alt-p" style="color: #000;"> Lunes a Viernes 11:50 - 13:00</p>
				            </div>
		          		  </div>
		                </ul>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-sm-6">
		            <img src="estilos/img/terminos-condiciones.jpg" alt="lista de tareas" class="img-responsive">
		          </div>
		        </div>
		        <div class="col-md-1"></div>
		      </div>
		    </div>
	  	</section>
	  	<footer>
			<?php
				include("footer.php");
			?>
		</footer>
	</div>
</body>
</html>