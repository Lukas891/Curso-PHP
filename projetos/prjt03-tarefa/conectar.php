<?php 
function conectar($sql) {
    $id = "";
    $senha = "";

    $hostweb = false; 
    if ($hostweb){
        $id = "id20609830_"; 
        $senha = "Lukinhas891@"; 
    }
    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if ($con->connect_error) {
        die("Erro :".$con->connect_error);
    }
    return $con->query($sql);
}
function listar(){
    $con = conectar();
    $sql = "select id, ucase(nome) as nome, email, cpf, ucase(sexo) as sexo from pessoa";
    $resultado = $con->query($sql);
    return $resultado;
}

function alterar($id, $nome){
    
    $sql = "update tarefa set 
            nome = '$nome'
            where id = $id";
        conectar($sql);
        return "Ok ao Atualizar";
}

function apagar($id){
    $sql = "delete from tarefa where id = $id";
    conectar($sql);
    return "Ok ao Apagar";
}
?>