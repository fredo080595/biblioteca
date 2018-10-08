<?php
session_start();

unset($_SESSION['consulta']);

if(isset($_SESSION['user'])) 
{
  
  ?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Contenido</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" media="screen,projection" href="select2/css/select2.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="select2/js/select2.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</head>
<body>


 <nav class="light-blue darken-2">
  <div class="container">
    <div class="nav-wrapper ">
      <a href="index.php" class="brand-logo">Biblioteca Lobos</a>
      <ul class="right hide-on-med-and-down">
        <li></li>
        <li>Matricula:<?php print $_SESSION['user']; ?></li>
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
  </div>
  </nav>


  <div id="buscador">
    
  </div>

	<div id="muestra"></div>





</body>
</html>

<script>
  
  $(document).ready(function(){

        $('#muestra').load('tablas/tablas.php');
        $('#buscador').load('buscar.php');

  });

</script>


<?php 
}else
{
  echo "<script type='text/javascript'>
        alert('no has iniciado sesion');
        window.location='../index.php';
        </script>";
}
 ?>