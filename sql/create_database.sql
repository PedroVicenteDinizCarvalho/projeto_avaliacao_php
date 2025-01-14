-- Criação do banco de dados
CREATE DATABASE sistema_funcionarios;

-- Use o banco de dados
USE sistema_funcionarios;

-- Tabela de empresas
CREATE TABLE tbl_empresa (
    id_empresa INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de funcionários
CREATE TABLE tbl_funcionario (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    rg VARCHAR(20),
    email VARCHAR(255) NOT NULL UNIQUE,
    id_empresa INT NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    data_admissao DATE NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_empresa) REFERENCES tbl_empresa(id_empresa) ON DELETE CASCADE
);

-- Tabela de usuários (para login)
CREATE TABLE tbl_usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
