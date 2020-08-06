<?php 
include 'connection.php';

$temp = $_FILES['nama_gambar']['tmp_name'];
$nama_gambar = rand(0,9999).$_FILES['nama_gambar']['name'];
$size = $_FILES['nama_gambar']['size'];
$type = $_FILES['nama_gambar']['type'];
$kode_brg = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$folder = "../upload/";
if ($size < 500000000 and ($type =='image/jpeg' or $type == 'image/png')) {
    move_uploaded_file($temp, $folder . $nama_gambar);
    mysqli_query($conn, "insert into pria (kode_brg,nama_brg,ukuran,harga, nama_gambar) values ('$kode_brg','$nama_brg','$ukuran','$harga','$nama_gambar')");
    header('location:../kelolacatalog.php');
}else{
    echo "<b>Gagal Upload File</b>";
}

?>