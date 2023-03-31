<?php  
include("../../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM cliente WHERE ID = '$ide'");

header("location:cliente.php");
?>