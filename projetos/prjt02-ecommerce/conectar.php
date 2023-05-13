<?php 
function conectar($sql) {
    $id = "";
    $senha = "";

    $hostweb = false; // false para usar no localhost, e true para usar no webhost
    if ($hostweb){
        $id = "id20609830_"; // id ou prefixo do 000webhost
        $senha = "Lukinhas891@"; // senha do 000webhost
    }
    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";

    // $con = new mysqli($servidor, $usuario, $senha, $banco);
    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if ($con->connect_error) {
        die("Erro :".$con->connect_error);
    }
    return $con->query($sql);
}
?>