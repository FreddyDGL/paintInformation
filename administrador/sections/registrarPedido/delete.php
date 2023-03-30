<?php  
include("../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM pedidos WHERE ID = '$ide'");

header("location:pedido.php");
?>