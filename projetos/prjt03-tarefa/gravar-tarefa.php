<?php 
    include "conectar.php";
    $tarefa = $_GET['nome-tarefa'];

    $sql = "insert into tarefa(nome,id_admin) values('$tarefa',$id_admin);";
    conectar($sql);
    $sql = "select id from tarefa where nome = '$tarefa';";
    $retorno = conectar($sql);
    $l = $retorno->fetch_assoc();
    $id = $l['id'];
?>