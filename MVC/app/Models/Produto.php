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
    /**
     * Busca usuario por campo 
     * @param array $parametro -  array associativo contendo nome do campo a ser pesquisado e o valor
     * @return registro encontrado ou null
    */
    public function findBy(array $parametros)
    {
        $key = array_key_first($parametros);
        $sql = 'SELECT * FROM '.$this->table.' WHERE '.$key." like :$key";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($parametros);
        return $stmt->fetchAll();
    }
}