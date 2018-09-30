<?php
session_start();
include "conexion.php";
$conexion=conexion();

$user=$_POST['txtUser'];
$pass=$_POST['txtPass'];

$sql="select usuario, contra from usuarios
      where usuario='$user' and contra='$pass'";

$result=mysqli_query($conexion,$sql);

if(mysqli_fetch_row($result) > 0) 
{

    $_SESSION['user']=$user;

	echo "<script type='text/javascript'>
	        alert('Bienvenido al sistema');
	        window.location='../biblioteca/index.php';
	        </script>";

	    }
	    else
	    {
	    	echo "<script type='text/javascript'>
	        alert('Error al entrar!!!');
	        window.location='../index.php';
	        </script>";
	    }

 ?>