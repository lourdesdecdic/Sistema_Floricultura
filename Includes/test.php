<?php

$dados = array(
    [
        "id" => "1",
        "nome" => "Ana Patricia",
        "cpf" => "67999999999",
        "email" => "anapatricia@gmail.com"
    ],
    [
        "id" => "2",
        "nome" => "Leandro",
        "cpf" => "67888888888",
        "email" => "leandro@gmail.com"
    ],
    [
        "id" => "3",
        "nome" => "Marcos",
        "cpf" => "67777777777",
        "email" => "marcos@gmail.com"
    ],
);

//echo '<pre>';
//print_r($dados);
//echo '</pre>';
$i = 0;
while ($i < count($dados)){
    echo $dados[$i]["id"];
    echo $dados[$i]["nome"];
    echo $dados[$i]["cpf"];
    echo $dados[$i]["email"];
    echo "<br>";
    $i++;
};

$i = 0;
while ($i < count($dados)){
    echo $dados[$i]["id"];
    echo $dados[$i]["produto"];
    echo $dados[$i]["descricao"];
    echo $dados[$i]["preco"];
    echo $dados[$i]["estoque"];
    echo "<br>";
    $i++;
};

$i = 0;
while ($i < count($dados)){
    echo $dados[$i]["id"];
    echo $dados[$i]["data_venda"];
    echo $dados[$i]["cliente_id"];
    echo $dados[$i]["produto_id"];
    echo $dados[$i]["quantidade"];
    echo $dados[$i]["preco_unitario"];
    echo $dados[$i]["total"];
   
    echo "<br>";
    $i++;
};


