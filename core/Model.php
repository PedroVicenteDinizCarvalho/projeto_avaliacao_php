<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../config/database.php';

        try {
            $this->db = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']}",
                $config['user'],
                $config['password']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}