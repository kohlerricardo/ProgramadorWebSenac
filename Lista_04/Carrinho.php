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
    public function removerProduto($id)
    {
        if(key_exists($id,$this->itens)){
            unset($this->itens[$id]);
        }else{
            return -1;
        } 
    }
    public function listarProdutos()
    {
        
        return $this->itens;
    }
    public function buscarItem($id){
        if(key_exists($id,$this->itens)){
            return $this->itens[$id];
        }
        else{
            return -1;
        }
    }
    public function alterarProduto($id,Produto $produto){
        $this->itens[$id]=$produto;
    }
}