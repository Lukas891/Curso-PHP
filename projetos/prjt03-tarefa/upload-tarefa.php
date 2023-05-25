<?php 
$id = $_GET['alterar'];
$nome = $_GET['alterar-tarefa'];
include('conectar.php');
alterar($id,$nome);
?>