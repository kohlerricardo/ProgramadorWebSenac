 <?php include 'layout/header.php' ?> 
 
    <main class="container">

    <div class="grid">
        <div></div>
        <div>
     <form action="processa.php" method="POST">
        <fieldset>
            <label>
                Nome:
                <input type="text" name="nome" placeholder="Nome Completo" required/>
            </label>
            <label>
                Email:
                <input type="email" name="email" placeholder="E-mail"/>
            </label>
             <label>
                Senha:
                <input type="password" name="senha" placeholder="Senha"/>
            </label>
            <label>
                Confirmar Senha:
                <input type="password" name="c_senha" placeholder="Confirmar Senha"/>
            </label>
            <label>
                <input type="checkbox" name="emprego" />
                Procuro emprego:
            </label>
            <input type="submit" value="Cadastrar"/>
            <input type="reset" value="Cancelar"/>
        </fieldset>
    </form>
</div>
        <div></div>
    </div>

     </main>
<?php include 'layout/footer.php' ?>