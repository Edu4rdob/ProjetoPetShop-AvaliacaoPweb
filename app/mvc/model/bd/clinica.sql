create database clinica;
use clinica;

create table cliente(
nome varchar(100), usuario varchar(50), email varchar(50), cpf varchar(11), telefone varchar(11), endereco varchar(200), senha varchar(50),
constraint usuarioCPK primary key(usuario),
constraint userC unique (usuario),
constraint emailC unique (email),
constraint cpfC unique (cpf)
);

create table veterinario(
nome varchar(100), usuario varchar(50), email varchar(50), cpf varchar(11), telefone varchar(11), id int , codigo int, endereco varchar(200),senha varchar(50), 
constraint usuarioVPK primary key(usuario),
constraint userV unique (usuario),
constraint emailV unique (email),
constraint cpfV unique (cpf),
constraint idU unique (id)
);

create table pet(
nome varchar(100), especie varchar(50), raca varchar(50), idade int, dono varchar(100), cpf varchar(11),
constraint animalPK primary key(nome, cpf),
constraint cpfFK foreign key(cpf) references cliente(cpf)

);

