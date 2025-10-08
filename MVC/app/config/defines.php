<?php

define('VIEW_FOLDER','app/Views'.DIRECTORY_SEPARATOR);
define('MODEL_FOLDER','app/Models'.DIRECTORY_SEPARATOR);
define('CONTROLLER_FOLDER','app/Controllers'.DIRECTORY_SEPARATOR);
# Define o caminho base da aplicação conforme a necessidade
# Se a pasta da aplicação for /empregos, o basepath passa a ser define('BASE_PATH','/empregos');
define('BASE_PATH','/ProgramadorWebSenac/MVC');
define('UPLOAD_PATH','C:\xampp\htdocs\ProgramadorWebSenac\MVC\public\uploads'.DIRECTORY_SEPARATOR);

// defines para o banco de dados
define('HOST','127.0.0.1');
define('DB_NAME','projeto');
define('USERNAME','root');//não é interessante que se use o root
define('PASSWORD','');
$_ENV['APP_ENV']='development';


