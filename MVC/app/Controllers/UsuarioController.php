<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller{

    public function index(){
        $this->view('layouts/header',['titulo' => 'Cadastrar-se']);
        $this->view('usuario/cadastro');
        $this->view('layouts/footer');
    }
    public function create(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $csenha = $_POST['csenha'];

        if($senha != $csenha){
           $this->redirect(url_to('usuario/cadastrar'));
        }
        $usuario = new Usuario();
        $dados = [
            'nome'=>$nome,
            'email'=>$email,
            'senha'=>password_hash($senha,PASSWORD_DEFAULT)
        ];
        $usuario->create($dados);
        $this->redirect('/');
    }

}