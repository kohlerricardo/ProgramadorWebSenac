<?php
require 'Pessoa.php';

echo 'IntroPOO'.'<br>';

$pessoa1 = new Pessoa();
$pessoa2 = new Pessoa();
$pessoa1->setNome("Harry");
$pessoa2->setNome("Brayan");

$pessoa1->setSobrenome("Potter");
$pessoa2->setSobrenome("M.");

// echo $pessoa1->saudar();
// echo '<br>';


$endereco = new Endereco();
$endereco->setLogradouro("Rua");
$endereco->setNome("Dos Alfeneiros");
$endereco->setNumero("4");
$endereco->setBairro("Little Winding");
$endereco->setCidade("Surrey");
$endereco->setCEP("12345-678");

$pessoa1->setEndereco($endereco);
echo $pessoa1->saudar() . '<br>';
echo $pessoa1->dizerEndereco();
echo '<br>';
echo $pessoa2->saudar() . '<br>';
$pessoa2->setEndereco($endereco);
echo $pessoa2->dizerEndereco();

