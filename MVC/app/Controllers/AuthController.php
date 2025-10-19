<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuario;
use App\Core\Auth;
class AuthController extends Controller{

    public function auth(){
        $email='ricardo@email.com';
        $password = sha1('123456');
        $usuario = (new Usuario())->attempt(['username'=>$email,'password'=>$password]);
        if(isset($usuario)){
            Auth::login($usuario);
           echo "usuário Logado $usuario->nome"; 
           var_dump(Auth::user());
           Auth::logout();
        }
    }
}