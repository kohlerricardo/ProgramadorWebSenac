<?= (isset($errors))? $errors: "" ?>
<main class="container">
    <div class="grid">
        <div>
        <form action="<?= url_to('cliente/create')?>" method="post" enctype="multipart/form-data">
    
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
                <label for="curriculum">
                    Curriculum Vitae:
                    <input id="arquivo" type="file" name="curriculum[]" multiple>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000">
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
    /* const olhos = document.querySelectorAll('.fa-eye');
        
        campoSenha.forEach((elemento)=>{
            elemento.addEventListener('mouseenter',(ev)=>{
                elemento.setAttribute('type','text')
            })
            elemento.addEventListener('mouseleave',(ev)=>{
                elemento.setAttribute('type','password')
            })
        })
        // olhos.forEach(olho=>{
        //     olho.addEventListener('click',(ev)=>{

        //         let alvo = ev.target.dataset.senha
        //         const campo = document.getElementById(alvo)
        //         if(campo.getAttribute('type')==="text"){
        //             campo.setAttribute('type','password')
        //         }else{
        //             campo.setAttribute('type','text')
        //         }
        //     })
        // })
        // const confirmaSenha = document.getElementById('confSenha');
        // confirmaSenha.addEventListener('focusout',(ev)=>{
        //     let senha = document.getElementById('senha').value
        //     let confsenha = ev.target.value
        //     if(confsenha != senha){
        //         alert('As senhas não são idênticas')
        //     } 
    })*/
        const arquivos = document.querySelector("input[type=file]")
        arquivos.addEventListener('change',(ev)=>{
           if(arquivos.files.length>5){
            alert('Mais arquivos que o possível')
            arquivos.value="";
            }
            let problem = false
            for(const file of arquivos.files){
                if(file.type !="application/pdf"){
                    alert(file.name+ ' não é PDF')
                    problem=true
                }
                if(file.size > (300*1024)){
                    alert(file.name+' é maior que 300KB')
                    problem=true
                }
            }
            if(problem){
                document.querySelector('input[type=submit]').setAttribute('disabled',true)
            }
            else{
                document.querySelector('input[type=submit]').removeAttribute('disabled')
            }
           
        })
        

    })

    async function searchWithFetch(){
        let corpo = new FormData();
        corpo.set('valor',"Raspberry")
        try{
            let raw = await fetch('http://localhost/ProgramadorWebSenac/MVC/fetchAPI',{
            method:'POST',
            body:corpo
            })
            if(!raw.ok){
               throw new Error(`Response status: ${response.status}`);
            }
            let content = await raw.text()
            console.log(content)
        }catch(error){
            console.error(error)
        }     
    }
   </script> 
</main>