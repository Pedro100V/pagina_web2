<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    echo "<h1>Dados Cadastrados com Sucesso!</h1>";
    echo "<strong>Nome:</strong> " . $nome . "<br>";
    echo "<strong>Telefone:</strong> " . $telefone . "<br>";
    echo "<strong>Email:</strong> " . $email . "<br>";
    
    echo "<br><a href='index.php'>Voltar para o formulário</a>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
