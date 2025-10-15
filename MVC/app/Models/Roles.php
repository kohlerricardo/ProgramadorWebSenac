<?php

namespace App\Models;


use App\Core\Model;
/**
* create table user_roles(
* id_user_roles int auto_increment primary key,
* role_description varchar(10) not null
* );
*/
class Roles extends Model{
    protected $db;
    protected $table = "user_roles";
    protected $id = "user_roles_id";

    public function __construct(){
        parent::__construct();
    }

}