<?php 
session_start();
$id_admin = 0;

if (!$_SESSION['acesso-restrito']){
    echo "<script>window.location.replace('index.php');</script>";
}else{
    $id_admin = $_SESSION['id_admin'];
}
?>