<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function formulario(){
        echo view('header');
        echo view('productos/formulario');
        echo view('footer');
    }

    public function tabla()
    {
        echo view('header');
        echo view('productos/tabla');
        echo view('footer');
    }
}
