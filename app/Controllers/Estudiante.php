<?php

namespace App\Controllers;

class Estudiante extends BaseController
{
    public function formulario()
    {
        echo view('header');
        echo view('estudiante/formulario');
        echo view('footer');
    }

    public function lista()
    {
        echo view('header');
        echo view('estudiante/lista');
        echo view('footer');
    }
}
