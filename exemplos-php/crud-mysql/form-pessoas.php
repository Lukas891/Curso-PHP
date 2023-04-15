<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pessoas</title>
</head>
<body>
<?php
include 'conectar.php';
include 'validar-cpf.php';
$msgCpf = $id = $nome = $email = $sexo = $escolaridade = "";
$cpf = "26400633081";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (array_key_exists('id',$_GET)){
        $id = $_GET['id'];
        $pessoas = buscar($id);
        $nome = $pessoas['nome'];
        $email = $pessoas['email'];
        $cpf = $pessoas['cpf'];
        $sexo = $pessoas['sexo'];
        $escolaridade = $pessoas['escolaridade'];
        
    }
    if (array_key_exists('apagar',$_GET)){
        $apagar = $_GET['apagar'];
        $msg = apagar($apagar);
        echo $msg;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msg = "";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $escolaridade = $_POST['escolaridade'];
    $id = $_POST['id'];

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);

    if(validarCpf($cpf)){
        if($id == ''){
            $senha = $_POST['senha'];
            $confirmar = $_POST['confirmar'];
            if($senha == $confirmar){
                $msg = incluir($nome, $email, $cpf, $sexo, $escolaridade, $senha);
            }else{
                $msg = "Senhas divergentes!";
            }
            
        } else {
            $msg = alterar($id, $nome, $email, $cpf, $sexo, $escolaridade);
        }
    }else{
        $msgCpf = "CPF inválido!";
    }
    
    echo $msg;
}
?>
<form action="form-pessoas.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id; ?>">
    <h1>Formulário de Pessoas</h1>
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $nome; ?>"required><br>
    E-mail: <br>
    <input type="text" name="email" value="<?php echo $email; ?>"required><br>
    CPF:<?php echo $msgCpf; ?> <br>
    <input type="text" name="cpf" value="<?php echo $cpf; ?>"required><br>
    <br>
    Sexo: <br>
    <input type="radio" name="sexo" value="m" required <?php if($sexo == "m") echo "checked"; ?>>Masculino
    <input type="radio" name="sexo" value="f" required <?php if($sexo == "f") echo "checked"; ?>>Feminino
    <br>
    <br>
    Escolaridade <br>
    <select name="escolaridade">
        <option value="">Selecione</option>
        <option <?php if($escolaridade == "Ensino Médio") { echo "selected"; }?> value="Ensino Médio">Ensino Médio</option>
        <option <?php if($escolaridade == "Superior Incompleto") { echo "selected"; }?> value="Superior Incompleto">Superior Incompleto</option>
        <option <?php if($escolaridade == "Superior Completo") { echo "selected"; }?> value="Superior Completo">Superior Completo</option>
    </select>
    <br>
    <?php if (!isset($_GET['id'])) { ?>
        <br>
        Senha: <br>
        <input type="password" name="senha" required>
        <br>
        Confirmar Senha: <br>
        <input type="password" name="confirmar">
      <?php } ?>
      <br>
    <br>
    <input type="submit" value="Gravar">
    <a href="form-pessoas.php">
    <input type="button" value="Novo">
    </a>
</form>
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
    <script>
        function apagar(id){
            return confirm("Deseja Apagar o registro ID("+id+")?");
        }
    </script>
</table>
</body>
</html>