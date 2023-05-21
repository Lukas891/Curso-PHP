<?php 
$msg = "";
$tpMsg = "danger";
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "select * from admin where email = '$email' and senha = '$senha';";
    $result = conectar($sql);
    if ($linha = $result->fetch_assoc()){
        
    }else{
        $msg = "Email ou senha incorretos!";
    } 
} 
?>