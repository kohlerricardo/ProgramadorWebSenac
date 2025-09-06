<?php

namespace App\Core;

use PDO;
use PDOException;

/**
 * SimpleMVC - Classe de Conexão com o Banco de Dados (usando PDO)
 * Implementa o padrão Singleton para garantir uma única instância da conexão.
 */
class Database
{
    private static $instance = null;
    private $conn;

    private $host;
    private $db_name;
    private $username;
    private $password;

    /**
     * O construtor é privado para prevenir a criação de novas instâncias
     * com o operador 'new'.
     */
    private function __construct()
    {
        // Carrega as credenciais do banco de dados do arquivo defines
        $this->host =  HOST;
        $this->db_name = DB_NAME;
        $this->username = USERNAME;
        $this->password = PASSWORD;

        // DSN (Data Source Name) - String de conexão
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name . ';charset=utf8mb4';

        // Opções do PDO
        $options = [
            PDO::ATTR_PERSISTENT => true, // Conexões persistentes
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // Retorna resultados como objeto
        ];

        try {
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die('Erro de Conexão: ' . $e->getMessage());
        }
    }

    /**
     * Método estático que controla o acesso à instância (Singleton).
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * Retorna a conexão PDO para ser usada nos Models.
     * @return PDO
     */
    public function getConnection()
    {
        return $this->conn;
    }

    /**
     * Previne a clonagem da instância.
     */
    private function __clone() {}

    /**
     * Previne a desserialização da instância.
     */
    public function __wakeup() {}
}