<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pessoas</title>
</head>
<body>
<?php
include 'conectar.php';
$id = $nome = $email = $cpf = $sexo = "";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (array_key_exists('id',$_GET)){
        $id = $_GET['id'];
        $pessoas = buscar($id);
        $nome = $pessoas['nome'];
        $email = $pessoas['email'];
        $cpf = $pessoas['cpf'];
        $sexo = $pessoas['sexo'];
        
    }
    if (array_key_exists('apagar',$_GET)){
        $apagar = $_GET['apagar'];
        $msg = apagar($apagar);
        echo $msg;
    }
}
?>
<form action="form-pessoas.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id; ?>">
    <h1>Formulário de Pessoas</h1>
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $nome; ?>"required><br>
    E-mail: <br>
    <input type="text" name="email" value="<?php echo $email; ?>"required><br>
    CPF: <br>
    <input type="text" name="cpf" value="<?php echo $cpf; ?>"required><br>
    Sexo: <br>
    <input type="radio" name="sexo" value="m" <?php if($sexo == "m") echo "checked"; ?>>Masculino
    <input type="radio" name="sexo" value="f" <?php if($sexo == "f") echo "checked"; ?>>Feminino
    <br>
    <br>
    <input type="submit" value="Gravar">
    <a href="form-pessoas.php">
    <input type="button" value="Novo">
    </a>
    <input type="button" value="Apagar">
</form>
<?php
//  onclick="window.location.replace('form-pessoas.php');"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    
    $id = $_POST['id'];
    if($id == ''){
        $msg = incluir($nome, $email, $cpf, $sexo);
    } else {
        $msg = alterar($id, $nome, $email, $cpf, $sexo);
    }
    
    echo $msg;
}

?>
<br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Sexo</th>
        
    </tr>
    <?php
    $dados = listar();
    while ($linha = $dados->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$linha['id']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['email']."</td>";
        echo "<td>".$linha['cpf']."</td>";
        echo "<td>".$linha['sexo']."</td>";
        echo "<td><a href='form-pessoas.php?id=".$linha['id']."'>Editar</a></td>";
        echo "<td><a href='form-pessoas.php?apagar=".$linha['id']."'>Apagar</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>