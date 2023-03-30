<?php include("../../template/header.php"); ?>
<?php
include("../../../config/db.php");
$result = mysqli_query($conection, "SELECT * FROM pedidos");
?>
<a href="add.php">Nuevo</a>
<a href="update.php">Editar</a>
<a href="nProvedor/proveedor.php">Nuevo Proveedor</a>
<table class="table">
    <thead>
        <tr>
            <th>ID del pedido</th>
            <th>ID de usuario</th>
            <th>ID del producto</th>
            <th>ID del proveedor</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['ID'] . "</td>";
            echo "<td>" . $res['IDUsuario'] . "</td>";
            echo "<td>" . $res['IDProducto'] . "</td>";
            echo "<td>" . $res['IDProveedor'] . "</td>";
            echo "<td>" . $res['Cantidad'] . "</td>";
            echo "<td>" . $res['Precio'] . "</td>";
            echo "<td>" . $res['Total'] . "</td>";
            echo "<td><a href=\"delete.php?id=$res[ID]\">Eliminar</a></td>";
        }
        ?>
    </tbody>
</table>
<?php include("../../template/footer.php"); ?>