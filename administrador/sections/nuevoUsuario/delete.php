<?php  
include("../../../config/db.php");
$ide = $_GET['id'];

$result = mysqli_query($conection, "DELETE FROM usuario WHERE ID = '$ide'");

header("location:nUsuario.php");
?>