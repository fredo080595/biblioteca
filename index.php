<!-- Este es el cuerpo donde el usuario iniciara sesion -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Login</title>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav>
    <div class="nav-wrapper red darken-4">
      <a class="brand-logo center"><span class="white-text">Iniciar Sesión</span></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>
<div>
	
	<div class="row">
		
		<div class="col s12 center">
				<h1>Bienvenido Alumno</h1>


		<form action="controles/login.php" method="post">

			<div class="row ">
			
			<div class="input-field col s4"></div>
			         <div class="input-field col s4">
			           <label><span class="black-text">Usuario</span></label>
			           <input class="form-control" type="text" name="txtUser" title="Usuario" required>
		              </div>
		    <div class="input-field col s8"></div>
		    </div>

		    <div class="row ">

		    <div class="input-field col s4"></div>
		             <div class="input-field col s4">
			             <label><span class="black-text">Contraseña</span></label>
			             <input class="form-control" type="password" name="txtPass" title="Contraseña" required>
		              </div>
		      <div class="input-field col s2"></div>
             

			</div>
			<button class="btn btn-success btn-lg">Entrar</button>	
	      
	        

	    </form>

		</div>
		<div class="col s4"></div>

	</div>

	
</div>

<div class="container">
	<div class="row col s6 center">

<div class="alert alert-info">
			<a href="registro.php" class="close" data-dismiss="alert" aria-label="close">REGISTRARSE</a>
			<strong>
				Para ser miembro
			</strong>
		</div>
	</div>
</div>
<div>
	<br>
<?php include "informacion.php" ?>
</div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>