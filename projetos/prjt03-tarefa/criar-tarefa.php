<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Criar nova tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        h2 {
            text-align: center;
        }
    </style>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2>
                <a href="admin.php" class="btn btn-danger">Voltar</a><br>
                Criar nova tarefa</h2><br>
                <?php
                if (isset($_GET['qt-opcoes'])) {
                    include "form-nova-tarefa.php";
                } elseif (isset($_GET['nome-tarefa'])) {
                    include "gravar-tarefa.php";
                } else {
                    include "form-nova-tarefa.php";
                } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>