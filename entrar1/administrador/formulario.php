<?php
session_start();

if(isset($_SESSION['user'])) 
{
  
  ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Capturador</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue darken-2">
	<div class="nav-wreapper container">
		<a id="logo-container" class="band-logo">Biblioteca Virtual Lobos</a>
		<a href="index.php" class="breadcrumb">Inicio <i class="material-icons">assignment_ind</i></a>
	</div>

	
<div class="form-group container">
	<form method="post" enctype="multipart/form-data" action="controles/insertar.php">
		<span class="grey-text text-darken-4">
		<h1><span class="blue-text text-darken-2">Ingresa el contenido</span></h1>

		<label>Numero de serie</label>
		<input type="text" name="txtNS" class="form-control" required>
		<label>Nombre del Libro</label>
		<input type="text" name="txtNomlibro" class="form-control" required>
		<label>Numero de Libros Disponibles</label>
		<input type="text" name="txtNlibro" class="form-control" required>
		<label>Editorial</label>
		<input type="text" name="txtEditorial" class="form-control" required>
		<label>Autor</label>
		<input type="text" name="txtAutor" class="form-control" required>
		<label>Nombre de la Biblioteca</label>
		<input type="text" name="txtBiblio" class="form-control" required>
		<label>Informacion del Libro</label>
		<input type="text" name="txtInfol" class="form-control" required>
		<label>Numero de Paginas</label>
		<input type="text" name="txtNump" class="form-control" required>
		<label>Direccion</label>
		<input type="text" name="txtDirec" class="form-control" required>
		<label>Telefono</label>
		<input type="text" name="txtTel" class="form-control">
		<label>Direccion WEB de la Biblioteca</label>
		<input type="text" name="txtDweb" class="form-control"required>
		<label>E-MAIL</label>
		<input type="text" name="txtEmail" class="form-control">
		<label>Link del Mapa</label>
		<input type="text" name="txtMaps" class="form-control"required>
		<br>
		<div class="file-field input-field">
		<div class="btn">
			<span>Inserta Imagen</span>
		<input type="file" name="fotolib" required>
		</div>
		 <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
	    </div>
	    
	    <div class="file-field input-field">
		<div class="btn">
			<span>Inserta Libro</span>
		<input type="file" name="libroDato" >
		</div>
		 <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
	    </div>
		<br><br>
		
		<button class="btn btn-primary">Insertar</button>
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
}else
{
  echo "<script type='text/javascript'>
        alert('no has iniciado sesion');
        window.location='../index.php';
        </script>";
}
 ?>