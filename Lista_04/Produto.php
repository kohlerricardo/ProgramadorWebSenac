<?php

class Produto
{
    private $id;
    private $nome;
    private $preco;

    public function __construct($nome=null,$preco=null,$id=null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($valor)
    {
        $this->preco = $valor;
    }
}