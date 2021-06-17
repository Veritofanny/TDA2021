<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signin.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap5/js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">La Tienda</h4>
            </div>
            <div class="menu">
                <a href="<?php echo base_url('public/da/index')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Index</a>

                <a href="<?php echo base_url('public/da/tablero')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Tablero</a>

                <a href="<?php echo base_url('public/da/estadisticas')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                    Estadísticas</a>
                <a href="<?php echo base_url('public/da/perfil')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>
                    Perfil</a>
                <a href="<?php echo base_url('public/da/configuraciones')?>" class="d-block text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    Configuración</a>
                    <a href="<?php echo base_url('public/da/galeria')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-images lead mr-2"></i>
                    galeria</a>
            </div>
        </div>
        <div class="w-100">
         <nav class="navbar navbar-expand-lg border-bottom navegador">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline position-relative d-inline-block my-2">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
                </form>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Usuario Nuevo
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Mi perfil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
