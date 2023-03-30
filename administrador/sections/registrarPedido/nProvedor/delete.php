<?php  
include("../../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM proveedor WHERE ID = '$ide'");

header("location:proveedor.php");
?>

