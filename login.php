<?php include("template/header.php"); ?>

<section>
    <div class="contMain">
        <h1>Paint Information</h1>
        <form method="POST">
            <div class="card cardLogin contUser">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-body  ">
                    <div class="form-group">
                        <label for="exampleInputEmail">Usuario</label>
                        <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp"
                            placeholder="Ingresa el usuario">
                        <small class="form-text text-muted">Ingresa el usuario con el te registraste</small>
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail">Contraseña</label>
                        <input type="password" class="form-control" name="contrasenia" aria-describedby="emailHelp"
                            placeholder="Ingresa tu Contraseña">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"> Ingresar </button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php include("template/footer.php"); ?>