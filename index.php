<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira página HTML</title>
</head>
<body>
    <center>
        <h2>Formulário de cadastro</h2>
    </center>

    <form id="formulario" action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">

        <br><br>
        <button type="submit">Cadastrar</button>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $databaseUrl = getenv("DATABASE_URL");
    $conexao = pg_connect($databaseUrl);

    pg_query_params(
        $conexao,
        "INSERT INTO usuarios (nome, telefone, email) VALUES ($1, $2, $3)",
        array($nome, $telefone, $email)
    );

  echo("cadastro realizado");
}
?>

</body>
</html>
