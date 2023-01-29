create database LP_database;
use LP_database;

create table form (
id int auto_increment,
nome varchar(15) not null,
email varchar(60) not null,
primary key (id));
