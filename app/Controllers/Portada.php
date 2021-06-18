<?php

namespace App\Controllers;

class Portada extends BaseController
{
	public function index()
	{
        echo view('header');
		echo view('portada');
        echo view('G-Carousel');
        echo view('G-Center');
        echo view('G-Acordion');
        echo view('G-Grafico');
        echo view("G-Cards");
        echo view('footer');
        
	}

    public function listado()
    {
        echo view('header');
		echo view('portada');
        echo view('G-Carousel');
        echo view('G-Acordion');
        echo view('G-Grafico');
        echo view('footer');
    }

    public function registro()
    {
        echo view('header');
		echo view('portada');
        echo view('G-Carousel');
        echo view('G-Grafico');
        echo view('footer');
    }
    
    public function dashboard()
	{
		echo view('header');
		echo view('portada');
        echo view('G-Carousel');
        echo view('G-Grafico');
        echo view('footer');
	}
}
