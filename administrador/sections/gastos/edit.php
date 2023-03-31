<?php
include_once("../../../config/db.php");
if(isset($_POST['Submit'])){
    $ide = $_POST['ID'];
    $idp = $_POST['IDPedido'];
    $cri = $_POST['Criterio'];
    $tot = $_POST['Total'];
    $fec = $_POST['Fecha'];
    
    if (empty($ide)|| empty($idp)|| empty($cri)|| empty($tot)|| empty($fec)){
        if(empty($ide)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($idp)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($cri)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($tot)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($fec)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
    
        echo "<br/><a href='gastos.php'>Atras</a>";
    }else{

}
	$result = mysqli_query($conection, "UPDATE gastos SET ID = '$ide', IDPedido = '$idp', Criterio = '$cri', Total = '$tot', Fecha = '$fec' WHERE ID = '$ide'");

	header("location:gastos.php");
	}
?>