<?php

require './Entity/Produto.php';

$id_recebido = $_GET['id_produto'];

if(!isset($id_recebido) or !is_numeric($id_recebido)){
    header('location: index.php');
    exit;
}

$produto = Produto::buscar_by_id($id_recebido);
$produto = $produto->produto;
$descricao = $produto->descricao;
$preco = $produto->preco;
$estoque = $produto->estoque;


if(isset($_POST['editar'])){
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $prod_editado = new Produto();
    $prod_editado->produto = $produto;
    $prod_editado->descricao = $descricao;
    $prod_editado->preco = $preco;
    $prod_editado->estoque = $estoque;

    $result = $prod_editado->atualizar();
    if($result){
        echo '<script> alert("Atualizado com sucesso!!!) </script>' ;
    }else{
        echo 'Erro ao atualizar';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>editar-cadastro</h2>
    <form>
        <input type="text" name="produto" value="<?php echo $produto;?>">
        <input type="text" name="descricao"  value="<?php echo $descricao;?>">
        <input type="text" name="preco"  value="<?php echo $preco;?>">
        <input type="text" name="estoque"  value="<?php echo $estoque;?>">
        <input type="submit" value='editar'>
    </form>
</body>
</html>