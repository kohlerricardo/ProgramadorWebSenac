<?php
require_once 'Produto.php';

class Carrinho
{
    private $itens;

    public function __construct()
    {
        $this->itens=[];

    }
    public function getItens(){
        return $this->itens;
    }
    public function adicionarProduto(Produto $produto)
    {
        $this->itens[]=$produto;
    }
    public function removerProduto(Produto $produto)
    {

    }
    public function listarProdutos()
    {
        
        return $this->itens;
    }
}