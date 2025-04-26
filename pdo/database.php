<?php

    $server = "localhost"; // Corrected spelling
    $user = "root";
    $password = "";
    $db = "pdophp"; // Missing semicolon

    try {
        // Conexão
        $con = new PDO("mysql:host=$server;dbname=$db", $user, $password); 
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Conectado!!!"; 

    } catch (PDOException $error) {
        echo "Erro: " . $error->getMessage().PHP_EOL(); 
    }

?>
