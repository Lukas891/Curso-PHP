<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION['login'])){
            $login = $_SESSION['login'];
                echo "Bem-Vindo $login";
        }else{
                echo "Acesso Negado.";
                echo "<br><a href='login-session.php'>Login</a>";
        }
    ?>
    
</body>
</html>