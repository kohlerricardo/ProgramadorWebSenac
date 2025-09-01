<?php

namespace App\Controllers;

use App\Core\Controller;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtoModel = $this->model('Produto');
        $produtos = $produtoModel->listarTodos();

        $data = [
            'title' => 'Lista de Produtos',
            'produtos' => $produtos
        ];
	var_dump($data);
        //$this->view('produtos/index', $data);
    }

    public function ver($id = 0)
    {
        $produtoModel = $this->model('Produto');
        $produto = $produtoModel->buscarPorId((int)$id);

        $data = [
            'title' => $produto['nome'] ?? 'Produto não encontrado',
            'produto' => $produto
        ];
	var_dump($data);
//        $this->view('produtos/ver', $data);
    }
}
