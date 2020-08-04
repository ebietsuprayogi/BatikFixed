<?php 
include('../controller/connection.php');
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM anak_anak WHERE kode_brg='$id'") or die(mysql_error());

header("location:../kelolacatalog.php");
?>