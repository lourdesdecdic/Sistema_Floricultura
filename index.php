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
</body>
</html>
        
    <div>
    <h2>Cadastro de Clientes</h2>
    <form method="POST">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome ">
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf ">
        <input type="text" name="email" id="email" placeholder="Digite seu email ">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <h3>Cadastro de Produtos</h3>
    <form method="POST">  
        <input type="text" name="nome" id="produto" placeholder="Digite o nome do produto ">
        <input type="text" name="nome" id="descricao"  placeholder="Digite a descrição do produto ">
        <input type="text" name="nome" id="preco" placeholder="Digite o preço do produto ">
        <input type="text" name="nome" id="estoque" placeholder="Digite a quantidade em estoque ">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

    <h4>Cadastro de Vendas</h4>
    <form method="POST">  
        <input type="text" name="nome" id="nome" placeholder="Digite a data_venda ">
        <input type="text" name="nome" id="cliente_id" placeholder="Digite o cliente_id ">
        <input type="text" name="nome" id="produto_id" placeholder="Digite o produto_id ">
        <input type="text" name="nome" id="quantidade" placeholder="Digite a quantidade vendida ">
        <input type="text" name="nome" id="preco_unitario" placeholder="Digite o preço_unitário ">
        <input type="text" name="nome" id="total" placeholder="Digite o total da venda ">
        <input type="text" name="nome" id="estoque" placeholder="Digite a quantidade em estoque ">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
    </div>
</body>
</html>










