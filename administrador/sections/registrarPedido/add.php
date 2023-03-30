<?php include("../../template/header.php"); ?>

<div>
    <div class="card">
        <div class="card-header">
            Pedido
        </div>
        <div class="card-body">
            <form action="insert.php" method="POST">
                <div class="form-group">
                    <label>ID del pedido</label>
                    <input type="text" class="form-control" name="ID" placeholder="ID">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del usuario</label>
                    <input type="text" class="form-control" name="IDUsuario" placeholder="ID del usuario">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del producto</label>
                    <input type="text" class="form-control" name="IDProducto" placeholder="ID del producto">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del proveedor</label>
                    <input type="text" class="form-control" name="IDProveedor" placeholder="ID del proveedor">
                </div>
                <br>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="Cantidad" placeholder="Cantidad">
                </div>
                <br>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" class="form-control" name="Precio" placeholder="Precio">
                </div>
                <br>
                <div class="form-group">
                    <label>Total</label>
                    <input type="text" class="form-control" name="Total" placeholder="Total">
                </div>
                <br>
                <input type="submit" name="Submit" value="Agregar">

                <a href="pedido.php">Regresar</a>
            </form>
        </div>
    </div>
</div>
<?php include("../../template/footer.php"); ?>