<?php
include 'layout/header.php';
require_once 'Carrinho.php'
?>

<main class="content">
    
    <?php
    session_start();
    $carrinho = $_SESSION['carrinho'];
    if(empty($carrinho->getItens())){
        echo "<div>Não há itens no carrinho</div>";
    }else{
        foreach($carrinho->listarProdutos() as $item){
            echo "<p>Produto: ".$item->getNome().", Preço: ".$item->getPreco()."</p>";
        }
    }
    ?>
    <a href="index.php">Voltar</a>
</main>

<?php
include 'layout/footer.php';

?>