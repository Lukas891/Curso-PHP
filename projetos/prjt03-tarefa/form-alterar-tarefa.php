<?php 
$id = $_GET['id'];
$nome = $_GET['nome'];
?>
<form action="editar.php" method="GET">
    <input type="hidden" name="alterar" value="<?= $id ?>">
    <label for="alterar-tarefa" class="form-label">Atualize a tarefa:</label>
    <input type="text" value="<?= $nome ?>" class="form-control" name="alterar-tarefa" placeholder="Nome da tarefa" required><br>
    <button type="submit" id="" class="btn btn-success">Alterar</button>
    <a href='admin.php' class='btn btn-danger'>Cancelar</a>
</form>
    