<?php include("../../template/header.php") ?>
<div>
    <div class="card">
        <div class="card-header">
            Actualización de Datos del Producto
        </div>
        <div class="card-body">
            <form action="edit.php" method="POST">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="ID" placeholder="ID">
                </div>
                <br>
                <div class="form-group">
                    <label>Nombre del Producto</label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre del Producto">
                </div>
                <br>
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" name="Descripcion" placeholder="Descripción">
                </div>
                <br>
                <div class="form-group">
                    <label>Unidades</label>
                    <input type="text" class="form-control" name="Unidades" placeholder="Unidades">
                </div>
                <br>
                <div class="form-group">
                    <label>Precio Unitario</label>
                    <input type="text" class="form-control" name="PrecioUnitario" placeholder="Precio Unitario">
                </div>
                <br>
                <div class="form-group">
                    <label>Imagen</label>
                    <input type="text" class="form-control" name="Imagen" placeholder="Imagen">
                </div>
                <br>
                <input type="submit" name="Submit" value="Actualizar">

                <a href="producto.php">Regresar</a>
            </form>
        </div>
    </div>
</div>
<!--holi-->

<?php include("../../template/footer.php") ?>