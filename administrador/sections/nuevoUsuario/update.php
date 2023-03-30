<?php include("../../template/header.php"); ?>
<div>
    <div class="card">
        <div class="card-header">
            Actualización de Datos de Empleado
        </div>
    </div>
    <div class="card-body">
        <form action="edit.php" method="POST">
            <div class="form-group">
                <label>ID del Empleado</label>
                <input type="text" class="form-control" name="ID" placeholder="ID">
            </div>
            <br>
            <div class="form-group">
                <label>Nombre del Empleado</label>
                <input type="text" class="form-control" name="Nombre" placeholder="Nombre del Empleado">
            </div>
            <br>
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" name="Correo" placeholder="E-mail">
            </div>
            <br>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="text" class="form-control" name="Contraseña" placeholder="Contraseña">
            </div>
            <br>
            <div class="form-group">
                <label>Perfil</label>
                <input type="text" class="form-control" name="Perfil" placeholder="Perfil">
            </div>
            <br>
            <input type="submit" name="Submit" value="Actualizar">

            <a href="nUsuario.php">Regresar</a>
        </form>
    </div>
</div>
<!--holi-->
<?php include("../../template/footer.php"); ?>