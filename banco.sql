create database biblioteca;
use biblioteca;
create table livros(
	id int auto_increment not null primary key,
    Dat varchar(100) not null,
    livros varchar(100) not null,
    autor varchar(100) not null
);