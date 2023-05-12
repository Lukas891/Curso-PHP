<?php
include('validar-login.php');
include('conectar.php');
include('gravar-produto.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        h2{
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Cadastrar Produto</h5>
                </h2>
                <form action="admin.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="mb-3 mt-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" placeholder="Nome do Produto" id="nome" name="nome" value="<?php echo $nome ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="valor" class="form-label">Valor:</label>
                        <input type="number" class="form-control" placeholder="Valor do Produto" id="valor" name="valor" step="any" value="<?php echo $valor ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="fileToUpload" class="form-label">Imagem:</label>
                        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
                        <input type="<?php echo $mostrarFileAtual?>" class="form-control"
                        id="fileAtual" name="fileAtual" value="<?php echo $imagem ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
                    <a href="admin.php" class="btn btn-success">Novo</a>
                    <a href="login.php" class="btn btn-danger">Sair</a><br>
                    
                </form>
                <?php 
                if ($msg != ""){
                ?>
                    <br>
                    <div class="alert alert-<?php echo $tpMsg; ?> alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong><?php echo $msg; ?></strong>
                    </div>
            </div>
        <?php } ?>
        </div>

        <?php 
        include('listar-produto.php');
        ?>
        <a href="index.php" class="btn btn-warning">Ir para a loja</a><br>  

</body>

</html>