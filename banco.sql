create database db_banco;
use db_banco;

create table tb_filme(
id int primary key auto_increment,
titulo varchar(100)not null,
sinopse varchar(150)not null, 
capa varchar(100)not null,
valor decimal(10, 2) not null,
qtde int (10)not null
);