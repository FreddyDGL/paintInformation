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
                            <a class="nav-link" href="<?php echo $url ?>/administrador/sections/nVenta/venta.php">Registrar
                                Venta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/producto/producto.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url ?>/administrador/sections/gastos/gastos.php">Registrar
                                Gastos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/estadoCuenta/estadoCuenta.php">Consultar Estado
                                Actual
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo $url ?>/administrador/sections/registrarPedido/pedido.php">Registrar
                                pedido
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
                            <a class="nav-link" href="#">Cerrar Sesión</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Datos del Proveedor
                </div>
                <div class="card-body">
                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <label>ID del proveedor</label>
                            <input type="text" class="form-control" name="ID" placeholder="ID">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Nombre del proveedor</label>
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>E-mail del proveedor</label>
                            <input type="text" class="form-control" name="Correo" placeholder="E-Mail">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telefono del proveedor</label>
                            <input type="text" class="form-control" name="Telefono" placeholder="Telefono">
                        </div>
                        <br>
                        <input type="submit" name="Submit" value="Agregar">

                        <a href="proveedor.php">Regresar</a>
                        </from>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>