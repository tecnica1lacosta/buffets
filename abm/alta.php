<?php
include("conexion.php");
//evitar enyeccion sql
/*$query=sprintf("Call agregar_menu('%s','%s','%s','%s','%s')",
mysqli_real_escape_string($con,$_POST['plato']),
mysqli_real_escape_string($con,$_POST['precio']),
mysqli_real_escape_string($con,$_POST['descripcion']),
mysqli_real_escape_string($con,$_POST['estado']),
mysqli_real_escape_string($con,$_POST['stock']));
//enviamos la consulta para el servidor 
$conexion=mysqli_query($con,$query) or die ("error");*/
//insert into menu(plato,precio,descripcion,estado,stock)
$precio = $_POST['precio'];
$plato = $_POST['plato'];
$estado = $_POST['estado'];
$stock = $_POST['stock'];
$descripcion = $_POST['descripcion'];

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "../estilos/img/menu/" . $_FILES['imagen']['name'];
$destino = "../estilos/img/menu/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

if (!empty($resultado)){

                @mysqli_query($con,"INSERT INTO menu (plato,precio,descripcion,estado,stock,url_img) VALUES ('".$plato."','".$precio."','".$descripcion."','".$estado."','".$stock."','".$nombre."')"); 
                echo "el archivo ha sido movido exitosamente";
                header("Location: ../panelalta.php");

                }else{

                    echo "Error al subir el archivo";

                    }

?>
