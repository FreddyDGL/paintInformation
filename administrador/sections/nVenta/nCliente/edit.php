<?php
include_once("../../../../config/db.php");
if(isset($_POST['Submit'])){
$ide = $_POST['ID'];
$nom = $_POST['Nombre'];
$tel = $_POST['Telefono'];
$email = $_POST['Correo'];



if (empty($ide)|| empty($nom)|| empty($tel)|| empty($email)){
	if(empty($ide)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
	if(empty($nom)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($tel)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($email)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}

	echo "<br/><a href='cliente.php'>Atras</a>";
}else{

}
	$result = mysqli_query($conection, "UPDATE cliente SET ID = '$ide', Nombre = '$nom', Telefono = '$tel', Correo = '$email' WHERE ID = '$ide'");

	header("location:cliente.php");
	}
?>