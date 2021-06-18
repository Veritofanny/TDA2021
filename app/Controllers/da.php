<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Da extends BaseController
{
	public function index()
	{
		echo view('index').view('Vistaindex');
	}
	public function tablero()
	{
		echo view('index').view('Vistatablero');
	}
	public function estadisticas()
	{
		echo view('index').view('Vistaestadisticas');
	}
	public function perfil()
	{
		echo view('index').view('Vistaperfil');
	}
	public function configuraciones()
	{
		echo view('index').view('Vistaconfiguraciones');
	}
	public function galeria()
	{
		echo view('index').view('Vistagaleria');
	}
	
}


	//--------------------------------------------------------------------

