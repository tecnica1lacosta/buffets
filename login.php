<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="icon" href="estilos/img/hamburguesa_icono.png">
</head>
<body>
    <header>
      <?php
        include("header.php");
      ?>
    </header>

    <div class="container-fluid container-fluid-login">
      

        <div class="container-fluid">
              <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8 contenido-login">
                    <form action="iniciar_sesion.php" method="POST" class="form-login">
                        <h2 class="titulo-login">Login</h2>
                        <br>
                        <center>
                            <span class="glyphicon glyphicon-user glyphicon-user-login"></span>
                        </center>
                        <br>
                        <br>
                        <div class="input-container">
                          <i class="fa fa-user icon"></i>
                          <input class="input-field" type="text" placeholder="Ingrese su usuario" name="usuario" id="usuario" required="" autocomplete="off">
                        </div>
                        <div class="input-container">
                          <i class="fa fa-key icon"></i>
                          <input class="input-field" type="password" placeholder="Ingrese su contraseña" name="password" id="password" required="">
                        </div>
                        <button type="submit" class="btn btn-login">Ingresar</button>
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
