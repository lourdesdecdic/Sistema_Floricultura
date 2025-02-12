<?php 

require './DB/Database.php'; // Inclui o Banco de Dados

class Cliente {
    private $id;
    private $nome;
    private $cpf;
    private $email;

    // Construtor
    public function __construct($nome=null, $cpf=null, $email=null) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    // Método de cadastro 
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