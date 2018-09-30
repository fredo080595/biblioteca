create database biblioteca

	use biblioteca

	create table usuarios(

		id_usuario int auto_increment,
		usuario varchar(50) not null,
		contra varchar(50) not null,

		primary key(id_usuario)


		);