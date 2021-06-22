<?php

namespace App\Controllers;

class Portada extends BaseController
{
	public function index()
	{
        echo view('header');
		echo view('portada');
        echo view('G-Center');
        echo view('asd');
        echo view('G-Acordion');
        echo view('G-Grafico');
        echo view("G-Cards");
        echo view('cards-graficos');
        echo view('footer');
        
	}

    public function elias_formulario()
    {
        echo view('header');
        echo view('elias_formulario');
        echo view('footer');
    }

    public function elias_lista()
    {
        echo view('header');
        echo view('elias_lista');
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
    public function Usuarios_ClintonArias()
	{
		echo view('header');
		echo view('Usuarios_clintonarias');
        echo view('footer');
	}
    public function grafico_ClintonArias()
	{
		echo view('header');
		echo view('grafico_clintonarias');
        echo view('footer');
	}

    public function registrarse()
	{
		echo view('header');
		echo view("registrarse");
		echo view('footer');
	}
}
