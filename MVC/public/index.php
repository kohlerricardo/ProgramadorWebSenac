<?php

session_start();

define('ROOT', dirname(__DIR__));

spl_autoload_register(function ($className) {
    $file = ROOT . '/' . str_replace('\\', '/', lcfirst($className)) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// 1. Instancia o roteador
$router = new App\Core\Router();

// 2. Carrega o arquivo de definições de rotas
// O arquivo routes.php terá acesso à variável $router
require_once ROOT . '/app/config/routes.php';

// 3. Despacha a requisição com base na URI e no método HTTP
// O novo dispatch não precisa mais de argumentos
$router->dispatch();