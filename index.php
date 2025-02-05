<?php

require './Entity/Cliente.php';

if (isset($_POST['cadastrar_cliente'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $cliente = new Cliente($nome, $cpf, $email);
    $result = $cliente->cadastrar();

    if ($result) {
        echo '<script>alert("Cliente cadastrado com sucesso!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar cliente!");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Floricultura</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="banner">
        <h1>Bem vindo ao Sistema Floricultura</h1>
        <p>As flores mais lindas e perfeitas para todas as ocasiões!</p>
    <div class="banner-buttons">
        <a href="#">Fazer Cadastro</a>
        <a href="#">Ver Produtos</a>
    </div>

    <div class="bolota"></div> <!-- Apenas a bolota mantida -->
    </div>
    </div>
        
    <div>
    <h2>Cadastro de Clientes</h2>
    <form method="POST">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome ">
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf ">
        <input type="text" name="email" id="email" placeholder="Digite seu email ">
        <input type="submit" name="cadastrar_cliente" value="Cadastrar">
    </form>

    </div>
</body>
</html>










