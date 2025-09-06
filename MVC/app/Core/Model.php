<?php

namespace App\Core;


use App\Core\Database;
/**
 * SimpleMVC - Classe Model Abstrata
 * Fornece a funcionalidade CRUD base para todos os models da aplicação.
 */
abstract class Model
{
    /** @var PDO A instância da conexão PDO. */
    protected $db;

    /** @var string O nome da tabela associada a este model.
     * ESTA PROPRIEDADE DEVE SER SOBRESCRITA NA CLASSE FILHA.
     */
    protected $table;

    /** @var string A chave primária da tabela. */
    protected $primaryKey = 'id';

    public function __construct()
    {
        // Obtém a instância da conexão PDO.
        $this->db = Database::getInstance()->getConnection();
    }

    /**
     * Retorna todos os registros da tabela.
     * @return array
     */
    public function findAll()
    {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll();
    }

    /**
     * Busca um registro pela sua chave primária.
     * @param int $id
     * @return mixed
     */
    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE {$this->primaryKey} = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    /**
     * Cria um novo registro no banco de dados.
     * @param array $data Um array associativo de colunas e valores.
     * @return int O ID do registro inserido.
     */
    public function create(array $data)
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);

        return $this->db->lastInsertId();
    }

    /**
     * Atualiza um registro existente no banco de dados.
     * @param int $id O ID do registro a ser atualizado.
     * @param array $data Um array associativo de colunas e valores.
     * @return bool Retorna true em caso de sucesso, false caso contrário.
     */
    public function update($id, array $data)
    {
        $fields = [];
        foreach (array_keys($data) as $key) {
            $fields[] = "{$key} = :{$key}";
        }
        $fields = implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE {$this->primaryKey} = :id";
        
        $stmt = $this->db->prepare($sql);
        $data['id'] = $id; // Adiciona o ID aos dados para o bind
        
        return $stmt->execute($data);
    }

    /**
     * Deleta um registro pela sua chave primária.
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE {$this->primaryKey} = :id");
        return $stmt->execute([':id' => $id]);
    }
    
    // Você pode adicionar outros métodos genéricos aqui, como findBy, count, etc.
}