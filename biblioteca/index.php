<?php
session_start();

if(isset($_SESSION['user'])) 
{
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Bienvenido</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  
<nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      
      <a class="breadcrumb">Biblioteca Lobos </a>
      <ul class="right hide-on-med-and-down">
        
        <li><i class="mdi-action-account-circle"></i></li>
        <li><?php echo $_SESSION['user']; ?></li>
        <li><a href="../controles/logout.php">Cerrar Sesion</a></li>
      </ul>


      <ul id="nav-mobile" class="side-nav" style="color:black">
        
        <li><img class="circle responsive-img" src="img/IMG.png" width="100px" height="100px"></li>
        <li>Matricula:<?php print $_SESSION['user']; ?></li>       
        <br><br><br>
        <li><a href="../controles/logout.php">Cerrar Sesion</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>


    
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Bienvenido</h1>
        <div class="row center">
          <h5 class="header col s12 light">Esta es la interfaz de usuario donde podras visualizar tu libro de una manera secilla y eficiente</h5>
        </div>
        <div class="row center">
          <a href="principal.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Iniciar</a>
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
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Velocidad en encontrar</h5>

            <p class="light">Encontraras gran variedad de ejemplares 
              para que puedad apoyarte</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">lock</i></h2>
            <h5 class="center">Segurirdad en tu cuenta</h5>

            <p class="light">En esta plataforma encontraras una gran 
              forma de encontrar tus libros con seguridad de navegacion</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">thumb_up</i></h2>
            <h5 class="center">Facil de usar</h5>

            <p class="light">En esta pagina podras usarla de manera sencilla e intuitiva para ti.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Instituto Tecnologico de Tlahuac 2</h5>
          <p class="grey-text text-lighten-4">Esta pagina esta patrocinada por el el Tecnologico Nacional de Mexico el cual solo tienen acceso los alumnos del ITT2 pero pronto se expandira a todos los Institutos Tecnologicos</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contacto con el desarrollador</h5>
          <ul>
          <li><a href="#" class="white-text">Technospear Inc.</a></li>      
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contacto</h5>
          <ul>
            <li><a class="white-text" href="http://www.ittlahuac2.edu.mx/">Instituto Tecnologico de Tlahuac 2</a></li>
            <li><a class="white-text" href="http://www.tecnm.mx/">Tenologico Nacional de Mexico</a></li>
            <li><a class="white-text" href="http://www.gob.mx/sep">SEP</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Tecnospear Inc. <a class="orange-text text-lighten-3" href="http://materializecss.com">Material</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

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