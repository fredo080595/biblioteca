
create table biblioteca(
	id_biblioteca int auto_incrment,
	nombre varchar(50) not null,
	direccion varchar(50) not null,
	telefono int not null,
	pagina varchar(50) not null,
	e_mail varchar(50) not null,

	primary key(id_biblioteca)


);