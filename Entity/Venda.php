<?php 

require './DB/Database.php'; // Inclui o Banco de Dados

class Venda {
    private $id;
    private $data_venda;
    private $cliente_id;
    private $produto_id;
    private $quantidade;
    private $preco_unitario;    
    private $total;
    
    // Construtor 
    public function __construct($data_venda, $cliente_id, $produto_id, $quantidade, $preco_unitario, $total) {
        $this->data_venda = $data_venda;
        $this->cliente_id = $cliente_id;
        $this->produto_id = $produto_id;
        $this->quantidade = $quantidade;
        $this->preco_unitario = $preco_unitario;
        $this->total = $total;
    }

    // Método de cadastro 
    public function cadastrar(){
        $db = new Database('venda');
        $result =  $db->insert(
            [
            'data_venda' => $this->data_venda,
            'cliente_id' => $this->cliente_id,
            'produto_id' => $this->produto_id,
            'quantidade' => $this->quantidade,
            'preco_unitario' => $this->preco_unitario,
            'total' => $this->total, 
            ]
        );

        if($result) {
            return true;
        }
        else{
            return false;
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
  
    public function get() {
        return $this->preco_unitario;
    }

    public function gettotal() {
        return $this->total;
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
    }

    public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
    }

    public function setpreco_unitario($preco_unitario) {
        $this->preco_unitario = $preco_unitario;
}

    public function setTotal($total) {
        $this->total = $total;
    }
}