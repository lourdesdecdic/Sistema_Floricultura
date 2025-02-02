<?php
require './Entity/Produto.php';

$produto = new Produto('','','','');

$id = $_GET['id_produto'];

$result = $produto->excluir($id);

if($result){
    echo '<script> alert("Produto excluido com sucesso! ") </script> ';
    echo "<meta http-equiv='refresh' content='0.5;url=cadastro.php'>";
}
else{
    echo '<script> alert("Erro ao excluir!") </script> ';
}