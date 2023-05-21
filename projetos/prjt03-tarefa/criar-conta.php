<?php
include('conectar.php');
$msg = "";
$tpMsg = "";
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $sql = "select * from admin where email = '$email';";
    $result = conectar($sql);
    if($linha = $result->fetch_assoc()){
        $tpMsg = "danger";
        $msg = "Email já existe!";
    }else{
        if($_POST['senha'] == $_POST['confirmar']){
            $senha = $_POST['senha'];
            $sql = "insert into admin(email, senha) values('$email','$senha')";
            conectar($sql);
            $tpMsg = "success";
            $msg = "Usuário registrado com sucesso!";
        }else{
            $tpMsg = "warning";
            $msg = "Senhas divergentes!";
        }
    }   
}
?>
