<?php include('validar-acesso.php'); ?>
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
    </style>
    <?php
    include('alterar-senha.php');
    ?>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Alterar senha</h2>
                <?php if ($msg != "") { ?>
                    <div class="alert alert-<?php echo $tpMsg; ?>">
                        <strong><?php echo $msg; ?></strong>
                    </div>
                <?php } ?>
                <form action="form-alterar-senha.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="senha" class="form-label">Senha atual:</label>
                        <input type="password" value="<?php $senha ?>" class="form-control" id="senha" placeholder="Senha atual" name="" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Nova senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Nova senha" name="senha" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="confirmar" class="form-label">Confirme a senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Confirme a nova senha" name="confirmar" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar senha</button>
                    <a href="admin.php" class="btn btn-danger">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>