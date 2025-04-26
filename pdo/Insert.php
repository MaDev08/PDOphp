<?php
    // Vincular o arquivo da conexão
    include('database.php');

    // Pegando os valores de GET
    $nome = $_GET["nome"];
    $email = $_GET["email"];


        // Preparando a consulta SQL para evitar injeção
        $sqlinsert = "INSERT INTO TB_USUARIO (NOME, EMAIL_US) 
        VALUES (\"$nome\", '$email'); ";

    
        // Executando a consulta
        // if ($con->exec($sqlinsert)) {
            // echo "Dados inseridos com sucesso!";
            // echo "<br>";
            // echo "id = " . $con->lastInsertId();
        // } else {
            // echo "Erro ao inserir os dados.";
        // }
        
        
        // if ($con->query($sqlinsert)) {
            // echo "Dados inseridos com sucesso!";
            // echo "<br>";
            // echo "id = " . $con->lastInsertId();
        // } else {
            // echo "Erro ao inserir os dados.";
        // }

        $sqlinsert = "INSERT INTO TB_USUARIO (NOME, EMAIL_US) 
        VALUES (?,?); ";

        $stmt = $con->prepare($sqlinsert);
        $bool = $stmt->execute([$nome, $email]);

        if($bool){
            echo "Inserido";
        }
        else{
            echo "Erro";
        }
        
?>
