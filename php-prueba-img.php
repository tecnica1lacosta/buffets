<?php

include("conexion.php");
$precio = $_POST['precio'];
$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "estilos/img/" . $_FILES['imagen']['name'];
$destino = "estilos/img/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

if (!empty($resultado)){

                @mysqli_query($con,"INSERT INTO menu (plato,precio,descripcion,estado,stock,url_img) VALUES ('puto','".$precio."','puto',1,10,'".$nombre."')"); 
                echo "el archivo ha sido movido exitosamente";

                }else{

                    echo "Error al subir el archivo";

                    }
?>