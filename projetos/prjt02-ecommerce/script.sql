CREATE TABLE admin(
    id int primary key auto_increment,
    email varchar(100) unique,
    senha varchar(100)
);
CREATE TABLE produtos(
    id int primary key auto_increment,
    nome varchar(200),
    valor float,
    imagem varchar(200)
);

INSERT INTO admin(email,senha) VALUES("luiz@gmail.com","0123");