<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Página Inicial',
            'content' => 'Bem-vindo ao SimpleMVC! Este é um micro-framework para fins de estudo.'
        ];
        $this->view('layouts/header');
        $this->view('home/index', $data);
        $this->view('layouts/footer');
    }
}