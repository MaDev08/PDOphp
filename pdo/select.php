<?php 
    include("database.php");

    $sql = "select * from tb_usuario";

    $stmt = $con->prepare($sql);
    $resultado = $stmt->execute();
    $resultado->fetchAll();
?>