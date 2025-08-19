<?php 
require_once "Endereco.php";

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private Endereco $endereco;
    private $dataCadastro;
    
    public function getNome()
    {
        return $this->nome;    
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
        public function getSobrenome()
    {
        return $this->sobrenome;    
    }
    public function setSobrenome($valor)
    {
        $this->sobrenome = $valor;
    }
    public function saudar()
    {
        return "Olá, meu nome é $this->nome $this->sobrenome";
    }
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }
    public function dizerEndereco()
    {
        return 'Moro em '. 
        $this->endereco->getLogradouro().' '.
        $this->endereco->getNome(). ' '.
        $this->endereco->getNumero().' '.
        $this->endereco->getBairro(). ' '.
        $this->endereco->getCidade();
    }

}