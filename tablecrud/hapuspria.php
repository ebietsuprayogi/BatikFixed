<?php 
include('../controller/connection.php');
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM pria WHERE kode_brg='$id'") or die(mysql_error());

header("location:../kelolacatalog.php");
?>