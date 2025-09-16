<main class="container">
    <div class="column">
        <div></div>
        <div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Promoção</th>
                    <th>% Promoção</th>
                    <th> Opções </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto):?>
                <tr>
                    <td><?= $produto->nome?></td>
                    <td><?= $produto->descricao?></td>
                    <td><?= $produto->preco?></td>
                    <td><?= $promo = $produto->promocao?"Sim":"Não"?></td>
                    <td><?= $produto->taxa_promocao?></td>
                    <td>
                        <a href="http://localhost/ProgramadorWebSenac/MVC/produtos/editar/<?= $produto->id?>">Editar</a>
                        <a href="http://localhost/ProgramadorWebSenac/MVC/produtos/excluir/<?= $produto->id?>">Excluir</a>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>


        </div>
        <div></div>
    </div>
</main>