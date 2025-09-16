<main class="container">
    <div class="grid">
        <div></div>

        <div>
            <form action="<?= url_to('produtos/salvar')?>" method="post">
                <fieldset>
                    <?php if(isset($produto)):?>
                        <input type="hidden" name="id" value="<?= $produto->id ?>" readonly>
                    <?php endif?>
                    <label>
                        Nome
                        <input type="text" placeholder="Nome" name="nome" value="<?= isset($produto->nome)? $produto->nome : "" ?>"></label>
                    <label>
                        Descrição
                        <textarea type="text" placeholder="Descrição" 
                        rows="5" cols="10" name="descricao">
                    <?= isset($produto->descricao)? $produto->descricao : "" ?>
                        </textarea></label>
                    <label>
                        Preço 
                        <input type="text" placeholder="Preço" name="preco" 
                        value="<?= isset($produto->preco)? $produto->preco : "" ?>"></label>
                    <fieldset>
                        <legend>Desconto</legend>
                    <input type="radio" name="desconto" value="true" <?= isset($produto->desconto) ? ($produto->desconto=="1" ? "checked":""): "" ?> >
                                                                       
                    <label>
                        Sim
                    </label>
                        <input type="radio" name="desconto" value="false"  <?php
                                                                        if(isset($produto->desconto)){
                                                                            if($produto->desconto==0){
                                                                                echo "checked";
                                                                            }
                                                                        }                                                                        
                                                                        ?>>
                        <label>
                        Não
                        </label>
                    </fieldset>
                    <label>
                        Percentual
                        <input type="text" placeholder="Percentual de desconto" name="percentual"
                        value="<?= isset($produto->taxa_promocao)? $produto->taxa_promocao : "" ?>">
                    </label>
                    <input type="submit" value="Cadastrar">
                    <a href="ProgramadorWebSenac/MVC/produtos">Cancelar</a>
                </fieldset>
            </form>
        </div>

        <div></div>
    </div>
</main>