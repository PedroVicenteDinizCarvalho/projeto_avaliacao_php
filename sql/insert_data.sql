-- Use o banco de dados
USE sistema_funcionarios;

-- Inserindo empresas de exemplo
INSERT INTO tbl_empresa (nome) VALUES
('Empresa A'),
('Empresa B'),
('Empresa C');

-- Inserindo funcionários de exemplo
INSERT INTO tbl_funcionario (nome, cpf, rg, email, id_empresa, salario, data_admissao) VALUES
('João Silva', '123.456.789-00', 'MG-12.345.678', 'joao.silva@email.com', 1, 3000.00, '2020-01-15'),
('Maria Oliveira', '987.654.321-00', 'MG-87.654.321', 'maria.oliveira@email.com', 2, 5000.00, '2015-05-10'),
('Carlos Souza', '321.654.987-00', 'MG-21.654.987', 'carlos.souza@email.com', 3, 2500.00, '2022-08-01');

-- Inserindo usuários de exemplo para login
INSERT INTO tbl_usuario (email, senha) VALUES
('admin@email.com', MD5('admin123')),
('user@email.com', MD5('user123'));
