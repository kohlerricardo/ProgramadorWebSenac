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
    
   }
   
} 