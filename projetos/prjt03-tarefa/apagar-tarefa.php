<?php 
if (isset($_GET['id']))
{
    include('conectar.php'); 
        $id = $_GET['id'];
        apagar($id);
    }
    echo "<script>window.location.replace('admin.php');</script>";
?>