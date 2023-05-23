<?php 
if (!empty($_GET['id']))
{
    include_once('conectar.php'); 
    
        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM tarefa WHERE id=$id";
        
        $resultado = $con->query($sqlSelect);
        
        if ($resultado->num_rows > 0) 
        {
                $sqlDelete = "DELETE FROM tarefa WHERE id=$id";
                $resultDelete = $con->query($sqlSelect);
        }
    }
    header('Location: admin.php');
?>