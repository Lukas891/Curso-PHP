<?php 
session_start(); // dando start na sessao(tem exemplo na pasta do curso sobre session)
    $acesso = "";
    if (isset($_POST["email"])) { // metodo POST para validar a segurança do email
        include('conectar.php');
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $retorno = conectar("select * from admin where email = '$email' and senha = '$senha';");
        if ($linha = $retorno->fetch_assoc()){
            $_SESSION['acesso-restrito'] = true;
            echo "<script>window.location.replace('admin.php');</script>";
        }else{
            $acesso = "Acesso negado.";
        }
    }
?>