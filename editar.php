<?php
session_name("loginbuffet");
session_start();

if (isset($_GET["id"])) {
	$id=$_GET["id"];
}else
{

	header("Location: admin/home.php");
	exit();
}

require_once("conexion.php");


$result=mysqli_query($con, "SELECT * FROM menu WHERE id_menu=$id;");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Menú</title>
    <link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>

    <header>
        <?php 
          include("header.php");
        ?>
    </header>
    
	<div class="container-fluid-inicio">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm container-fluid-inicio">
                    <form class="form-horizontal form-panealta" action="editar_menu.php" method="POST">
                        <fieldset>
                            <legend class="text-center header">Editar Menú</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center icono-alta"><i class="fa fa-user bigicon"></i></span>


                                <div class="col-md-8">
                                    <input type="hidden" name="id" value="<?= $id;?>">

                                    <label for="plato">Plato: </label>

                                    <input type="text" id="plato" name="plato" value="<?=$row['plato'];?>" autocomplete="off" class="input-panealta">                           
                                </div>
                            </div>


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center icono-alta"><i class="fa fa-user bigicon"></i></span>

                                <div class="col-md-8">

                                    <label for="precio">Precio: </label>

                                    <input type="number" id="precio" name="precio" value="<?=$row['precio'];?>" autocomplete="off" class="input-panealta">

                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center icono-alta"><i class="fa fa-pencil-square-o bigicon"></i></span>

                                <div class="col-md-8">
                                    
                                    <label for="descripcion">Descripción: </label>

                                    <input type="text" id="descripcion" name="descripcion" value="<?=$row['descripcion'];?>" autocomplete="off" class="input-panealta">
                                
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center icono-alta"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">

                                    <label for="estado">Estado: </label>
                                    
                                    <p>Disponible(1)
                                    No disponible(2)
                                    </p>
                                    <input type="number" id="estado" name="estado" value="<?=$row['estado'];?>" class="input-panealta">
                                
                                </div>
                            </div>



                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center icono-alta"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    
                                    <label for="stock">Stock: </label>
                                    
                                    <input type="number" id="stock" name="stock" value="<?=$row['stock'];?>" class="input-panealta">

                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center icono-alta"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    
                                    <label>Cambie la imagen del producto(opcional):
                                    </label>
                                    <input name="imagen" type="file" maxlength="150">

                                </div>
                            </div>


                            <div class="form-group mayor">

                                <div class="col-md-12 text-center">
                                    
                                    <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-folder-open icono-alta" style="margin-right: 10px;"></span>Editar</button>
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