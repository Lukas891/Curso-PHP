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
    $_SESSION['nome'] = "Lucas Machado";
    $_SESSION['perfil'] = "Admin";
    echo "Variaveis na session.";
    ?>
    
</body>
</html>

