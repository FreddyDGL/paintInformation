<?php  
include("../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM venta WHERE ID = '$ide'");

header("location:venta.php");
?>