<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="Pagina 1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link  rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    </head>
    <body>
      
    <div class="grid">
        <div></div>
        <div>
            <!-- <form action="">
                <fieldset>
                    <label>
                        Nome:
                        <input type="text">
                    </label>
                    <label>
                        Sobrenome:
                        <input type="text">
                    </label>
                    <label>
                        CPF:
                        <input type="text" name="cpf" id="cpf">
                    </label>
                    <input id="cadastrar" type="submit" value="Cadastrar">
                </fieldset>
                </form> -->

        <div>Url gerada 1:
            <p><?=url_to('')?></p>
           <p> <a href="<?=url_to('')?>">Index</a></p>
        </div>
        <div>Url gerada 2:
            <p><?=url_to('/produtos')?></p>
           <p> <a href="<?=url_to('/produtos')?>">Listar Todos</a></p>
           
        </div>
        <div>Url gerada 3:
            <p><?=url_to('/produtos',[2])?></p>
           <p> <a href="<?=url_to('/produtos',[2])?>">Ver Produto</a></p>
        </div>
        <div>Url gerada 4:
            <p><?=url_to('/produtos',['editar',2])?></p>
            <p><a href="<?=url_to('/produtos',['editar',2])?>">Editar</a></p>
        </div>
        </div>
        <div></div>
    </div>
    <script type="text/javascript">        
        document.addEventListener('DOMContentLoaded',()=>{
            const cpf = document.getElementById('cpf');
            const regex = /^\d+$/;
            cpf.addEventListener('focusout',(ev)=>{
                if(!regex.test(cpf.value)){
                   document.querySelector('#cadastrar').setAttribute("disabled",true)
                }else{
                    document.querySelector('#cadastrar').removeAttribute("disabled")
                    
                }              
            })    
        })
    </script>
    </body>
</html>