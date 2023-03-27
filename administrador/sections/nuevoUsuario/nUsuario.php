<?php
include("../../template/header.php");
include("../../../config/db.php");
$result = mysqli_query($conection, "SELECT * FROM usuario");
?>
<a href="add.php">Nuevo</a>
<a href="update.php">Editar</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Perfil</th>
        </tr>
    </thead>
    <tbody>
<?php

            while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $res['ID'] . "</td>";
                echo "<td>" . $res['Nombre'] . "</td>";
                echo "<td>" . $res['Correo'] . "</td>";
                echo "<td>" . $res['Contraseña'] . "</td>";
                echo "<td>" . $res['Perfil'] . "</td>";
                echo "<td><a href=\"delete.php?id=$res[ID]\">Eliminar</a></td>";
            }
            ?>
    </tbody>
    </table>
    <?php include("../../template/footer.php"); ?>