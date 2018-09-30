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
	<form method="post" action="controles/insertar.php">
		<span class="grey-text text-darken-4">
		<h1><span class="blue-text text-darken-2">Ingresa el contenido</span></h1>
		<label>Numero de serie</label>
		<input type="text" name="txtNS" class="form-control">
		<label>Nombre del Libro</label>
		<input type="text" name="txtNomlibro" class="form-control">
		<label>Numero de Libros Disponibles</label>
		<input type="text" name="txtNlibro" class="form-control">
		<label>Editorial</label>
		<input type="text" name="txtEditorial" class="form-control">
		<label>Autor</label>
		<input type="text" name="txtAutor" class="form-control">
		<label>Nombre de la Biblioteca</label>
		<input type="text" name="txtBiblio" class="form-control">
		<label>Informacion del Libro</label>
		<input type="text" name="txtInfol" class="form-control">
		<label>Numero de Paginas</label>
		<input type="text" name="txtNump" class="form-control">
		<label>Direccion</label>
		<input type="text" name="txtDirec" class="form-control">
		<label>Telefono</label>
		<input type="text" name="txtTel" class="form-control">
		<label>Direccion WEB de la Biblioteca</label>
		<input type="text" name="txtDweb" class="form-control">
		<label>E-MAIL</label>
		<input type="text" name="txtEmail" class="form-control">
		<label>Link del Mapa</label>
		<input type="text" name="txtMaps" class="form-control">
		<br>

		<button class="btn btn-primary">Insertar</button>
		</span>

	

	




  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>