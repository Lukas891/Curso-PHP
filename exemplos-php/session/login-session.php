<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
</head>
<body>
    <form action="login-session.php" method="POST">
        <h1>Faca o login</h1>
        Login:
        <input type="text" name="login"><br>    
        Senha:
        <input type="password" name="senha"><br>
        <input type="submit" value="Acessar">
    </form>
    <?php
        if(isset($_POST['login']) && isset($_POST['senha'])){
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            if($login == 'Lucas' && $senha == '0000'){
                echo "Acesso Permitido!";
                $_SESSION['login'] = $login;
                echo "<br><a href='pagina-restrita.php'>Pagina Restrita</a>";
            }else{
                echo "Acesso Negado!";
            }
        }

    ?>
</body>
</html>