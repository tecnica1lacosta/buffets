<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
     
	<link rel="stylesheet" href="../estilos/bootstrap/css/bootstrap.min.css">
	
   <link rel="icon" href="../estilos/img/hamburguesa_icono.png">
</head>

<body>

    <header>
        
        <?php 
          include("heade.php");
         
         ?>
    </header>
    
	<div class="container put">
        
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="alta.php" method="POST">
                    <fieldset>
                        <legend class="text-center header">Alta de Comida</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                
                                <input id="fname" name="plato" type="text" placeholder="Plato" class="form-control" required>
                            
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">

                                <input id="lname" name="precio" type="number" max="100" min="10" placeholder="Precio" class="form-control" required>

                            </div>
                        </div>



                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">

                            <input type="radio" name="estado" checked="on" value="1" >Disponible
                             <input type="radio" name="estado"  value="2">No Disponible
                            
                            </div>
                        </div>



                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                
                                <input id="phone" name="stock" type="number" min="0" max="" placeholder="Stock" class="form-control">

                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">

                                <textarea class="form-control" id="message" name="descripcion" placeholder="Descripcion" rows="7"></textarea>
                            
                            </div>
                        </div>

                        <div class="form-group mayor">

                            <div class="col-md-12 text-center">
                                <span class="   glyphicon glyphicon-folder-open "></span>
                                

                                <button type="submit" class="btn btn-primary btn-lg">Subir</button>


                                

                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php 
       include("footer.php")
     ?>
</footer>
</body>
</html>