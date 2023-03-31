<?php include("../../template/header.php"); ?>
<?php
include("../../../config/db.php");
$result = mysqli_query($conection, "SELECT * FROM venta");
?>
<a href="add.php">Nuevo</a>
<a href="update.php">Editar</a>
<table class="table">
    <thead>
        <tr>
            <th>ID de la venta</th>
            <th>ID de usuario</th>
            <th>ID del cliente</th>
            <th>ID del producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['ID'] . "</td>";
            echo "<td>" . $res['IDUsuario'] . "</td>";
            echo "<td>" . $res['IDCliente'] . "</td>";
            echo "<td>" . $res['IDProducto'] . "</td>";
            echo "<td>" . $res['PrecioVenta'] . "</td>";
            echo "<td>" . $res['Cantidad'] . "</td>";
            echo "<td>" . $res['Total'] . "</td>";
            echo "<td>" . $res['Fecha'] . "</td>";
            echo "<td><a href=\"delete.php?id=$res[ID]\">Eliminar</a></td>";
        }
        ?>
    </tbody>
</table>
<?php include("../../template/footer.php"); ?>