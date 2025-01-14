<?php

require_once __DIR__ . '/../core/Database.php';

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection(); // Obter conexão do banco
    }

    public function autenticar($email, $senha)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE login = :email AND senha = :senha LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
