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
    

    public function productos_form(){
        echo view('header');
        echo view('productos/formulario');
        echo view('footer');
    }
    public function celulares_Inicio(){
        echo view('header');
        echo view('celulares_Inicio');
        echo view('footer');
    }
    public function celulares_Formulario(){
        echo view('header');
        echo view('celulares_Formulario');
        echo view('footer');
    }
    public function celulares_Tablas(){
        echo view('header');
        echo view('celulares_Tablas');
        echo view('footer');
    }
    public function Lista_Ropa()
	{
		echo view('header');
		echo view('Lista_Ropa');
        echo view('footer');
	}
    public function Registrar_ropa()
	{
		echo view('header');
		echo view('Registrar_ropa');
        echo view('footer');
	}
    public function tablamuebles(){
        echo view('header');
        echo view('tablamuebles');
        echo view('footer');
    }
    public function formulariomuebles(){
        echo view('header');
        echo view('formulariomuebles');
        echo view('footer');
    }
}
