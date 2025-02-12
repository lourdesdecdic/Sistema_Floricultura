<?php

require './Entity/Produto.php';

// Cadastro de Produtos
if (isset($_POST['cadastrar_produto'])) {
    var_dump($_POST);
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $produto_id = new Produto($produto, $descricao, $preco, $estoque);
    $result = $produto_id->cadastrar();

    if ($result) {
        echo '<script>alert("Produto cadastrado com sucesso!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar produto!");</script>';
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

<!-- Botão "Cadastrar" -->
<div class="dropdown">
    <button class="dropbtn">
        Cadastrar <span class="arrow">&#x25BC;</span>
    </button>
<div class="dropdown-content">
    <a href="index.php">Cliente</a>
    <a href="produtos.php">Produto</a>
    <a href="vendas.php">Venda</a>
</div>
</div>

<!-- Botão "Editar" -->
<div class="dropdown">
    <button class="dropbtn">
        Editar <span class="arrow">&#x25BC;</span>
</button>
<div class="dropdown-content">
    <a href="#">Cliente</a>
    <a href="#">Produto</a>
    <a href="#">Venda</a>
</div>
</div>

<!-- Botão "Excluir" -->
<div class="dropdown">
    <button class="dropbtn">
        Excluir <span class="arrow">&#x25BC;</span>
</button>
<div class="dropdown-content">
    <a href="#">Cliente</a>
    <a href="#">Produto</a>
    <a href="#">Venda</a>
</div>
</div>

<!-- Botão "Lista" -->
<div class="dropdown">
    <button class="dropbtn">
        Lista <span class="arrow">&#x25BC;</span>
</button>
<div class="dropdown-content">
    <a href="lista_clientes.php">Lista Clientes</a>
    <a href="lista_produtos.php">Lista Produtos</a>
    <a href="lista_vendas.php">Lista Vendas</a>
</div>
</div>
</div>

    <div class="bolota"></div> <!-- Apenas a bolota mantida -->
    </div>
    </div>

    <div>
    <h3>Cadastro de Produtos</h3>
    <form method="POST">  
        <input type="text" name="produto" id="produto" placeholder="Digite o nome do produto ">
        <input type="text" name="descricao" id="descricao"  placeholder="Digite a descrição do produto ">
        <input type="text" name="preco" id="preco" placeholder="Digite o preço do produto ">
        <input type="text" name="estoque" id="estoque" placeholder="Digite a quantidade em estoque ">
        <input type="submit" name="cadastrar_produto" value="Cadastrar">
    </form>

    </div>
</body>
</html>










