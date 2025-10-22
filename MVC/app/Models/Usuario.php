<?php

namespace App\Models;

use App\Core\Auth;
use App\Core\Database;
use App\Core\Model;

class Usuario extends Model
{
    protected $db;
    protected $table = 'usuario';
    protected $id = 'id_usuario';
    private $groups;
    private $roles;
    
    public function __construct(){
        parent::__construct();
    }
    /**
     * @param string $grupo que deve ser consultado 
     * @return bool true se o usuário pertence ao grupo, false caso contrário.
     */
    public function inGroup(string $grupo):bool
    {
        return false;
    }
    /**
     * @param string $role que deve ser consultado 
     * @return bool true se o usuário possui o role/papel pesquisado, false caso contrário.
     */
    public function hasRole(string $role):bool
    {
        return false;
    }
    /**
     * Busca usuario por campo 
     * @param array $parametro -  array associativo contendo nome do campo a ser pesquisado e o valor
     * @return registro encontrado ou null
    */
    public function findBy(array $parametros)
    {
        $key = array_key_first($parametros);
        $sql = "SELECT * FROM USUARIO WHERE ".$key."= :$key";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($parametros);
        return $stmt->fetch();
    }
    /**
     * Realiza o procedimento de login.
     * @param array $credentials - credenciais para login
     * @return objeto|null representando o usuario.
     */
    public function attempt(array $credentials){
        if(!isset($credentials['email'])){
            return null;
        }
        $email=$credentials['email'];
        unset($credentials['email']);
        $usuario = $this->findBy(['email'=>$email]); 
        if(!isset($usuario)){
            return null;
        }
        if(password_verify($credentials['senha'],$usuario->senha)){
            return $usuario;
        }
        return null;

    }

}