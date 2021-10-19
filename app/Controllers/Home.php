<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        return view('libros/listar');
    }
    public function crear()
    {
        return view('libros/crear');
    }
    public function editar()
    {   
        return view('libros/editar');
    }
}
