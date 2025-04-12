<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = "phpsql"; // nome do banco de dados

    try {
        $con = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conectado";
    } catch (PDOException $e) {
        echo "falha: " . $e->getMessage();
    }
?>
