
<main class="container">
    <div class="grid">
       
        <div>
        <form action="" method="post">
            <fieldset>
                <label for="Nome">
                    Nome:
                    <input type="text" name="nome">
                </label>
                <label for="email">
                    Email:
                    <input type="email" name="email">
                </label>
                <label for="senha">
                    Senha:
                    <span><i class="fa fa-eye" data-senha="senha"></i></span>
                    <input id="senha" type="password" name="senha">
                </label>
                <label for="confSenha">
                    Confirmar Senha
                    <span><i class="fa fa-eye" data-senha="confSenha"></i></span>
                    <input id="confSenha" type="password" name="confSenha">
                </label>
                <label for="cadastrar">

                    <input type="submit" value="Cadastrar">
                    
                </label>
        </fieldset>
        </form>
        </div>
        <div></div>
        
    </div>

   <script>
    document.addEventListener('DOMContentLoaded',()=>{
        const olhos = document.querySelectorAll('.fa-eye');
        /*
        campoSenha.forEach((elemento)=>{
            elemento.addEventListener('mouseenter',(ev)=>{
                elemento.setAttribute('type','text')
            })
            elemento.addEventListener('mouseleave',(ev)=>{
                elemento.setAttribute('type','password')
            })
        })*/
        console.log(olhos)
        olhos.forEach(olho=>{
            olho.addEventListener('click',(ev)=>{

                let alvo = ev.target.dataset.senha
                const campo = document.getElementById(alvo)
                if(campo.getAttribute('type')==="text"){
                    campo.setAttribute('type','password')
                }else{
                    campo.setAttribute('type','text')
                }
            })
        })
        const confirmaSenha = document.getElementById('confSenha');
        confirmaSenha.addEventListener('focusout',(ev)=>{
            let senha = document.getElementById('senha').value
            let confsenha = ev.target.value
            if(confsenha != senha){
                alert('As senhas não são idênticas')
            } 
        })
    })

   </script> 
</main>