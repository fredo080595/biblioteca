

create table libros(

	id_lib int auto_increment,
	n_serie varchar(50) not null,
	nom_libro varchar(50) not null,
	n_libros int  not null,
	editorial varchar(50) not null, 
	autor varchar(50) not null,
	biblioteca varchar(50) not null,
	inf_libro varchar(1000) not null,
	n_paginas int not null,
    direccion varchar(50) not null,
	telefono int ,
	pagina varchar(50) not null,
	e_mail varchar(50),
	mapas varchar(1000) not null,
	nombrelib varchar(100) not null,
	rutaimg varchar(200) not null,
	rutalib varchar(200), 

	primary key(id_lib)

	);