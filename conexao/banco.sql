create database if not exists db_comentario;

create table if not exists tb_comentarios(
codigo int(30) auto_increment primary key not null,
nome varchar(50) not null,
comentario varchar(255) not null
)default character set utf8 default collate utf8_general_ci;
