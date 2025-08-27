<?php
require_once "Carrinho.php";
$id = $_GET['id'];

session_start();
$carrinho = $_SESSION['carrinho'];
if($carrinho->removerProduto($id)!=-1){
    header('Location:listar.php');
}else{
    header('Location:erro.php');
}
