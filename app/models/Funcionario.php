<?php

require_once __DIR__ . '/../core/Database.php';

class Funcionario
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection(); // Obter conexão do banco
    }

    public function criar($nome, $cpf, $rg, $email, $salario, $data_cadastro, $id_empresa)
    {
        $sql = "INSERT INTO tbl_funcionario (nome, cpf, rg, email, salario, data_cadastro, id_empresa) 
                VALUES (:nome, :cpf, :rg, :email, :salario, :data_cadastro, :id_empresa)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':rg', $rg);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':salario', $salario);
        $stmt->bindParam(':data_cadastro', $data_cadastro);
        $stmt->bindParam(':id_empresa', $id_empresa);

        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT f.*, e.nome AS nome_empresa 
                FROM tbl_funcionario f 
                JOIN tbl_empresa e ON f.id_empresa = e.id_empresa";
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM tbl_funcionario WHERE id_funcionario = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}
