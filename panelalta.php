<?php
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
	<title>Alta</title>
    <link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>

    <header>
        <?php 
          include("header.php");
        ?>
    </header>
    
	<div class="container-fluid-inicio">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="estilos/img/menu-jumbo.jpg" style="height: 100%;" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="titulo-inicio">Añadir un nuevo menú</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm container-fluid-inicio">
                    <form class="form-horizontal form-panealta" action="abm/alta.php" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="text-center header">Añadir menú</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 col-xs-2 text-center icono-alta"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8 col-xs-10">
                                    
                                    <input id="fname" name="plato" type="text" placeholder="Plato" class="input-panealta" autocomplete="off" required>
                                
                                </div>
                            </div>


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 col-xs-2 text-center icono-alta"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8 col-xs-10">

                                    <input id="lname" name="precio" type="number" max="100" min="10" placeholder="Precio" autocomplete="off" class="input-panealta" required>

                                </div>
                            </div>



                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 col-xs-2 text-center icono-alta"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8 col-xs-10">

                                <label for="estado">Estado: </label>
                                    
                                    <p>Disponible(1)
                                    No disponible(2)
                                    </p>
                                    <input type="number" id="estado" name="estado" placeholder="Estado" class="input-panealta">
                                
                                </div>
                            </div>



                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 col-xs-2 text-center icono-alta"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8 col-xs-10">
                                    
                                    <input id="phone" name="stock" type="number" min="0" max="" placeholder="Stock" autocomplete="off" class="input-panealta">

                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 col-xs-2 text-center icono-alta"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8 col-xs-10">

                                    <textarea class="input-panealta" id="message" name="descripcion" placeholder="Descripcion" autocomplete="off" rows="7"></textarea>
                                
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 col-xs-2 text-center icono-alta"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Suba una imagen del producto:
                                    </label>
                                    <input name="imagen" type="file" maxlength="150">
                                </div>
                            </div>

                            <div class="form-group mayor">

                                <div class="col-md-12 text-center">
                                    <button type="submit" value="Agregar" name="enviar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-folder-open icono-alta" style="margin-right: 10px;"></span>Subir</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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