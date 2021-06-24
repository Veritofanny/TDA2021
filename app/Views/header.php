<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code4</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
    <!--<link rel="stylesheet" href="<?php echo base_url('assets/css/signin.css') ?>">-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebars.css') ?>">  
</head>

<body>
    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-1 shadow-sm">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?php echo base_url(); ?>"><i class="fas fa-laptop-code"></i> CODE 4</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Salir</a>
            </li>
        </ul>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="flex-shrink-0 p-3">
                    <ul class="list-unstyled ps-0">

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#estudiante-collapse" aria-expanded="true">
                                Estudiante
                            </button>
                            <div class="collapse show" id="estudiante-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="<?php echo base_url('public/Estudiante/formulario'); ?>" class="link-dark rounded">Formulario</a></li>
                                    <li><a href="<?php echo base_url('public/Estudiante/lista'); ?>" class="link-dark rounded">Lista</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                Docente
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="<?php echo base_url('public/Portada/docente_Perfil'); ?>" class="link-dark rounded">Perfil</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Configuraciones'); ?>" class="link-dark rounded">Configuraciones</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_General'); ?>" class="link-dark rounded">General</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Apuntes'); ?>" class="link-dark rounded">Apuntes</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Formulario'); ?>" class="link-dark rounded">Formulario</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Tablas'); ?>" class="link-dark rounded">Tablas</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Modals'); ?>" class="link-dark rounded">Modals</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Tipografia'); ?>" class="link-dark rounded">Tipografia</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Iconos'); ?>" class="link-dark rounded">Iconos</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Graficos'); ?>" class="link-dark rounded">Graficos</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/docente_Mapas'); ?>" class="link-dark rounded">Mapas</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--Productos-->

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                productos
                            </button>
                            <div class="collapse show" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="<?php echo base_url('public/Portada/productos_form'); ?>" class="link-dark rounded">Formulario</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/productos_tabla'); ?>" class="link-dark rounded">Tabla</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#celulares-collapse" aria-expanded="true">
                                celulares
                            </button>
                            <div class="collapse" id="celulares-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="<?php echo base_url('public/Portada/celulares_Inicio'); ?>" class="link-dark rounded">INICIO</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/celulares_Formulario'); ?>" class="link-dark rounded">FORMULARIO</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/celulares_Tablas'); ?>" class="link-dark rounded">TABLAS</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#cliente-collapse" aria-expanded="false">
                                Clientes
                            </button>
                            <div class="collapse" id="cliente-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="<?php echo base_url('public/Portada/formularioCliente'); ?>" class="link-dark rounded">Formulario</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/listadoCliente'); ?>" class="link-dark rounded">Lista</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#computadoras-collapse" aria-expanded="false">
                                Computadoras
                            </button>
                            <div class="collapse" id="computadoras-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="<?php echo base_url('public/Portada/formcomp'); ?>" class="link-dark rounded">Formulario</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/listcomp'); ?>" class="link-dark rounded">Lista</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="<?php echo base_url('public/Portada/registrarse'); ?>" class="link-dark rounded">Registrarse</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


