<?php include("../../template/header.php"); ?>
<div>
    <div class="card">
        <div class="card-header">
            Gastos
        </div>
        <div class="card-body">
            <form action="edit.php" method="POST">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="ID" placeholder="ID">
                </div>
                <br>
                <div class="form-group">
                    <label>ID del pedido</label>
                    <input type="text" class="form-control" name="IDPedido" placeholder="ID del pedido">
                </div>
                <br>
                <div class="form-group">
                    <label>Criterio</label>
                    <input type="text" class="form-control" name="Criterio" placeholder="Criterio">
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
                <a href="gastos.php">Regresar</a>
                </from>
        </div>
    </div>
</div>
<?php include("../../template/footer.php"); ?>