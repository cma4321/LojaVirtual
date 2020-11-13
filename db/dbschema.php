<?php

$user = "

create table usuarios(
    idUser int(255) not null primary key auto_increment,
    nomeCompleto varchar(255) not null, 
    email varchar(255) not null, 
    cpf varchar(255) not null, 
    endereco varchar(255) not null, 
    usuario varchar(255) not null,
    pass varchar(255) not null

);


"; 

$produto = "

create table produtos(
    idProduto int(255) not null primary key auto_increment,
    nome varchar(255) not null, 
    precoantes varchar(255) not null, 
    precodepois varchar(255) not null 

);


"; 