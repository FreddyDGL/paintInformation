<?php
include_once("../../../config/db.php");
if(isset($_POST['Submit'])){
$ide = $_POST['ID'];
$idu = $_POST['IDUsuario'];
$idp = $_POST['IDProducto'];
$idpr = $_POST['IDProveedor'];
$can = $_POST['Cantidad'];
$pre = $_POST['Precio'];
$tot = $_POST['Total'];



if (empty($ide)|| empty($idu)|| empty($idp)|| empty($idpr)|| empty($can)|| empty($pre)|| empty($tot)){
	if(empty($ide)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
	if(empty($idu)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($idp)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($idpr)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($can)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($pre)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}
    if(empty($tot)){
		echo "<font color='red'>El campo esta vacio.</font><br/>";
	}

	echo "<br/><a href='pedido.php'>Atras</a>";
}else{

}
	$result = mysqli_query($conection,"INSERT INTO pedidos(ID, IDUsuario, IDProducto, IDProveedor, Cantidad, Precio, Total)VALUES('$ide', '$idu', '$idp', '$idpr', '$can', '$pre', '$tot')");

	header("location:pedido.php");
	}
?>