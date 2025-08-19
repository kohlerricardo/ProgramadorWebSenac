<?php

class Endereco
{
    private $logradouro;
    private $nome;
    private $numero;
    private $bairro;
    private $cidade;
    private $cep;
    
    public function getLogradouro()
    {
        return $this->logradouro;
    }
    public function setLogradouro($valor)
    {
        $this->logradouro = $valor;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($valor){
        $this->nome=$valor;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($valor){
        $this->numero=$valor;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($valor){
        $this->bairro=$valor;
    }
        public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($valor){
        $this->cidade=$valor;
    }
    public function getCEP(){
        return $this->cep;
    }
    public function setCEP($valor){
        $this->cep=$valor;
    }

}