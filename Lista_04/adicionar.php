<?php
require_once 'Carrinho.php';
session_start();

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$id = isset($_POST['id'])? $_POST['id']:null; 

$produto = new Produto($nome,$preco);
if($id==null){
    // $produto->setNome($nome);
    // $produto->setPreco($preco);
    // $carrinho = new Carrinho();
    $_SESSION['carrinho']->adicionarProduto($produto);
}else{
    $_SESSION['carrinho']->alterarProduto($id,$produto);
}

?>
<a href="index.php">Voltar</a>
