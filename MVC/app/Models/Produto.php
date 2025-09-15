<?php

namespace App\Models;
use App\Core\Model;
class Produto extends Model
{
    protected $table = 'produto';
    /**
     * Retorna todos os produtos.
     * @return array
     */
    public function listarTodos()
    {
        return $this->findAll();    
    }

    /**
     * Busca um produto pelo seu ID.
     * @param int $id
     * @return array|null
     */
    public function buscarPorId($id)
    {
        return $this->find($id);
    }
}