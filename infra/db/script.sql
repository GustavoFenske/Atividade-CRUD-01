-- aqui ele vai criar o nosso DB
CREATE DATABASE sistema_simples_m1; 

-- vai usar nosso banco de dados para os proximos comandos
USE sistema_simples_m1;

-- no codigo a seguir ele vai criar os criterios para o usuario, definindo que ele deve ter um ID, usuario e senha
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);


-- logo abaixo ele cria o nosso usuario admin, para um melhor gerenciamento futuro
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');