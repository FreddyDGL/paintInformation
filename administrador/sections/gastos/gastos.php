<?php include("../../template/header.php");
include("../../../config/db.php");
$result = mysqli_query($conection, "SELECT * FROM gastos");
?>
<a href="add.php">Nuevo</a>
<a href="update.php">Editar</a>

<h2>Gastos Actuales </h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID de pedido</th>
            <th>Criterio</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['ID'] . "</td>";
            echo "<td>" . $res['IDPedido'] . "</td>";
            echo "<td>" . $res['Criterio'] . "</td>";
            echo "<td>" . $res['Total'] . "</td>";
            echo "<td>" . $res['Fecha'] . "</td>";
            echo "<td><a href=\"delete.php?id=$res[ID]\">Eliminar</a></td>";
        }
        ?>
    </tboby>
</table>
<?php include("../../template/footer.php"); ?>