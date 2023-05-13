<?php 
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = false;
    if ($hostweb) {
        $id = "id20609830_"; 
        $senha = "Lukinhas891@";
    }
    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb1";

    $con = new mysqli($servidor, $usuario,  $senha, $banco);
   
    if ($con->connect_error) {
        die ("Erro: ".$con->connect_error);  
    }

    return $con->query($sql);
}
?>