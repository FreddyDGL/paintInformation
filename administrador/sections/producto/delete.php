<?php  
include("../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM producto WHERE ID = '$ide'");

header("location:producto.php");
?>