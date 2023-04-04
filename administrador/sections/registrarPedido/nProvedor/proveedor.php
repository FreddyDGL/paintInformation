<?php
include("../../../../config/db.php");
$result = mysqli_query($conection, "SELECT * FROM proveedor");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../css/style.css">
    <link rel="icon" href="../../../../img/icono.ico">
    <title>Paint Information</title>
</head>

<body>
    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/PI" //recuperacion de url ?>


    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div class="row justify-content-end">

                <a class="navbar-brand" href="<?php echo $url ?>/administrador/inicio.php">
                    <img src="../../../../img/logo.png" src="" alt="Logo" width="55" height="34"
                        class="d-inline-block align-text-top">
                    Paint Information
                </a>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Opciones
                Administrador</button>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Opciones Administrador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?php echo $url ?>/administrador/inicio.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/nuevoUsuario/nUsuario.php">Registrar
                                Usuario
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/nVenta/venta.php">Registrar
                                Venta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/producto/producto.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url ?>/administrador/sections/gastos/gastos.php">
                                Gastos
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/estadoCuenta/estadoCuenta.php">Consultar
                                Estado
                                Actual
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/registrarPedido/pedido.php">Registrar
                                Pedido
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Personalizar Sistema
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url ?>/index.php">Cerrar Sesión</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">

            <a href="add.php">Nuevo</a>
            <a href="update.php">Editar</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    while ($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $res['ID'] . "</td>";
                        echo "<td>" . $res['Nombre'] . "</td>";
                        echo "<td>" . $res['Correo'] . "</td>";
                        echo "<td>" . $res['Telefono'] . "</td>";
                        echo "<td><a href=\"delete.php?id=$res[ID]\">Eliminar</a></td>";
                    }
                    ?>
                </tbody>
            </table>
            <?php include("../../../template/footer.php"); ?>