CREATE DATABASE gerenciador_de_lojas CHARACTER SET utf8 COLLATE utf8_general_ci;
USE gerenciador_de_lojas;

CREATE TABLE lojas (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(13) NOT NULL,
    endereco VARCHAR(200) NOT NULL
);

CREATE TABLE produtos (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    loja_id INT UNSIGNED NOT NULL,
	nome VARCHAR(100) NOT NULL,
    preco DECIMAL NOT NULL,
    quantidade INT UNSIGNED NOT NULL,
    CONSTRAINT fk_produtos_loja_id_lojas_id
		FOREIGN KEY (loja_id) REFERENCES lojas(id)
);

INSERT INTO LOJAS (nome,telefone,endereco) VALUES('loja 1','1212121212','Rua 1');
INSERT INTO LOJAS (nome,telefone,endereco) VALUES('loja 2','2222222222','Rua 2');
INSERT INTO LOJAS (nome,telefone,endereco) VALUES('loja 3','3333333333','Rua 3');
INSERT INTO LOJAS (nome,telefone,endereco) VALUES('loja 4','4444444444','Rua 4');
INSERT INTO LOJAS (nome,telefone,endereco) VALUES('loja 5','5555555555','Rua 5');