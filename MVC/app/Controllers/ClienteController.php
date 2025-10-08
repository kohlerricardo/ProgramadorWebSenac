<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Cliente;
class ClienteController extends Controller{

   public function index(){
    $clientes = [
        ['nome'=>'Cliente 1','idade'=>25,'telefone'=>'12345678'],
        ['nome'=>'Cliente 2','idade'=>22,'telefone'=>'12345679'],
        ['nome'=>'Cliente 3','idade'=>45,'telefone'=>'12345680'],
    ];
    $data = ['clientes'=> $clientes,
            'title'=>'Clientes'
            ];
    $this->view('layouts/header',["titulo"=>"Cadastro"]);
    $this->view('cliente/clientes',$data);
    $this->view('layouts/footer');
   }
   public function create(){
    $arquivo = $_FILES['curriculum'];

    if($arquivo['error'][0]!=UPLOAD_ERR_OK){
        // die("Upload Errado");
        $this->view('layouts/header',["titulo"=>"Cadastro"]);
        $this->view('cliente/clientes',
        ['errors'=>matchError($arquivo['name'][0],$arquivo['error'][0])]);
        $this->view('layouts/footer');
        exit();
    }
    if(count($arquivo['name'])<2){
        $this->view('layouts/header',["titulo"=>"Cadastro"]);
        $this->view('cliente/clientes',
        ['errors'=>"Numero de arquivos não satisfeito"]);
        $this->view('layouts/footer');
        exit();
    }
    if($arquivo['type'][0]!='application/pdf'){
        $this->view('layouts/header',["titulo"=>"Cadastro"]);
        $this->view('cliente/clientes',
        ['errors'=>"Somente arquivos PDF podem ser enviados"]);
        $this->view('layouts/footer');
        exit();
    }
    if($arquivo['size'][0]>'60000'){
        $this->view('layouts/header',["titulo"=>"Cadastro"]);
        $this->view('cliente/clientes',
        ['errors'=>"Somente arquivos menores que 60Kb podem ser enviados"]);
        $this->view('layouts/footer');
        exit();
    }
    $newName = sha1_file($arquivo['tmp_name'][0]);
    // $ok = move_uploaded_file($arquivo['tmp_name'][0],BASE_PATH.'/public/uploads/'.$newName);
    $ok = move_uploaded_file($arquivo['tmp_name'][0],UPLOAD_PATH.$newName.'.pdf');
    if($ok){
        echo "Upado";
        $this->redirect(url_to(''));
    }
        $this->view('layouts/header',["titulo"=>"Cadastro"]);
        $this->view('cliente/clientes',
        ['errors'=>"Falha ao gravar o arquivo no destino final"]);
        $this->view('layouts/footer');
}

   
} 