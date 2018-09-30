<?php
include "conexion.php";

$conexion=conexion();

$id=$_POST['id_lib'];
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
$rutaSubida="../imglib/";
$guardado=$_FILES['fotolib']['tmp_name'];

$sql="UPDATE libros
       set   n_serie=?,nom_libro=?,n_libros=?,editorial=?,autor=?,biblioteca=?,inf_libro=?,n_paginas=?,direccion=?,telefono=?,pagina=?,e_mail=?,mapas=?,nombrelib=?,rutaimg=?
       where   id_lib='$id'";

       
$query=$conexion->prepare($sql);
$query->bind_param('sssssssssssss', $n_serie,$nom_lib,$n_lib,$Editorial,$Autor,$nom_biblio,$Inf_bib,$n_pag,$Direccion,$Telefono,$D_web,$email,$mapa);
$query->execute();
$query->close();

header("location:../mostrar.php");


 ?>