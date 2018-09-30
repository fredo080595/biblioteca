<?php
function conexion()
{
	$conexion=mysqli_connect("localhost","root","","biblioteca");
	return $conexion;
} 
 ?>