<?php
session_start();

if(isset($_SESSION['user'])) 
{
  
  ?>

<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Contenido</title>
	<!-- CSS  -->
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/flaticon.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	<?php include "controles/conexion.php" ?>


<?php
$id=$_GET['id_lib'];
$conexion=conexion();
$sql="SELECT n_serie,nom_libro,n_libros,editorial,autor,biblioteca,inf_libro,n_paginas,direccion,telefono,pagina,e_mail,mapas,rutaimg,rutalib FROM libros where id_lib='$id'";
$result=mysqli_query($conexion,$sql);

while ($mostrar=mysqli_fetch_row($result)) 
{
	


 ?>


             <nav class="light-blue darken-2 " role="navigation">
						<div class="nav-wrapper container">
						  
						  <a href="principal.php" class="breadcrumb">Inicio <i class="material-icons"></i></a>
						  <ul class="right hide-on-med-and-down">
						    
						    <li><i class="mdi-action-account-circle"></i></li>
						    <li><?php echo $_SESSION['user']; ?></li>
						    <li><a href="../controles/logout.php">Cerrar Sesion</a></li>
						  </ul>
						  

						  </div>
			    </nav>


    

<section id="top-bar">
<div class="spinner-layer spinner-green">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
	  <div class="gap-patch">
        <div class="circle"></div>
      </div>
	  <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

</section>
  <div class="container">
    <div class="section content">

      <!--   Icon Section   -->
      <div class="row">
		<div class="col s12 m12">
			<div class="col s12 m4 left-side">
				<img src="../imglib/<?php print $mostrar[13] ?>" alt="" class="circle user-img responsive-img">
			  <div class="block"> 
				<h5 class="center indigo-text"><?php print $mostrar[1] ?></h5>
				<p class="light center"><?php print $mostrar[4] ?></p>
			  </div>
			  <hr>
			  <div class="block">
				<h5 class="left-align"><i class="mdi-action-account-box"></i>
					Editorial
				</h5>
				<p><?php print $mostrar[3] ?></p>
				
			  </div>
			  <div class="block">
				<h5 class="left-align"><i class="mdi-action-perm-phone-msg"></i>
					Informacion
				</h5>
					<p><i class="mdi-maps-pin-drop indigo-text"></i> <?php print $mostrar[8] ?> <br/>
					<i class="mdi-communication-phone indigo-text"></i> <?php print $mostrar[9] ?><br/>
					<i class="mdi-communication-email indigo-text"></i> <a href="<?php print $mostrar[11] ?>" class="indigo-text" target="_blank"><?php print $mostrar[11] ?></a><br/>
					<i class="mdi-content-link indigo-text"></i> <a href="<?php print $mostrar[10] ?>" class="indigo-text" target="_blank"><?php print $mostrar[10] ?></a>
					</p>
			  </div>
			  
				
			
		</div>

			<div class="col s12 m8 right-side">
			
		  
		  <h4 class="left-align"><i class="mdi-social-school"></i>Informacion del Libro</h4>
		  
		  <div class="block">
            
			<h5>Prologo</h5>
			
            <p><?php print $mostrar[6] ?></p>
          </div>

          	<div class="block">
            
			<h5>Biblioteca donde se Encuntra</h5>
			<p class="helping-text"><i class="mdi-maps-place indigo-text"></i> Cantidad de Libros: <?php print $mostrar[2] ?></p>
            <p ><?php print $mostrar[5] ?></p>
          </div>

          <div class="block">
          	<h5>Libro virtual</h5>
          	<p><a href="libro/<?php print $mostrar[14] ?>">Ver libro</a></p>
          </div>

          <h4 class="left-align"><i class="mdi-maps-pin-drop "></i>  Ubicacion</h4>
          <div class="block">
            
			<p><?php print $mostrar[12] ?></p>
          </div>
		
		</div>
      </div>
    </div>
  

</div>
</div>


<?php } ?>

<!--  Scripts-->
  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/slider.js"></script>
  <script src="assets/js/hammer.min.js"></script>
  <script src="assets/js/cards.js"></script>
  <script src="assets/js/init.js"></script>

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