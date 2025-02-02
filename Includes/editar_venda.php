<?php

require './Entity/Venda.php';

$id_recebido = $_GET['id_venda'];

if(!isset($id_recebido) or !is_numeric($id_recebido)){
    header('location: index.php');
    exit;
}

$venda = Venda::buscar_by_id($id_recebido);
$data_venda = $venda->data_venda;
$cliente_id = $venda->cliente_id;
$produto_id = $venda->produto_id;
$quantidade = $venda->quantidade;
$preco_unitario = $venda->preco_unitario;
$total = $venda->$total;


if(isset($_POST['editar'])){
    $data_venda = $_POST['data_venda'];
    $cliente_id = $_POST['cliente_id'];
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];
    $preco_unitario = $_POST['preco_unitario'];
    $total = $_POST['total'];


    $venda_editado = new Venda();
    $venda_editado->data_venda = $data_venda;
    $venda_editado->cliente_id = $cliente_id;
    $venda_editado->produto_id = $produto_id;
    $venda_editado->quantidade = $quantidade;
    $venda_editado->preco_unitario = $preco_unitario;
    $venda_editado->total = $total;

    $result = $venda_editado->atualizar();
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
        <input type="text" name="produto" value="<?php echo $data_venda;?>">
        <input type="text" name="descricao"  value="<?php echo $cliente_id;?>">
        <input type="text" name="preco"  value="<?php echo $produto_id;?>">
        <input type="text" name="estoque"  value="<?php echo $quantidade;?>">
        <input type="text" name="estoque"  value="<?php echo $preco_unitario;?>">
        <input type="text" name="estoque"  value="<?php echo $total;?>">
        <input type="submit" value='editar'>
    </form>
</body>
</html>

