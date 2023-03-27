<?php
include("../../../config/db.php");
$result = mysqli_query($conection, "SELECT * FROM producto");
?>

<?php include("../../template/header.php") ?>
<a href="add.php">Nuevo</a>
<a href="update.php">Editar</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Unidades</th>
            <th>Precio Unitario</th>
            <th>Imagen</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['ID'] . "</td>";
            echo "<td>" . $res['Nombre'] . "</td>";
            echo "<td>" . $res['Descripcion'] . "</td>";
            echo "<td>" . $res['Unidades'] . "</td>";
            echo "<td>" . $res['PrecioUnitario'] . "</td>";
            echo "<td>" . $res['Imagen'] . "</td>";
            echo "<td><a href=\"delete.php?id=$res[ID]\">Eliminar</a></td>";
        }
        ?>
    </tbody>
</table>
<?php include("../../template/footer.php") ?>