<?php

namespace App\Controllers;

class Cliente extends BaseController
{
	public function formulario(){
        echo view('header');
        echo view('cliente/formulario');
        echo view('footer');
    }

    public function listado(){
        echo view('header');
        echo view('cliente/listado');
        echo view('footer');
    }
}
