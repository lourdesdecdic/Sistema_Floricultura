<?php 
require './Entity/Cliente.php'; // Inclui a classe Cliente
//require './DB/Database.php'; // Inclui o Banco de Dados

$dados = new Cliente('','','');
$clientes_banco = $dados->buscar();

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $cliente = new Cliente($nome,$cpf,$email);
    $result = $cliente->cadastrar();
    if($result){
        echo '<script> alert("Cliente cadastrado com sucesso!!") </script>';
    }else{
        echo 'Error';
    }
}
?>