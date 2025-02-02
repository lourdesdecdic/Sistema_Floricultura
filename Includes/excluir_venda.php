<?php
require './Entity/Venda.php';

$produto = new Venda('','','','');

$id = $_GET['id_venda'];

$result = $venda->excluir($id);

if($result){
    echo '<script> alert("Venda excluida com sucesso! ") </script> ';
    echo "<meta http-equiv='refresh' content='0.5;url=cadastro.php'>";
}
else{
    echo '<script> alert("Erro ao excluir!") </script> ';
}