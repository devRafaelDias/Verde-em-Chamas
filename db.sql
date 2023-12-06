-- create database verde;
-- use verde;
create table user(
    id integer primary key auto_increment,
    nome varchar(128),
    email varchar(257),
    senha varchar(255)
);

create table forum(
    id integer primary key auto_increment,
    titulo varchar(128),
    conteudo varchar(2048),
    att integer,
    foreign key (att) references user(id)

);

create table res(
    id integer primary key auto_increment,
    conteudo varchar(2048),
    post integer,
    foreign key (post) references forum(id)
);