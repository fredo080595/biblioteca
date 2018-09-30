

create table capturista(
	id_capturista int auto_increment,
	contra varchar(50),
    usuario varchar(50) not null,
	telefono int not null,
	e_mail varchar(50) not null,
	direccion varchar(50) not null,

	primary key(id_capturista)


	);
