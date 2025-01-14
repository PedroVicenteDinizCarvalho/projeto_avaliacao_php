<?php

require_once __DIR__ . '/../core/Database.php';

class Empresa
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection(); // Obter conexão do banco
    }

    public function criar($nome)
    {
        $sql = "INSERT INTO tbl_empresa (nome) VALUES (:nome)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome', $nome);

        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT * FROM tbl_empresa";
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
