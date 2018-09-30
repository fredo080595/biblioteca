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

	<?php include "controles/conexion.php" ?>
<nav>
	<div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
      	<a id="logo-container" class="band-logo">Contenido</a>
        <a href="index.php" class="breadcrumb">Inicio <i class="material-icons">assignment_ind</i></a>
        
        </div>
      </div>
    </div>
  </nav>
	
		<div class="row">

		
		<table class="border striped hoverable responsive-table">
			<thead>
			<tr class="card-panel teal lighten-2">
				<td>Id</td>
				<td>Numero de serie</td>
				<td>Nombre del libro</td>
				<td>Numero de libros</td>
				<td>Editorial</td>
				<td>Autor</td>
				<td>Biblioteca</td>
				<td>Informacion</td>
				<td>Numero de paginas</td>
				<td>Direccion</td>
				<td>Telefono</td>
				<td>Pagina</td>
				<td>Email</td>
				<td>Mapas</td>
			</tr>
			</thead>

			<?php 
			$conexion=conexion();
			$sql="SELECT id_lib,n_serie,nom_libro,n_libros,editorial,autor,biblioteca,inf_libro,n_paginas,direccion,telefono,pagina,e_mail,mapas FROM libros";
			$result=mysqli_query($conexion,$sql);

			while ($mostrar=mysqli_fetch_row($result)) 
			{
			


			 ?>

			 <tbody>
			 <tr>
			 	<td><?php print $idItem=$mostrar[0]?></td>
			 	<td><?php print $mostrar[1] ?></td>
			 	<td><?php print $mostrar[2] ?></td>
			 	<td><?php print $mostrar[3] ?></td>
			 	<td><?php print $mostrar[4] ?></td>
			 	<td><?php print $mostrar[5] ?></td>
			 	<td><?php print $mostrar[6] ?></td>
			 	<td><?php print $mostrar[7] ?></td>
			 	<td><?php print $mostrar[8] ?></td>
			 	<td><?php print $mostrar[9] ?></td>
			 	<td><?php print $mostrar[10] ?></td>
			 	<td><?php print $mostrar[11] ?></td>
			 	<td><?php print $mostrar[12] ?></td>
			 	<td><?php print $mostrar[13] ?></td>
			 				
			 </tr>
			 </tbody>
			 <?php
			 } 
			  ?>

		</table>
		</div>

	

	  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>