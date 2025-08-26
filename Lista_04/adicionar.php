<?php
require_once 'Carrinho.php';
session_start();

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$produto = new Produto($nome,$preco);
// $produto->setNome($nome);
// $produto->setPreco($preco);
// $carrinho = new Carrinho();
$_SESSION['carrinho']->adicionarProduto($produto);

?>
<a href="index.php">Voltar</a>
