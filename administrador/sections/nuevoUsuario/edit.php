<?php
include_once("../../../config/db.php");
if (isset($_POST['Submit'])) {
    $ide = $_POST['ID'];
    $nom = $_POST['Nombre'];
    $email = $_POST['Correo'];
    $contra = $_POST['Contraseña'];
    $prl = $_POST['Perfil'];



    if (empty($ide) || empty($nom) || empty($email) || empty($contra) || empty($prl)) {
        if (empty($ide)) {
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if (empty($nom)) {
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if (empty($email)) {
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if (empty($contra)) {
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if (empty($prl)) {
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }

        echo "<br/><a href='nUsuario.php'>Atras</a>";
    } else {

    }
    $result = mysqli_query($conection, "UPDATE usuario SET ID = '$ide', Nombre = '$nom', Correo = '$email', Contraseña = '$contra', Perfil = '$prl' WHERE ID = '$ide'");

    header("location:nUsuario.php");
}
?>