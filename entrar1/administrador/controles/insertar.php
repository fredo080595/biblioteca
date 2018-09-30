<?php
include "conexion.php";
$conexion=conexion();

$n_serie=$_POST['txtNS'];
$nom_lib=$_POST['txtNomlibro'];
$n_lib=$_POST['txtNlibro'];
$Editorial=$_POST['txtEditorial'];
$Autor=$_POST['txtAutor'];
$nom_biblio=$_POST['txtBiblio'];
$Inf_bib=$_POST['txtInfol'];
$n_pag=$_POST['txtNump'];
$Direccion=$_POST['txtDirec'];
$Telefono=$_POST['txtTel'];
$D_web=$_POST['txtDweb'];
$email=$_POST['txtEmail'];
$mapa=$_POST['txtMaps'];
$imglib=$_FILES['fotolib']['name'];
$libro = $_FILES['libroDato']['name'];
$rutaLibro = "../../../biblioteca/libro/";
$rutaSubida="../../../imglib/";
$guardado=$_FILES['fotolib']['tmp_name'];
$guardadoLib = $_FILES['libroDato']['tmp_name'];

move_uploaded_file($guardado, $rutaSubida.$imglib);


	move_uploaded_file($guardadoLib, $rutaLibro.$libro);
	$final=$imglib;
	$conexion=conexion();


$sql="INSERT INTO libros(n_serie,nom_libro,n_libros,editorial,autor,biblioteca,inf_libro,n_paginas,direccion,telefono,pagina,e_mail,mapas,nombrelib,rutaimg,rutalib)
values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$query=$conexion->prepare($sql);
$query->bind_param('ssssssssssssssss', $n_serie,$nom_lib,$n_lib,$Editorial,$Autor,$nom_biblio,$Inf_bib,$n_pag,$Direccion,$Telefono,$D_web,$email,$mapa,$imglib,$final,$libro); 
$query->execute();
$query->close();

			
				

			header("location:../mostrar.php");

			



 ?>