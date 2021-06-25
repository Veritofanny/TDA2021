<?php

namespace App\Controllers;

class Docente extends BaseController
{
    public function perfil(){
        echo view('header');
        echo view('docente/perfil');
        echo view('footer');
    }

    public function configuraciones(){
        echo view('header');
        echo view('docente/configuraciones');
        echo view('footer');
    }

    public function general(){
        echo view('header');
        echo view('docente/general');
        echo view('footer');
    }

    public function apuntes(){
        echo view('header');
        echo view('docente/apuntes');
        echo view('footer');
    }

    public function formulario(){
        echo view('header');
        echo view('docente/formulario');
        echo view('footer');
    }

    public function tablas(){
        echo view('header');
        echo view('docente/tablas');
        echo view('footer');
    }

    public function modals(){
        echo view('header');
        echo view('docente/modals');
        echo view('footer');
    }

    public function tipografia(){
        echo view('header');
        echo view('docente/tipografia');
        echo view('footer');
    }

    public function iconos(){
        echo view('header');
        echo view('docente/iconos');
        echo view('footer');
    }

    public function graficos(){
        echo view('header');
        echo view('docente/graficos');
        echo view('footer');
    }

    public function mapas(){
        echo view('header');
        echo view('docente/mapas');
        echo view('footer');
    }

    public function datatable(){
        echo view('header');
        echo view('docente/datatable');
        echo view('footer');
    }
}