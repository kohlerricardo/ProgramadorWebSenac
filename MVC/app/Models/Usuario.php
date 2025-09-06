<?php

namespace App\Models;

use App\Core\Database;

class Usuario
{
    protected $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }
    /**
     * Retorna todos os produtos.
     * @return array
     */
    public function listarTodos()
    {
        return $this->dados;
    }

    /**
     * Busca um produto pelo seu ID.
     * @param int $id
     * @return array|null
     */
    public function buscarPorId($id)
    {
        return $this->dados[$id] ?? null;
    }
}