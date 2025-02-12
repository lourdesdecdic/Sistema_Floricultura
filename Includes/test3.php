<?php
require './DB/Database.php';

class Cliente {
    private $id;
    private $nome;
    private $cpf;
    private $email;

    public function __construct($nome, $cpf, $email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function cadastrar(){
        $db = new Database('cliente');
        $result =  $db->insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email
        ]);
        
        if($result) {
            return true;
        }
        else{
            return false;
        }
    }

    public static function buscar($where=null,$order=null,$limit=null){
        return (new Database('cliente'))->select()->fetchAll(PDO::FETCH_ASSOC); //FETCHALL
    }

    public function excluir($id){
        return (new Database('cliente'))->delete('id = '.$id);
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
?>



<?php
require './DB/Database.php';

class Produto { 
    private $id;
    private $produto;
    private $descricao;
    private $preco;
    private $estoque;

    // Construtor 
    public function __construct($produto, $descricao, $preco, $estoque) {
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

    public function setEstoque($estoque) {
            $this->estoque = $estoque;
    }
} 
?>



<?php
require './DB/Database.php';

class Venda {
    private $id;
    private $data_venda;
    private $cliente_id;
    private $produto_id;
    private $quantidade;    
    private $total;
    private $estoque;

    // Construtor 
    public function __construct($data_venda, $cliente_id, $produto_id, $quantidade, $total, $estoque) {
        $this->data_venda = $data_venda;
        $this->cliente_id = $cliente_id;
        $this->produto_id = $produto_id;
        $this->quantidade = $quantidade;
        $this->total = $total;
        $this->estoque = $estoque;
    }

    public function cadastrar(){
        $db = new Database('venda');
        $result =  $db->insert(
            [
            'data_venda' => $this->data_venda,
            'cliente_id' => $this->cliente_id,
            'produto_id' => $this->produto_id,
            'quantidade' => $this->quantidade,
            'total' => $this->total,
            'estoque' => $this->estoque 
            ]
        );

        if($result) {
            return true;
        }
        else{
            return false;
        }
    }
}

    public static function buscar($where=null,$order=null,$limit=null){
        return (new Database('venda'))->select()->fetchAll(PDO::FETCH_ASSOC);  //FETCHALL
    }

    public function excluir($id){
        return (new Database('venda'))->delete('id = '.$id);
    }

   // Getters
    public function getId() {
        return $this->id;
    }

    public function getdata_venda() {
        return $this->data_venda;
    }

    public function getcliente_id() {
        return $this->cliente_id;
    }

    public function getproduto_id() {
        return $this->produto_id;
    }

    public function getquantidade() {
        return $this->quantidade;
    }

    public function gettotal() {
        return $this->total;
    }

    public function getestoque() {
        return $this->estoque;
    }

    // Setters
    public function setId($Id) {
        $this->id = $id;
    }

    public function setData_venda($data_venda) {
        $this->data_venda = $data_venda;
    }

    public function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    public function setProduto_id($produto_id) {
        $this->produto_id = $produto_id;

    public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }
}




    <form method="POST">  
        <input type="text" name="data_venda" id="data_venda" placeholder="Digite a data_venda ">
        <input type="text" name="cliente_id" id="cliente_id" placeholder="Digite o cliente_id ">
        <input type="text" name="produto_id" id="produto_id" placeholder="Digite o produto_id ">
        <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade vendida ">
        <input type="text" name="preco_unitario" id="preco_unitario" placeholder="Digite o preco_unitário ">
        <input type="text" name="total" id="total" placeholder="Digite o total da venda ">
        <input type="submit" name="cadastrar_venda" value="Cadastrar">
    </form> 

/* botões dentro do banner */
.banner-buttons {
    margin-top: 70px; 
}

/* links (botões) dentro do banner */
.banner-buttons a {
    background-color: #fac62a; 
    color: white; 
    text-decoration: none; 
    padding: 10px 20px; 
    border-radius: 5px; 
    margin: 5px; 
    transition: 0.5s; 
}

/* Efeito ao passar o mouse nos botões */
.banner-buttons a:hover {
    background-color: #fac62a; 
}

/*.botao-ver-produto {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.botao-ver-produto:hover {
    background-color: #388E3C;
}*/

/*<link rel="stylesheet" href="./css/style.css">*/