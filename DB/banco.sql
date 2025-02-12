
DELIMITER $$;
CREATE TRIGGER estoque AFTER INSERT ON venda
FOR EACH ROW
BEGIN
   UPDATE produto SET estoque = estoque - new.quantidade
   WHERE produto.id = new.produto_id;
END$$;

CREATE TABLE cliente (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE produto (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    produto VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT(11) DEFAULT 0
);

CREATE TABLE venda (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,   
    cliente_id INT(11) NOT NULL,
    produto_id INT(11) NOT NULL,
    quantidade INT(11) NOT NULL,
    preco_unitario DECIMAL(10, 2) NOT NULL, 
    total DECIMAL(10, 2) NOT NULL,
    estoque INT(11) NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES cliente(id),  
    FOREIGN KEY (produto_id) REFERENCES produto(id)  
);