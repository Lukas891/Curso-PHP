<?php 
function conectar($sql){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "mydb";
    $id = "";

    if (false){
        $id = "id20609830_"; 
        $senha = "Lukinhas891@";
    }
    
    $senha = $id.$senha;
    $banco = $id.$banco;

    $con = new mysqli($servidor, $usuario, $senha, $banco);
        
    if($con->connect_error) {
        die ("Erro: ".$con->connect_error);  
    }
    return $con->query($sql);

}

function alterar($id, $nome){
    $con = conectar();
    $sql = "update tarefa set 
            nome = '$nome'
            where id = $id";
    if($con->query($sql) === true){
        return "Ok ao Atualizar";
    }else{
        return "Erro: $sql".$con->error;
    }
}

function apagar($id){
    $con = conectar();
    $sql = "delete from tarefa where id = $id";
    if($con->query($sql) === true){
        return "Ok ao Apagar";
    }else{
        return "Erro: $sql".$con->error;
    }
}

?>