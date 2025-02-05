<?php

require './Entity/Venda.php';

$total = '';
// Cadastro de Vendas
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
        <a href="#">Ver Clientes</a>
    </div>

    <div class="bolota"></div> <!-- Apenas a bolota mantida -->
    </div>
    </div>

    <div>
    <h3>Cadastro de Vendas</h3>
    <form method="POST">  
            <label for="data_venda">Data da Venda:</label>
            <input type="date"  class="dados_entrada" name="data_venda" id="data_venda" required>

            <label for="cliente_id">Cliente ID:</label>
            <input type="text" class="dados_entrada" name="cliente_id" id="cliente_id" placeholder="Digite o cliente_id" required>

            <label for="produto_id">Produto:</label>
            <input type="text" class="dados_entrada" name="produto_id" id="produto_id" placeholder="Digite o produto_id" required>

            <label for="quantidade">Quantidade:</label>
            <input type="number" class="dados_entrada" name="quantidade" id="quantidade" placeholder="Digite a quantidade vendida" required oninput="calcularTotal()">

            <label for="preco_unitario">Preço Unitário:</label>
            <input type="text" class="dados_entrada" name="preco_unitario" id="preco_unitario" placeholder="Digite o preço unitário" required oninput="calcularTotal()">

            <label for="total">Total da Venda:</label>
            <span id="total_mostrado">0.00</span> <!-- Exibição dinâmica do total -->
            <input type="hidden" name="total" id="total" value=""> <!-- Campo escondido para envio -->

            <input type="submit" name="cadastrar_venda" value="Cadastrar">
        </form>

    </div>


    <script>
        function calcularTotal() {
            let quantidade = document.getElementById('quantidade').value;
            let precoUnitario = document.getElementById('preco_unitario').value;
            let total = 0;

            if (quantidade && precoUnitario) {
                total = parseFloat(quantidade) * parseFloat(precoUnitario);
            }

            document.getElementById('total_mostrado').innerText = total.toFixed(2); // Mostra o total formatado
            document.getElementById('total').value = total.toFixed(2); // Envia o total no formulário
        }
    </script>
</body>
</html>








