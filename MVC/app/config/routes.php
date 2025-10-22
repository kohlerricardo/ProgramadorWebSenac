<?php

// Este arquivo define todas as rotas da aplicação.
// O roteador irá carregá-lo para saber o que fazer.

// Rota para a página inicial
$router->get('/', 'HomeController@index');
$router->get('/example','HomeController@example');

// Rotas de Produtos
$router->get('/produtos', 'ProdutosController@index');
$router->get('/produtos/cadastrar','ProdutosController@cadastrar');//Exibe view de cadastro
$router->post('/produtos/salvar','ProdutosController@salvar');//Efetivamente salva os dados
$router->get('/produtos/editar/{id}','ProdutosController@editar');
$router->get('/produtos/excluir/{id}','ProdutosController@excluir');
//rota da api
$router->post('/produtos/buscar','ProdutosController@buscar');

//Rota para cadastro de usuario
$router->get('/usuario/cadastrar','UsuarioController@index');
$router->post('/usuario/create','UsuarioController@create');




$router->post('/cliente/create','ClienteController@create');

// // Rotas de Autenticação
// // A mesma URI pode ter ações diferentes para GET e POST
$router->get('/auth', 'AuthController@index');        // Mostra o formulário de login
$router->post('/auth/login', 'AuthController@login');   // Processa os dados do formulário
$router->get('/auth/logout', 'AuthController@logout');  // Efetua o logout



// $router->post('/fetchAPI','ClienteController@fetchAPI');




// // Rota do Dashboard (protegida dentro do controller)
// $router->get('/dashboard', 'DashboardController@index');