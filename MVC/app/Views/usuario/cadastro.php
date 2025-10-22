<main class="container">
    <div class="grid">
      
    <div></div>
    <div>
        <form action="<?= url_to('usuario/create')?>" method="post" enctype="application/x-www-form-urlencoded">
            <fieldset>
            <label>Nome Completo:
                <input type="text" name="nome" placeholder="Nome Completo">
            </label>
            <label>E-mail:
                <input type="email" name="email" placeholder="E-mail">
            </label>
            <label>Senha:
                <input type="password" name="senha" placeholder="Senha">
            </label>
            <label>Confirmar Senha:
                <input type="password" name="csenha" placeholder="Confirmar Senha">
            </label>   
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>

    <div></div>
    </div>

</main>