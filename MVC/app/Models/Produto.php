<?php

namespace App\Models;
use App\Core\Model;
class Produto extends Model
{
    protected $table = 'produto';
    // Simula uma tabela de banco de dados
    private $dados = [
        1 => ['id' => 1, 'nome' => 'Laptop Gamer', 'preco' => 7500.00, 'descricao' => 'Laptop de alta performance para jogos.'],
        2 => ['id' => 2, 'nome' => 'Mouse Óptico', 'preco' => 120.50, 'descricao' => 'Mouse ergonômico com 6 botões.'],
        3 => ['id' => 3, 'nome' => 'Teclado Mecânico', 'preco' => 450.00, 'descricao' => 'Teclado com switches blue para melhor feedback tátil.']
    ];

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