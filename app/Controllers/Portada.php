<?php

namespace App\Controllers;

class Portada extends BaseController
{
	public function index()
	{
        echo view('header');
		echo view('portada');
        echo view('footer');
	}

    public function listado()
    {
        echo view('header');
        echo view("listado");
        echo view('footer');
    }

    public function registro()
    {
        echo view('header');
        echo view('registro');
        echo view('footer');
    }
}
