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
    <script src="<?php echo base_url('assets/bootstrap5/js/bootstrap.min.js') ?>"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Carousel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php
                     $router = service('router');
                     $method = $router->methodName();
                ?>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $method=='index'?'active':''; ?>" aria-current="page" href="<?php echo base_url('public/Portada/index'); ?>"><i class="fas fa-home"></i> Portada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $method=='listado'?'active':''; ?>" href="<?php echo base_url('public/Portada/listado'); ?>"><i class="fas fa-list-ul"></i> Listado</a>
                        </li>
                        <li class="nav-item text">
                            <a class="nav-link <?php echo $method=='registro'?'active':''; ?>" href="<?php echo base_url('public/Portada/registro'); ?>"><i class="far fa-clipboard"></i> Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
