<?php 

include 'connection.php';
$temp = $_FILES['nama_gambar']['tmp_name'];
$nama_gambar = rand(0,9999).$_FILES['nama_gambar']['name'];
$size = $_FILES['nama_gambar']['size'];
$type = $_FILES['nama_gambar']['type'];
$id = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$folder = "../upload/";
if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
    move_uploaded_file($temp, $folder . $nama_gambar);
    mysqli_query($conn,"UPDATE anak_anak SET nama_brg='$nama_brg', ukuran='$ukuran', harga='$harga', nama_gambar='$nama_gambar' WHERE kode_brg='$id'");
    header("location:../kelolacatalog.php");
}
?>