<?php include("../../template/header.php") ?>
<div>
    <div class="card">
        <div class="card-header">
            Datos del Producto
        </div>
        <div class="card-body">
            <form action="edit.php" method="POST">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="ID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Nombre del Producto</label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre del Producto">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" name="Descripcion" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label>Unidades</label>
                    <input type="text" class="form-control" name="Unidades" placeholder="Unidades">
                </div>
                <div class="form-group">
                    <label>Precio Unitario</label>
                    <input type="text" class="form-control" name="PrecioUnitario" placeholder="Precio Unitario">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input type="text" class="form-control" name="Imagen" placeholder="Imagen">
                </div>
                <br>
                <input type="submit" name="Submit" value="Agregar">

                <a href="producto.php">Regresar</a>
            </form>
        </div>
    </div>
</div>
<?php include("../../template/footer.php") ?>