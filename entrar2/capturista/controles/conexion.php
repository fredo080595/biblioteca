<?php
function conexion() 
{
	$server="localhost";
	$usuario="root";
	$password="";
	$bd="biblioteca";
	$conexion=mysqli_connect($server,$usuario,$password,$bd);

	return $conexion;
}


 ?>