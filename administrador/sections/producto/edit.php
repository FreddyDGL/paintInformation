<?php
include_once("../../../config/db.php");
if(isset($_POST['Submit'])){
    $ide = $_POST['ID'];
    $nom = $_POST['Nombre'];
    $des = $_POST['Descripcion'];
    $uni = $_POST['Unidades'];
    $pu = $_POST['PrecioUnitario'];
    $img = $_POST['Imagen'];
    
    
    
    if (empty($ide)|| empty($nom)|| empty($des)|| empty($uni)|| empty($pu)|| empty($img)){
        if(empty($ide)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($nom)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($des)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($uni)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($pu)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
        if(empty($img)){
            echo "<font color='red'>El campo esta vacio.</font><br/>";
        }
    
        echo "<br/><a href='producto.php'>Atras</a>";
    }else{

}
	$result = mysqli_query($conection, "UPDATE producto SET ID = '$ide', Nombre = '$nom', Descripcion = '$des', Unidades = '$uni', PrecioUnitario = '$pu', Imagen = '$img' WHERE ID = '$ide'");

	header("location:producto.php");
	}
?>