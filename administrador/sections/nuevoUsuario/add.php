<?php include("../../template/header.php"); ?>
<div>
    <div class="card">
        <div class="card-header">
            Datos del Nuevo Empleado
        </div>
        <div class="card-body">
            <form action="insert.php" method="POST">
                <div class="form-group">
                <label>ID del Nuevo Empleado</label>
                    <input type="text" class="form-control" name="ID" placeholder="ID del Nuevo Empleado">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="Correo" placeholder="Correo">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="text" class="form-control" name="Contraseña" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <label>Perfil</label>
                    <input type="text" class="form-control" name="Perfil" placeholder="Perfil">
                </div>
                <br>
                <input type="submit" name="Submit" value="Agregar">

                <a href="nUsuario.php">Regresar</a>
            </form>
        </div>
    </div>
</div>

<?php include("../../template/footer.php"); ?>