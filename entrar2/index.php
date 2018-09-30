<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	
	<nav class=" red accent-4 " role="navigation">
      <div class="nav-wrapper container">
      	<a href="../index.php" class="breadcrumb"><i class="material-icons">assignment_ind</i></a>
        <a id="logo-container" class="brand-logo">Iniciar Sesion</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../index.php">Pagina Principal</a></li>
      </ul>
    </nav>


<div class="container">
 <div class="row center">
	<h1>Bienvenido Capturista</h1>
	<form action="controles/login.php" method="post" class="col s12 center">
		<label>Usuario</label>
		<input class="form-control" type="text" name="txtUser" title="Usuario">
		<label>Contraseña</label>
		<input class="form-control" type="password" name="txtPass" title="Contraseña">
		<button class="btn btn-success btn-lg">Entrar</button>

	</form>
</div>
</div>




 <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>