create database biblioteca;

	use biblioteca;

	create table usuarios(

		id_usuario int auto_increment,
		usuario varchar(50) not null,
		contra varchar(50) not null,

		primary key(id_usuario)


		);
        
create table libros(

	id_lib int auto_increment,
	n_serie varchar(50) not null,
	nom_libro varchar(50) null,
	n_libros int  null,
	editorial varchar(50)  null, 
	autor varchar(50)  null,
	biblioteca varchar(50)  null,
	inf_libro varchar(1000)  null,
	n_paginas int not null,
    direccion varchar(50)  null,
	telefono int ,
	pagina varchar(50)  null,
	e_mail varchar(50),
	mapas varchar(1000) null,
	nombrelib varchar(100) not null,
	rutaimg varchar(200) not null,
	rutalib varchar(200), 

	primary key(id_lib)

);
    
create table biblioteca(
	id_biblioteca int auto_increment,
	nombre varchar(50) not null,
	direccion varchar(50) null,
	telefono int  null,
	pagina varchar(50) null,
	e_mail varchar(50)  null,

	primary key(id_biblioteca)


);
create table administrador(

	id_admin int auto_increment,
	contra varchar(50),
    usuario varchar(50) not null,
	telefono int  null,
	e_mail varchar(50)  null,
	direccion varchar(50)  null,
primary key(id_admin)

);
    