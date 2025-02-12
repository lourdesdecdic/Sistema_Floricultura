<?php

require './Entity/Produto.php';

$objProd = new Produto();
$produtos = $objProd->buscar();

//print_r($produtos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Floricultura</title>
    <link rel="stylesheet" href="./css/style.css">
    
    <style>
        
/* Estilo geral para a tabela */
table {
    border-collapse: collapse; /* Remove espaços entre as bordas das células */
    margin: 2rem auto;         /* Centraliza a tabela horizontalmente e adiciona margem vertical de 2rem */
    width: 50%;                /* Define a tabela para ocupar 80% da largura disponível */
}

/* Estilo para células de cabeçalho (th) e de dados (td) */
th, td {
    border: 1px solid black;   /* Define uma borda preta e sólida de 1px para cada célula */
    padding: 8px;              /* Adiciona 8px de espaço interno para melhor legibilidade */
    text-align: center;        /* Centraliza o conteúdo de cada célula */
}

/* Estilo específico para células do cabeçalho */
th {
    background-color: #f2f2f2; /* Aplica um fundo cinza claro nos cabeçalhos para destaque */
}

/* Estilização de linhas alternadas no corpo da tabela */

/* Para as linhas ímpares do tbody (primeira, terceira, etc.) */
tbody tr:nth-child(odd) {
    background-color: #f9f9f9; /* Fundo cinza bem claro para linhas ímpares */
}

/* Para as linhas pares do tbody (segunda, quarta, etc.) */
tbody tr:nth-child(even) {
    background-color: #ffffff; /* Fundo branco para linhas pares */
}
    </style>
</head>

<body>
    <div class="banner">
        <h1>Bem vindo ao Sistema Floricultura</h1>
        <p>As flores mais lindas e perfeitas para todas as ocasiões!</p>
    <div class="banner-buttons">
    <a href="#">cadastrar</a>
        <a href="#">editar</a>
        <a href="#">excluir</a>
        <a href="#">lista</a>
    </div>

    <div class="banner-buttons">

    <!-- Botão "Cadastrar" -->
    <div class="dropdown">
        <button class="dropbtn">
            Cadastrar <span class="arrow">&#x25BC;</span>
        </button>
    <div class="dropdown-content">
        <a href="#">Cliente</a>
        <a href="#">Produto</a>
        <a href="#">Venda</a>
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

    <!-- Botão "Listar" -->
    <div class="dropdown">
        <button class="dropbtn">
            Listar <span class="arrow">&#x25BC;</span>
    </button>
    <div class="dropdown-content">
        <a href="#">Cliente</a>
        <a href="#">Produto</a>
        <a href="#">Venda</a>
    </div>
    </div>
    </div>

    <div class="bolota"></div> <!-- Apenas a bolota mantida -->
    </div>
    </div>

    <div>
    <h3>Listar Produtos</h3>
    <table>
            <tr>
                <td>Id</td>
                <td>Produto</td>
                <td>Descricao</td>
                <td>Preco</td>
                <td>estoque</td>
            </tr>
            <?php
            foreach($produtos as $prod){

                echo '
                 <tr>
                    <td>'.$prod['id'].'</td>
                    <td>'.$prod['produto'].'</td>
                    <td>'.$prod['descricao'].'</td>
                    <td>'.$prod['preco'].'</td>
                    <td>'.$prod['estoque'].'</td>
                 </tr>
            ';

            }
            
            ?>
    </table>
    </div>
</body>
</html>