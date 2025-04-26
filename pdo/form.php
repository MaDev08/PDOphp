<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Entre em contato</h2>
    <form action="processa_form.php" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
