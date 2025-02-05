<?php
require './Entity/Cliente.php';
require './Entity/Produto.php';
require './Entity/Venda.php';

// Cadastro de Cliente
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

// Cadastro de Produto
if (isset($_POST['cadastrar_produto'])) {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $produtoObj = new Produto($produto, $descricao, $preco, $estoque);
    $result = $produtoObj->cadastrar();

    if ($result) {
        echo '<script>alert("Produto cadastrado com sucesso!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar produto!");</script>';
    }
}

// Cadastro de Venda
if (isset($_POST['cadastrar_venda'])) {
    $data_venda = $_POST['data_venda'];
    $cliente_id = $_POST['cliente_id'];
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];
    $preco_unitario = $_POST['preco_unitario'];
    $total = $_POST['total'];
 
    // Calcula o total
    $total = $preco_unitario * $quantidade;

    // Cria o objeto venda com os dados
    $venda = new Venda($data_venda, $cliente_id, $produto_id, $quantidade, $preco_unitario, $total);

    // Realiza o cadastro da venda
    $result = $venda->cadastrar();

    if ($result) {
        echo '<script>alert("Venda cadastrada com sucesso!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar venda!");</script>';
    }
}
?>