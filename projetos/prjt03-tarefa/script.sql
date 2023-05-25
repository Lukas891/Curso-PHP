CREATE TABLE admin(
    id int primary key auto_increment,
    email varchar(100) unique,
    senha varchar(100)
);
drop table tarefa;
CREATE TABLE tarefa(
    id int primary key auto_increment,
    nome varchar(200),
    id_admin int
);


usarios
1,luiz 
2,felipe
3,maia

taferas
2,lavar o carro
