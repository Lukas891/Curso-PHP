CREATE TABLE usuario(
    id int primary key auto_increment,
    email varchar(100),
    senha varchar(100)
);

CREATE TABLE tarefa(
    id int primary key auto_increment,
    nome varchar(200);
);