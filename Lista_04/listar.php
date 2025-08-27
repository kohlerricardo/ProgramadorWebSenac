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
    }else{?>
        <table>
            <thead>
                <tr>
                    <td>Indice</td>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Opções</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($carrinho->listarProdutos() as $id=> $item){
                        echo '<tr>';
                        echo "<td>".$id."</td>";
                        echo "<td>".$item->getNome().'</td>';
                        echo "<td>".$item->getPreco().'</td>';
                        echo "<td><a href='index.php?id=".$id."'>Editar</a><a href='excluir.php?id=".$id."'>Excluir</a></td>";
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>


    <a href="index.php">Voltar</a>
</main>

<?php
include 'layout/footer.php';

?>