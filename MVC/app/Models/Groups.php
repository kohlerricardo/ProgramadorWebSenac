<?php

namespace App\Models;


use App\Core\Model;
/**
* create table user_groups(
* id_user_groups int auto_increment primary key,
* group_description varchar(10) not null
* )
*/
class Groups extends Model{
    protected $db;
    protected $table = "user_groups";
    protected $id = "user_groups_id";

    public function __construct(){
        parent::__construct();
    }

}