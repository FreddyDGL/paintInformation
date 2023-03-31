<?php  
include("../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM gastos WHERE ID = '$ide'");

header("location:gastos.php");
?>