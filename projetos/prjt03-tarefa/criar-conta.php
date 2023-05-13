<?php
include('validar-login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crie sua Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        h2 {
            text-align: center;
        }

        h5 {
            text-align: center;
            color: red;
        }
    </style>
    <?php
    include "conectar.php";
    if (isset($_POST['nome'])) {

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        echo "request post $nome , $github, $webhost";
        incluir($nome, $senha, $webhost);
    }
    ?>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Crie sua conta
                    <h5><?php echo $acesso; ?></h5>
                </h2>
                <form action="login.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" name="email">
                    </div>
                    <div class="mb-3 mt-3">
                    <?php if (!isset($_GET['id'])) { ?>
                            <label for="password" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Confirme a senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Confirme a senha" name="senha">
                    </div>
                    <?php } ?>
                <button type="submit" class="btn btn-primary">Criar Conta</button>
                <a href="login.php" class="btn btn-danger">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>