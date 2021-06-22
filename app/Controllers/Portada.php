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

    
    public function formularioCliente(){
        echo view('header');
        echo view('formularioCliente');
        echo view('footer');
    }

    public function listadoCliente(){
        echo view('header');
        echo view('listadoCliente');
        echo view('footer');
    }

    public function docente_Perfil(){
        echo view('header');
        echo view('docente_Perfil');
        echo view('footer');
    }

    public function docente_Configuraciones(){
        echo view('header');
        echo view('docente_Configuraciones');
        echo view('footer');
    }

    public function docente_General(){
        echo view('header');
        echo view('docente_General');
        echo view('footer');
    }

    public function docente_Apuntes(){
        echo view('header');
        echo view('docente_Apuntes');
        echo view('footer');
    }

    public function docente_Formulario(){
        echo view('header');
        echo view('docente_Formulario');
        echo view('footer');
    }

    public function docente_Tablas(){
        echo view('header');
        echo view('docente_Tablas');
        echo view('footer');
    }

    public function docente_Modals(){
        echo view('header');
        echo view('docente_Modals');
        echo view('footer');
    }

    public function docente_Tipografia(){
        echo view('header');
        echo view('docente_Tipografia');
        echo view('footer');
    }

    public function docente_Iconos(){
        echo view('header');
        echo view('docente_Iconos');
        echo view('footer');
    }

    public function docente_Graficos(){
        echo view('header');
        echo view('docente_Graficos');
        echo view('footer');
    }

    public function docente_Mapas(){
        echo view('header');
        echo view('docente_Mapas');
        echo view('footer');
    }


    public function productos_form(){
        echo view('header');
        echo view('productos/formulario');
        echo view('footer');
    }
}
