<?php 
require './Entity/Venda.php'; // Inclui a classe Venda
//require './DB/Database.php'; // Inclui o Banco de Dados

$dados = new Venda('','','','','','');
$vendas_banco = $dados->buscar();

if(isset($_POST['cadastrar'])){
    $data_venda = $_POST['data_venda'];
    $cliente_id = $_POST['cliente_id'];
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];
    $preco_unitario = $_POST['preco_unitario'];
    $total = $_POST['total'];
    $estoque = $_POST['estoque'];

    $Venda = new Venda($data_venda,$cliente_id,$produto_id,$quantidade,$preco_unitario, $total,$estoque);
    $result = $venda->cadastrar();
    if($result){
        echo '<script> alert("Venda cadastrada com sucesso!!") </script>';
    }else{
        echo 'Error';
    }
}
?>

