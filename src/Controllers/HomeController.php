<?php

namespace App\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('index', ['title' => 'Página Inicial']);
    }

    public function movie()
    {
        $this->render('movie', ['title' => 'Movie']);
    }
}
