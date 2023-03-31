<?php
include_once("../../../config/db.php");
if(isset($_POST['Submit'])){
    $ide = $_POST['ID'];
    $idu = $_POST['IDUsuario'];
    $idc = $_POST['IDCliente'];
    $idp = $_POST['IDProducto'];
    $can = $_POST['Cantidad'];
    $pv = $_POST['PrecioVenta'];
    $tot = $_POST['Total'];
    $fec = $_POST['Fecha'];
    
    
    
    if (empty($ide)|| empty($idu)|| empty($idc)|| empty($idp)|| empty($can)|| empty($pv)|| empty($tot)|| empty($fec)){
        if(empty($ide)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($idu)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($idc)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($idp)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($pv)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($can)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($tot)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($fec)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
    
        echo "<br/><a href='venta.php'>Atras</a>";
    }else{
}
	$result = mysqli_query($conection, "UPDATE venta SET ID = '$ide', IDUsuario = '$idu', IDCliente = '$idc', IDProducto = '$idp',  PrecioVenta = '$pv', Cantidad = '$can', Total = '$tot', Fecha = '$fec' WHERE ID = '$ide'");

	header("location:venta.php");
	}
?>