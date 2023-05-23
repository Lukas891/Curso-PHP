<?php 
include "conectar.php";
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
?>