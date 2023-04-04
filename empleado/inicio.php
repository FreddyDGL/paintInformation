<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/icono.ico">
    <title>Document</title>
</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/PI" //recuperacion de url ?>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div class="row justify-content-end">

                <a class="navbar-brand" href="<?php echo $url ?>/empleado/inicio.php">
                    <img src="../img/logo.png" alt="Logo" width="55" height="34" class="d-inline-block align-text-top">
                    Paint Information
                </a>
            </div>

            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">OPCIONES</button>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">OPCIONES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?php echo $url ?>/empleado/inicio.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url ?>/empleado/sections/venta/venta.php">Registrar
                                Venta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/empleado/sections/productos/productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url ?>/index.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <img class="fondo" src="../img/logo.png" alt="">
    <div class="container">
        <div class="row">
            <?php include("template/footer.php"); ?>