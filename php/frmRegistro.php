<?php require '../Model/DAOCliente.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Renta de Vehiculos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar nav-principal navbar-fixed-top" role="navigation">


      <div class="container">
        <div class="navbar-header">

          <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
          </button>
          <a class="navbar-brand link-personalizado" href="../index.php">Proj Renta</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right nav-1">
              <li><a href="vistaVehiculos.php">Vechículos
                <span class="glyphicon icon-automobile"></span></a></li>
              <li><a href="vistaDescuentos.php">Descuentos
                <span class="glyphicon icon-gift"></span></a></li>
              <li><a href="vistaPaquetes.php">Paquetes
                <span class="glyphicon icon-briefcase"></span></a></li>
              <li><a href="vistaContacto.php">Contactenos
                <span class="glyphicon icon-envelop"></span></a></li>
              <li><a href="#" data-toggle="modal">Registro
                <span class="glyphicon icon-user-plus"></span></a></li>
              <li><a href="Session.php">Ingresar
                <span class="glyphicon icon-users"></span></a></li>
            </ul>
          </div><!--/.navbar-collapse -->
        </div><!--/.navbar-collapse -->
    </nav>
    <section class="app-principal">
      <div class="container">
        <h1>Proj Renta</h1>
        <p>Renta de vehículos en linea</p>
      <div>
  <!-- Main jumbotron for a primary marketing message or call to action -->
    </section>
    <br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 justificado">
          <form class="form-horizontal" method="POST">
            <div class="form-group">
              <label for="nombre"></label>
              <input class="" type="text" name="nom" placeholder="Nombre">
            <!--</div>-->
            <!--<div class="form-group">-->
              <label for="edad"></label>
              <input class="" type="text" name="edad" placeholder="Edad">
            <!--</div>-->
            <!--<div class="form-group">-->
              <label for="telefono"></label>
              <input class="" type="text" name="tel" placeholder="Teléfono">
            <!--</div>-->
            <!--<div class="form-group">-->
              <label for="correo"></label>
              <input class="" type="text" name="mail" placeholder="E-mail">
            <!--</div>-->
            <!--<div class="form-group">-->
              <label for="nacionalidad"></label>
              <input class="" type="text" name="nac" placeholder="Nacionalidad">
            <!--</div>-->
            <!--<div class="form-group">-->
              <label for="pass"></label>
              <input class="" type="password" name="pass" placeholder="Password">
            <!--</div>-->
            <!--<div class="form-group">-->
              <label for="con-pass"></label>
              <input class="" type="password" name="con-pass" placeholder="Confirm Password">
            </div>
            <center>
              <input type="submit" name="acept" value="Aceptar" class="btn btn-primary">
              <input type="submit" name="cancel" value="Cancelar" class="btn btn-default">
            </center>
          </form>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; BRBJ S.A. de C.V. 2015</p>
      </footer>



    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
<?php
$dao = new DAOCliente();
function cargar(){
  $clie = new Cliente();
  $clie -> setIdCliente("");
  $clie -> setNombre($_POST["nom"]);
  $clie -> setEdad($_POST["edad"]);
  $clie -> setTelefono($_POST["tel"]);
  $clie -> setCorreo($_POST["mail"]);
  $clie -> setPass($_POST["pass"]);
  $clie -> setNacionalidad($_POST["nac"]);
  $clie -> setTipo(1);
  return $clie;
}
if (isset($_POST["acept"])) {
  $dao-> insertar(cargar());
  echo '<script language="javascript">location.href = "../index.php";</script>';
}elseif(isset($_POST["cancel"])){
  echo '<script language="javascript">location.href = "../index.php";</script>';
}
?>
