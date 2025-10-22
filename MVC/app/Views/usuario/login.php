<main class="container">
    <div class="grid">
        <div></div>
        <div>
            <form action="<?= url_to('auth/login')?>" method="post">
                <fieldset>
                    <label>
                        E-mail:
                        <input type="email" name="email">
                    </label>
                    <label>
                        Senha:
                        <input type="password" name="senha">
                    </label>
                    <input type="submit" value='Login'>
                </fieldset>
            </form>
        </div>
        <div></div>
    </div>
</main>