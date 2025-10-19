<?php

namespace App\Models;

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
    
    public function findByEmail($email)
    {
        $sql = "SELECT * FROM {$this->table} where email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email'=>$email]);
        return $stmt->fetch(); 
    }
    public function attempt(array $credentials){
    
        if(isset($credentials['username'])){
            $username = $credentials['username'];
            unset($credentials['username']);
        }
        if(isset($credentials['password'])){
            $password = $credentials['password'];
            unset($credentials['password']);
        }  
        $user = $this->findByEmail($username);
        if(isset($user)){
            return ($user->senha === $password)?$user:null;
        }

    }

}