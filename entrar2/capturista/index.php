<?php
session_start();

if(isset($_SESSION['user'])) 
{
  
  ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body>
     
  <nav class=" light-blue darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Bienvenido</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Nombre</a></li>
        <li><a href="../controles/logout.php">Cerrar Sesion</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Nombre</a></li>
        <li><a href="#">Telefono</a></li>
        <li><a href="#">Email</a></li>
        <li><a href="#">Direccion</a></li>
        <br><br>
        <li><a href="#">Cerrar Sesion</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

    <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Captura Aqui</h1>
        <div class="row center">
          <h5 class="header col s12 light">Esta es la interfas para que puedeas capturar los libros y la informacion de los libros de una forma sencilla</h5>
        </div>
        <div class="row center">
          <a href="formulario.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Agregar Libro</a>
        </div>
        <div class="row center">
          <a href="mostrar.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Visualizar Contenido</a>
        </div>
        

        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">perm_media</i></h2>
            <h5 class="center">Almacenado</h5>

            <p class="light">Esta interfaz esta diseñada perfectamente para el personal que se dedique a capturar todo el contenido de la biblioteca.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">thumb_up</i></h2>
            <h5 class="center">Facil</h5>

            <p class="light">Es muy facil de usar que tan solo con dar un click podras insertar toda la informacion necesaria para nuestra biblioteca.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">https</i></h2>
            <h5 class="center">Seguridad de contenido</h5>

            <p class="light">Para tener un mejor control y seguridad del contenido solo podras capturar la informacion pero no se podra editar, para mas informacion consulte con el administrador.</p>
          </div>
        </div>
      </div>

    </div>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
 
</body>
</html>
  </body>
</html>

<?php 
}else
{
  echo "<script type='text/javascript'>
        alert('no has iniciado sesion');
        window.location='../index.php';
        </script>";
}
 ?>