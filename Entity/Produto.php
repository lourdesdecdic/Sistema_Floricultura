<?php

require './DB/Database.php'; // Inclui o Banco de Dados

class Produto {
    private $id;
    private $produto;
    private $descricao;
    private $preco;
    private $estoque;

    // Construtor 
    public function __construct($produto=null, $descricao=null, $preco=null, $estoque=null) {
        $this->produto = $produto;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    // Método de cadastro 
    public function cadastrar(){
        $db = new Database('produto');
        $result =  $db->insert([
            'produto' => $this->produto,
            'descricao' => $this->descricao,
            'preco' => $this->preco, 
            'estoque' => $this->estoque
        ]);
        
        return $result ? true : false;
    }



    // ADICIONANDO MÉTODOS ESTÁTICOS
    public static function buscar($where=null,$order=null,$limit=null){
        return (new Database('produto'))->select()->fetchAll(PDO::FETCH_ASSOC); //FETCHALL
    }

    public function excluir($id){
        return (new Database('produto'))->delete('id = '.$id);
    }

   
    // Getters
    public function getId() {
        return $this->id;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getEstoque() {
            return $this->estoque;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setEstoque($estoque) {
            $this->estoque = $estoque;
    }
} 
?>
