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

    }
    /**
     * @param string $role que deve ser consultado 
     * @return bool true se o usuário possui o role/papel pesquisado, false caso contrário.
     */
    public function hasRole(string $role):bool
    {

    }
    

}