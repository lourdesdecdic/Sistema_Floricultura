<?php
require './Entity/Produto.php'; // Inclui a classe Produto
// require './DB/Database.php'; // Inclui o Banco de Dados

$dados = new Produto('','','','');
$clientes_banco = $dados->buscar();

if(isset($_POST['cadastrar'])){
    $produto = $_POST['produto '];
    $descricao = $_POST['descricao '];
    $preco = $_POST['preco '];
    $estoque = $_POST['estoque '];

    $produto = new Produto($produto,$descricao,$preco,$estoque);
    $result = $produto->cadastrar();
    if($result){
        echo '<script> alert("Produto cadastrado com sucesso!!") </script>';
    }else{
        echo 'Error';
    }
}
?>