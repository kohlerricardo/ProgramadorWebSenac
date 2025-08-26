<?php
include_once 'layout/header.php';
require_once 'Carrinho.php';

session_start();
if(!isset($_SESSION['carrinho']))
    $_SESSION['carrinho'] = new Carrinho();
?>
<main class="content">

<div class="grid">
    <div>
        <a href="listar.php">Listar produtos</a>
    </div>
    <div>
        <form action="adicionar.php" method="POST">
            <label>
                Nome:
                <input type="text" name="nome" id="">
            </label>    
            <label>
                Preco:
                <input type="text" name="preco" id="">
            </label>   
            <input type="submit" name="" value="Cadastrar" id=""/> 
        </form>
    </div>
    <div></div>
</div>

</main>

<?php
include_once 'layout/footer.php';