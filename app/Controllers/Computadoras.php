<?php

namespace App\Controllers;

class Computadoras extends BaseController
{
    public function formulario()
	{
		echo view('header');
		echo view("computadoras/formulario");
		echo view('footer');
	}
    public function lista()
	{
		echo view('header');
		echo view("computadoras/lista");
		echo view('footer');
	}
}