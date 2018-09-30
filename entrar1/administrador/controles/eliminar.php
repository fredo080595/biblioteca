<?php

include "conexion.php";
$id=$_GET['id_lib'];

$sql="DELETE FROM libros where id_lib=?";

$conexion=conexion();
$query=$conexion->prepare($sql);
$query->bind_param('i', $id);
$query->execute();
$query->close();

header("location:../mostrar.php");

 ?>