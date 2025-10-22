<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuario;
use App\Core\Auth;
class AuthController extends Controller{

    public function index(){
        $this->view('layouts/header',["titulo"=>'Login']);
        $this->view('usuario/login');
        $this->view('layouts/footer');
    }
    public function login(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuarioModel = new Usuario();
        $usuario = $usuarioModel->attempt(["email"=>$email,"senha"=>$senha]);
        if(isset($usuario)){
             Auth::login($usuario);
             $this->redirect(url_to(''));
            }
            else{
                $this->redirect(url_to('auth'));
            }
    }   
    public function logout(){
        Auth::logout();
        $this->redirect(url_to(''));
    }
}