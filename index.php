<?php
	session_name("loginbuffet");
	session_start();

	if(!isset($_SESSION["documento"]) || $_SESSION["documento"] ==""){
	  $_SESSION["url_menu"]="menu_de_muestra.php";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="icon" href="estilos/img/hamburguesa_icono.png">

</head>
<body>
	<header>
		<?php
			include("header.php");
		?>
	</header>

    <div class="container-fluid container-fluid-index">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner" role="listbox">
		        <div class="item active">
		          <img class="first-slide" src="estilos/img/ej1.jpg" style="height: 100%;" alt="First slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1 class="titulo-inicio">Buffet'S</h1>
		              <p class="texto-inicio">El mejor menú en la mejor escuela</p>
		              <p><a class="btn btn-lg btn-primary btn-index" href="<?=$_SESSION['url_menu'];?>" role="button">Menú</a></p>
		            </div>
		          </div>
		        </div>
		        <div class="item">
		          <img class="second-slide" src="estilos/img/ej2.jpg" style="height: 100%;" alt="Second slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1 class="titulo-inicio">Buffet'S</h1>
		              <p class="texto-inicio">Los menus más variados y más ricos de toda la costa</p>
		              <p><a class="btn btn-lg btn-primary btn-index" href="<?=$_SESSION['url_menu'];?>" role="button">Menú</a></p>
		            </div>
		          </div>
		        </div>
		        <div class="item">
		          <img class="third-slide" src="estilos/img/ej3.jpg" style="height: 100%;" alt="Third slide">
		          <div class="container">
		            <div class="carousel-caption">
		              <h1 class="titulo-inicio">Buffet'S</h1>
		              <p class="texto-inicio">Con el kiosco más completo y barato de todos</p>
		              <p><a class="btn btn-lg btn-primary btn-index" href="<?=$_SESSION['url_menu'];?>" role="button">Menú</a></p>
		            </div>
		          </div>
		        </div>
		      </div>
		      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		      </a>
		      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </div>

		    <div class="container marketing">

		      <!-- Three columns of text below the carousel -->
		      <div class="row">
		        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		          <img class="img-circle" src="estilos/img/menu/hamburguesa-completa.jpg" alt="Hamburguesa completa" width="140" height="140">
		          <h2>Hamburguesa completa</h2>
		          <p>mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
		          <p><a class="btn btn-primary" href="<?=$_SESSION['url_menu'];?>" role="button">Más detalles &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		          <img class="img-circle" src="estilos/img/menu/mila-completa.jpg" alt="Milanesa completa" width="140" height="140">
		          <h2>Sandwich de milanesa completa</h2>
		          <p>itor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
		          <p><a class="btn btn-primary" href="<?=$_SESSION['url_menu'];?>" role="button">Más detalles &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		          <img class="img-circle" src="estilos/img/menu/mila-jyq.jpg" alt="Milanesa con jamon y queso" width="140" height="140">
		          <h2>Sandwich de milanesa con jamon y queso</h2>
		          <p>lisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		          <p><a class="btn btn-primary" href="<?=$_SESSION['url_menu'];?>" role="button">Más detalles &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		      </div><!-- /.row -->


		      <!-- START THE FEATURETTES -->

		      <hr class="featurette-divider">

		      <div class="row featurette">
		        <div class="col-md-7">
		          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
		          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		        </div>
		        <div class="col-md-5">
		          <img class="img-responsive center-block img-item-inicio" src="estilos/img/ej4.jpg" alt="Generic placeholder image">
		        </div>
		      </div>

		      <hr class="featurette-divider">

		      <div class="row featurette">
		        <div class="col-md-7 col-md-push-5">
		          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
		          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		        </div>
		        <div class="col-md-5 col-md-pull-7">
		          <img class="img-responsive center-block img-item-inicio" src="estilos/img/ej5.jpg" alt="Generic placeholder image">
		        </div>
		      </div>

		      <hr class="featurette-divider">

		      <div class="row featurette">
		        <div class="col-md-7">
		          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
		          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		        <script type="text/javascript">
					function startTime(){
						today=new Date();
						h=today.getHours();
						m=today.getMinutes();
						s=today.getSeconds();
						m=checkTime(m);
						s=checkTime(s);
						document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
						t=setTimeout('startTime()',5);
					}
					function checkTime(i)
					{if (i<10) {i="0" + i;}return i;}
					window.onload=function(){startTime();}
				</script>
				<div id="reloj" style="font-size:20px;"></div>

		        </div>
		        <div class="col-md-5">
		          <img class="img-responsive center-block img-item-inicio" src="estilos/img/ej6.jpg" alt="Generic placeholder image">
		        </div>
		      </div>

		      <hr class="featurette-divider">
		    </div>
		<footer>
	        <?php
	        	include("footer.php");
	        ?>
    	</footer>
  	</div>
</body>
</html>