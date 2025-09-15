<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtoModel = new Produto();
        $produtos = $produtoModel->listarTodos();
        $data = [
            'produtos' => $produtos
        ];
        $this->view('layouts/header',['titulo' => 'Lista de Produtos']);
        $this->view('produtos/listar', $data);
        $this->view('layouts/footer');
    }

    public function ver($id = 0)
    {
        $produtoModel = $this->model('Produto');
        $produto = $produtoModel->buscarPorId((int)$id);

        $data = [
            'title' => $produto->nome ?? 'Produto não encontrado',
            'produto' => $produto
        ];
	    var_dump($data);
        $this->view('produtos/ver', $data);
    }
    public function cadastrar(){

        $this->view('layouts/header',['titulo'=> 'Cadastro de produto']);
        $this->view('produtos/cadastrar');
    }
    public function salvar(){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
        $percentual = $_POST['percentual'];
        $produtoModel = new Produto();
        $data=['nome'=>$nome,
                'descricao'=>$descricao,
                'preco'=>$preco,
                'promocao'=>$desconto,
                'taxa_promocao'=>$percentual,
            ];
            $produtoModel->create($data);
            $this->redirect('../');
    }
}
