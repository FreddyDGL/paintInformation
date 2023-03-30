<?php
include_once("../../../../config/db.php");
if(isset($_POST['Submit'])){
$ide = $_POST['ID'];
$nom = $_POST['Nombre'];
$tel = $_POST['Telefono'];
$email = $_POST['Correo'];



if (empty($ide)|| empty($nom)|| empty($email)|| empty($tel)){
	if(empty($ide)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
	if(empty($nom)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($email)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($tel)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}

	echo "<br/><a href='proveedor.php'>Atras</a>";
}else{

}
	$result = mysqli_query($conection,"INSERT INTO proveedor(ID, Nombre, Correo, Telefono)VALUES('$ide', '$nom','$email', '$tel')");

	header("location:proveedor.php");
	}
?>
