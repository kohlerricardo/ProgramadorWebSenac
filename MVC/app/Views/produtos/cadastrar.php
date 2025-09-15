<main class="container">
    <div class="grid">
        <div></div>

        <div>
            <form action="salvar" method="post">
                <fieldset>
                    <label>
                        Nome
                        <input type="text" placeholder="Nome" name="nome"></label>
                    <label>
                        Descrição
                        <textarea type="text" placeholder="Descrição" 
                        rows="5" cols="10" name="descricao"></textarea></label>
                    <label>
                        Preço 
                        <input type="text" placeholder="Preço" name="preco"></label>
                    <fieldset>
                        <legend>Desconto</legend>
                        <input type="radio" name="desconto">
                        <label>
                        Sim
                        </label>
                        <input type="radio" name="desconto">
                        <label>
                        Não
                        </label>
                    </fieldset>
                    <label>
                        Percentual
                        <input type="text" placeholder="Percentual de desconto" name="percentual">
                    </label>
                    <input type="submit" value="Cadastrar">
                    <a href="ProgramadorWebSenac/MVC/produtos">Cancelar</a>
                </fieldset>
            </form>
        </div>

        <div></div>
    </div>
</main>