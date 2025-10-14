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
    $data = array();
    //     if(count($arquivo['name'])<2){
    //     $this->view('layouts/header',["titulo"=>"Cadastro"]);
    //     $this->view('cliente/clientes',
    //     ['errors'=>"Numero de arquivos não satisfeito"]);
    //     $this->view('layouts/footer');
    //     exit();
    // }
 
    for($i=0;$i<count($arquivo['error']);$i++)
    {
        if($arquivo['error'][$i]!=UPLOAD_ERR_OK){
            $data["errors"][]= matchError($arquivo['name'][$i],$arquivo['error'][$i]);
            continue;
        }
        if($arquivo['type'][$i]!='application/pdf'){
            $data["errors"][] = "Somente arquivos PDF podem ser enviados";
            continue;
        }
        if($arquivo['size'][$i]>'60000'){
            $data["errors"][]="Arquivo ". $arquivo['name'][$i]. " maior que o limite de 60Kb";
            continue;
        }
        $newName = bin2hex(random_bytes(32));
        $ok = move_uploaded_file($arquivo['tmp_name'][$i],UPLOAD_PATH.$newName.'.pdf');
        if(!$ok){
            $data["errors"][]="Falha ao gravar o arquivo ". $arquivo['name'][$i]. " no destino final";
        }
        
    }
    //    die(var_dump($data));
        $this->view('layouts/header',["titulo"=>"Cadastro"]);
        $this->view('home/index',$data);
        $this->view('layouts/footer');
    }
    public function fetchAPI(){
        $recebido = $_POST['valor'];
        $enviado = 'O valor recebido é '.$recebido;
        echo $enviado;

    }   
   
} 