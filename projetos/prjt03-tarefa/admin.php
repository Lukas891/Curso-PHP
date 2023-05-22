<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
                <br>
                <a href="destroy.php" class="btn btn-danger">Sair</a>
                <a href="alterar-senha.php" class="btn btn-primary">Alterar senha</a>
                <h2>Lista de tarefas</h2><br>
                <table class="table table-striped">
                    <tr>
                        <th>Tarefa</th>
                        <th class="col-sm-1">Editar</th>
                        <th class="col-sm-1">Excluir</th>
                    </tr>
                    <?php
                    include "conectar.php";
                    $retorno = conectar("select * from tarefa;");
                    while ($linha = $retorno->fetch_assoc()) {
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        echo "<tr>
                <td>$nome</td>
                <td class='text-center'><a href='editar-tarefa.php?id-tarefa=$nome'class='btn btn-outline-primary btn-sm'>✏</a></td>
                <td class='text-center'><a href='apagar-tarefa.php?id-tarefa=$id'class='btn btn-outline-danger btn-sm'>🗑</a></td>
                </tr>";
                    }
                    ?>
                </table>
                <a href="criar-tarefa.php" class="btn btn-outline-success btn-sm">➕</a>
            </div>
        </div>
    </div>
</body>

</html>