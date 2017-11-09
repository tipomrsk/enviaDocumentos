drop database documento;

create database documento;

use documento;

create table documentos(
    id int not null auto_increment,
    nome varchar(100) not null,
    arquivo varchar(100) not null,
    primary key(id)
) ENGINE=InnoDB;
