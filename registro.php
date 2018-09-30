
<!-- -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Registro</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav class="  red darken-4 center" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" class="brand-logo">Registrarse</a>
  </nav>

  <div class="container">
  	<div class="row">
      <div class="col s6  center">
  		<h1>Registrarme</h1>
		<form action="controles/insertaUsuario.php" method="post">
			<label></label>
			<label>Usuario</label>
			<input class="form-control" type="text" name="txtUser" title="Usuario">
			<label>Contraseña</label>
			<input class="form-control" type="password" name="txtPass" title="Contraseña">
      <label></label>
      <input>
      <label></label>
      <input>
			<br><br>
			<button class="btn btn-primary btn-lg">Entrar</button> 
       </div>
  	</div>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


</body>
</html>