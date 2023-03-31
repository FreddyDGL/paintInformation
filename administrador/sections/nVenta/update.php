<?php include("../../template/header.php"); ?>

<div>
    <div class="card">
        <div class="card-header">
            Actualización de Datos de la Venta
        </div>
        <div class="card-body">
            <form action="edit.php" method="POST">
                <div class="form-group">
                    <label>ID de la venta</label>
                    <input type="text" class="form-control" name="ID" placeholder="ID de la venta">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del usuario</label>
                    <input type="text" class="form-control" name="IDUsuario" placeholder="ID del usuario">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del cliente</label>
                    <input type="text" class="form-control" name="IDCliente" placeholder="ID del cliente">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del producto</label>
                    <input type="text" class="form-control" name="IDProducto" placeholder="ID del producto">
                </div>
                <br>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" class="form-control" name="PrecioVenta" placeholder="Precio">
                </div>
                <br>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="Cantidad" placeholder="Cantidad">
                </div>
                <br>
                <div class="form-group">
                    <label>Total</label>
                    <input type="text" class="form-control" name="Total" placeholder="Total">
                </div>
                <br>
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="Fecha" placeholder="Fecha">
                </div>
                <br>
                <input type="submit" name="Submit" value="Actualizar">
                <a href="venta.php">Regresar</a>
            </form>
        </div>
    </div>
</div>
<?php include("../../template/footer.php"); ?>