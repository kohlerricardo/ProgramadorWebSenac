<?php
include_once 'layout/header.php';
require_once 'Carrinho.php';

session_start();
if(!isset($_SESSION['carrinho']))
    $_SESSION['carrinho'] = new Carrinho();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produto = $_SESSION['carrinho']->buscarItem($id);
}else{
    $produto = new Produto();
}

?>
<main class="content">

<div class="grid">
    <div>
        <a href="listar.php">Listar produtos</a>
    </div>
    <div>
        <form action="adicionar.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>
                Nome:
                <input type="text" name="nome" value="<?php echo $produto->getNome() ?>" id="">
            </label>    
            <label>
                Preco:
                <input type="text" name="preco" value="<?php echo $produto->getPreco() ?>"id="">
            </label>   
            <input type="submit" name="" value="<?= isset($id) ? "Editar":"Cadastrar" ?>" id=""/> 
        </form>
    </div>
    <div></div>
</div>

</main>

<?php
include_once 'layout/footer.php';