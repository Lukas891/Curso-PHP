<?php   
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = false;
    if($hostweb){
        $id = "id20609830_"; 
        $senha = "7-APc0baf*^T(F(h";
    }
    
    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";
    
    $con = new mysqli($servidor, $usuario, $senha, $banco);

    //$con = new mysqli($servidor, 'id20609830_root', '7-APc0baf*^T(F(h', 'id20609830_mydb');

    if($con->connect_error){
        die("Erro:".$con->connect_error);
    }
    return $con->query($sql);
}
?>