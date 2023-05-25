<?php
$msg = "";
$tpMsg = "";
include('validar-login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        h2 {
            text-align: center;
        }
    </style>
    <br>
    
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Faça o Login</h2>
                <?php if ($msg != "") { ?>
                    <div class="alert alert-<?php echo $tpMsg; ?>">
                        <strong><?php echo $msg; ?></strong>
                    </div>
                <?php } ?>
                <form action="index.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" name="email" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="form-criar-conta.php" class="btn btn-success">Criar conta</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>