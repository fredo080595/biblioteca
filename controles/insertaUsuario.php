<?php
include "conexion.php";
$conexion=conexion();

$user=$_POST['txtUser'];
$pass=$_POST['txtPass'];

$sql="insert into usuarios (usuario,contra) values (?,?)";

$query=$conexion->prepare($sql);
$query->bind_param('ss', $user,$pass);
$si=$query->execute();
$query->close();


if ($si) {

?>

<script type="text/javascript">
	alert("Usuario agregado con exito :)");
	window.location="../index.php"
	</script>

<?php
}
else{  
?>
	 <script type="text/javascript">alert("Error al crear!!!");
	 window.location="../registro.php";
	 </script>

	 <?php } ?>