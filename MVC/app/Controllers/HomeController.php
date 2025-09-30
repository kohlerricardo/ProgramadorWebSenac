<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Helper;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Página Inicial',
            'content' => 'Bem-vindo ao SimpleMVC! Este é um micro-framework para fins de estudo.'
        ];
        $this->view('layouts/header',['titulo'=>'Home']);
        $this->view('home/index', $data);
        $this->view('layouts/footer');
    }
    public function example()
    {
        $this->view('home/example',['url'=>Helper::class]);
    }
}