<?php

require './Entity/Cliente.php';

$id_recebido = $_GET['id_cliente'];

if(!isset($id_recebido) or !is_numeric($id_recebido)){
    header('location: index.php');
    exit;
}

$cliente = Cliente::buscar_by_id($id_recebido);
$nome = $cliente->nome;
$cpf = $cliente->cpf;
$email = $cliente->email;

if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $cli_editado = new Cliente();
    $cli_editado->nome = $nome;
    $cli_editado->cpf = $cpf;
    $cli_editado->email = $email;

    $result = $cli_editado->atualizar();
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
    <h1>editar-cadastro</h1>
    <form>
        <input type="text" name="nome" value="<?php echo $nome;?>">
        <input type="text" name="cpf"  value="<?php echo $cpf;?>">
        <input type="text" name="email"  value="<?php echo $email;?>">
        <input type="submit" value='editar'>
    </form>
</body>
</html>