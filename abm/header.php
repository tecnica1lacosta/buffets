<?php
if(!isset($_SESSION["documento"]) || $_SESSION["documento"] ==""){
  $_SESSION["url_menu"]="menu_de_muestra.php";
  $_SESSION["logout_icono"]="glyphicon glyphicon-log-in";
  $_SESSION["logout_texto"]="Login";
  $_SESSION["logout"]="login.php";
  $_SESSION["nombre"]="";
  $_SESSION["apellido"]="";
  $_SESSION["icono_user"]="";
  $_SESSION["admin_logo"]="";
  $_SESSION["admin_texto"]="";
  $_SESSION["admin_header"]="";
  //$_SESSION["icono_burger"]="<img src='estilos/img/logo.gif' class='logo-gif' height='80px' alt='hamburguesa Gif Logo'>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <link rel="icon" href="../estilos/img/hamburguesa_icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="../estilos/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../estilos/estilos-login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../estilos/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="navbar-wrapper">
      <div class="container">
          <nav class="navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img src="../estilos/img/logo-descargar.png" class="logo" width="80px" alt="Logo BuffetS"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php" class="primer-p-nav p-nav">
                              <span class="glyphicon glyphicon-home" style="margin-right: 5px;"></span>Inicio
                            </a>
                        </li>
                        <li>
                            <a href="<?=$_SESSION['url_menu'];?>" class="p-nav"><span class="glyphicon glyphicon-cutlery" style="margin-right: 5px;"></span>Menú
                            </a>
                        </li>
                        <li>
                            <a href="informacion.php" class="p-nav"><span class="glyphicon glyphicon-info-sign" style="margin-right: 5px;"></span>Información
                            </a>
                        </li>
                        <li>
                          <a href="canasta.php" class="p-nav"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 5px;"></span>Carrito</a>
                        </li>
                        <li>
                          <?=$_SESSION['admin_header']; ?>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="<?=$_SESSION['logout'];?>" class="p-nav"><span class="<?=$_SESSION['logout_icono'];?>" style="margin-right: 5px;"></span><?=$_SESSION['logout_texto'];?>
                          </a>
                      </li>
                      <li>
                        <!--<?=$_SESSION['icono_burger'];?>-->
                        <script>
                          var hora=new Date();
                          var minutos=new Date();
                          var hora_cartel_desde=9;
                          var hora_cartel_hasta=10;
                          var minuto_cartel_desde=0;
                          var minuto_cartel_hasta=30;
                          if (hora.getHours() >= hora_cartel_desde && hora.getHours() <= hora_cartel_hasta && minutos.getMinutes() >= minuto_cartel_desde && minutos.getMinutes() <= minuto_cartel_hasta) {
                            document.write("<img src='../estilos/img/cartel-abierto.jpg' class='cartel'");
                          }
                          else{
                            document.write("<img src='../estilos/img/cartel-cerrado.jpg' class='cartel'");
                          }
                        </script>
                      </li>
                      <li>
                        <h2 class="bienvenido">
                          <?=$_SESSION['nombre']." ".$_SESSION['apellido'];?>
                        </h2>
                      </li>
                      <li>
                        <center>
                          <span class="<?=$_SESSION['icono_user'];?>"></span>
                        </center>
                      </li>
                    </ul>
                </div>
              </div>
          </nav>
        </div>
    </div>
  </header>

</body>
</html>
