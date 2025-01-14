<?php

class Database
{
    private static $instance = null; // Instância única do PDO
    private $connection;

    private function __construct()
    {
        try {
            $host = 'localhost'; // Endereço do servidor
            $dbname = 'nome_do_banco'; // Nome do banco de dados
            $username = 'root'; // Nome de usuário do banco
            $password = ''; // Senha do banco

            $this->connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    /**
     * Retorna a instância única do banco de dados
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Retorna a conexão PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Impede a clonagem do objeto
     */
    private function __clone() {}

    /**
     * Impede a serialização do objeto
     */
    private function __wakeup() {}
}
