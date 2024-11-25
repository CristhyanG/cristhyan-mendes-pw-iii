http://localhost/phpmyadmin

create database projeto01;

use projeto01;

create table contato(
    idContato int PRIMARY KEY AUTO_INCREMENT,
    contatoNome varchar(50),
    contatoEmail varchar(50),
    contatoNumero varchar(14),
    contatoFile varchar(100),
    contatoAssunto varchar(500)
);

create table login(
   idLogin int PRIMARY key AUTO_INCREMENT,
   loginNome varchar(500),
   loginEmail varchar(40)unique,
   loginSenha varchar(500),
   loginCelular varchar(14),
   loginGenero varchar(50)
);

