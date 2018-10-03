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
	<?php
	include "controles/conexion.php";

	$id=$_GET['id_lib'];
	$conexion=conexion();
	$sql="SELECT id_lib,n_serie,nom_libro,n_libros,editorial,autor,biblioteca,inf_libro,n_paginas,direccion,telefono,pagina,e_mail,mapas FROM libros where id_lib='$id'"; 
	$result=mysqli_query($conexion,$sql);
	$mostrar=mysqli_fetch_row($result);

	 ?>
	 
	 <div class="form-group container">
		
			
		<h1>Editar</h1>
		<form method="post" action="controles/editar.php">
		<input type="text" name="id_lib" hidden
		value="<?php print $mostrar[0] ?>">


		<label>Numero de serie</label>
		<input type="text" name="txtNS" class="form-control" value="<?php print $mostrar[1] ?>">
		<label>Nombre del Libro</label>
		<input type="text" name="txtNomlibro" class="form-control" value="<?php print $mostrar[2] ?>">
		<label>Numero de Libros Disponibles</label>
		<input type="text" name="txtNlibro" class="form-control" value="<?php print $mostrar[3] ?>">
		<label>Editorial</label>
		<input type="text" name="txtEditorial" class="form-control" value="<?php print $mostrar[4] ?>">
		<label>Autor</label>
		<input type="text" name="txtAutor" class="form-control" value="<?php print $mostrar[5] ?>">
		<label>Nombre de la Biblioteca</label>
		<input type="text" name="txtBiblio" class="form-control" value="<?php print $mostrar[6] ?>">
		<label>Informacion del Libro</label>
		<input type="text" name="txtInfol" class="form-control" value="<?php print $mostrar[7] ?>">
		<label>Numero de Paginas</label>
		<input type="text" name="txtNump" class="form-control" value="<?php print $mostrar[8] ?>">
		<label>Direccion</label>
		<input type="text" name="txtDirec" class="form-control" value="<?php print $mostrar[9] ?>">
		<label>Telefono</label>
		<input type="text" name="txtTel" class="form-control" value="<?php print $mostrar[10] ?>">
		<label>Direccion WEB de la Biblioteca</label>
		<input type="text" name="txtDweb" class="form-control" value="<?php print $mostrar[11] ?>">
		<label>E-MAIL</label>
		<input type="text" name="txtEmail" class="form-control" value="<?php print $mostrar[12] ?>">
		<label>Link del Mapa</label>
		<input type="text" name="txtMaps" class="form-control" value="<?php print $mostrar[13] ?>">
		<br>
		<button class="btn btn-primary">Editar</button>
		</span>
	</form>
		
	</div>



<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


</body>
</html>

<?php
} else{
  echo "<script type='text/javascript'>
        alert('no has iniciado sesion');
        window.location='../index.php';
        </script>";
}


 ?>