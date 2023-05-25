<?php
include('conectar.php');
$msg = "";
$tpMsg = "";
if (isset($_POST['senha'])){
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM admin WHERE senha = '$senha';";
    if($_POST['senha'] != $_POST['senha']){
        $senha = $_POST['senha'];
        conectar($sql);
        $tpMsg = "danger";
        $msg = "Senha atual incorreta!";     
    }
} 
if (isset($_POST['senha'])){
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM admin WHERE senha = '$senha';";
    $result = conectar($sql);  
    if($linha = $result->fetch_assoc()){
        $tpMsg = "danger";
        $msg = "Senha precisa ser diferente da atual!";
    }  
}
if($_POST['senha'] == $_POST['confirmar']){
    $senha = $_POST['senha'];
    $sql = "UPDATE admin SET senha = '$senha' WHERE id;";
    conectar($sql);
    $tpMsg = "success";
    $msg = "Senha atualizada com sucesso!";
}else{
    $tpMsg = "warning";
    $msg = "Senhas divergentes!";
}

?>

