<?php
session_start();

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
</head>
<body>

 


 <nav class="light-blue darken-2">
  <div class="container">
    <div class="nav-wrapper ">
      <a href="index.php" class="brand-logo">Biblioteca Lobos</a>
      <ul class="right hide-on-med-and-down">
        <li><form>
          
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>
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

	<?php include "controles/conexion.php";
  ?>

	


<div class="row">
  <div class="container">
<table>
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Autor</th>
              <th data-field="name">Informacion Adicional</th>
              <th data-field="price">Libro</th>
          </tr>
        </thead>
  <?php

  
  $conexion=conexion();
  $sql="SELECT id_lib,nom_libro,autor,inf_libro,rutaimg from libros";
  $result=mysqli_query($conexion,$sql);

  while ($mostrar=mysqli_fetch_row($result)) {
   
  

   ?>
        <tbody>
          <tr>
            <td><a href="contenido.php?id_lib=<?php print $mostrar[0] ?>"><?php print $mostrar[1] ?></a></td>
            <td><?php print $mostrar[2] ?></td>
            <td><?php print $mostrar[3] ?></td>      
            <td><img src="../imglib/<?php print $mostrar[4] ?>" width="150px" height="227px"></td>
          </tr>
        </tbody>
        <?php } ?>
                
      </table>
      </div>
      </div>





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