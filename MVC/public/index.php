<?php

session_start();

define('ROOT', dirname(__DIR__));


require_once ROOT . '/vendor/autoload.php';
// Carrega constantes definidas para uso 
require_once ROOT . '/app/config/defines.php';

// // Carrega as variáveis de ambiente do arquivo .env
// $dotenv = Dotenv\Dotenv::createImmutable(ROOT);
// $dotenv->load();

//tratador de erros para exibir erros que ocorrem
App\Core\ErrorHandler::register();
// 1. Instancia o roteador
$router = new App\Core\Router();

// 2. Carrega o arquivo de definições de rotas
// O arquivo routes.php terá acesso à variável $router
require_once ROOT . '/app/config/routes.php';

// 3. Despacha a requisição com base na URI e no método HTTP
// O novo dispatch não precisa mais de argumentos
$router->dispatch();