<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    include('../controller/connection.php');
    $id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM anak_anak WHERE kode_brg='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
?>

<html lang="en">
<title>Update Catalog Page - Batik Mantap</title>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Update Catalog For Anak-Anak</h4>
                        <br>
                        <form method="post" action="../controller/ubahanak.php" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Code</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="kode_brg" value="<?php echo $data['kode_brg'] ?>">
                                    <label><?php echo $data['kode_brg'] ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="nama_brg" type="text" value="<?php echo $data['nama_brg'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Size</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="ukuran" type="text" value="<?php echo $data['ukuran'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="harga" type="number" value="<?php echo $data['harga'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Picture</label>
                                <div class="col-sm-10">
                                    <img src="../upload/<?php echo $data['nama_gambar']; ?>" width="150">
                                    <input class="form-control" name="nama_gambar" type="file" value="../upload<?php echo $data['nama_gambar'] ?>">
                                </div>
                            </div>
                            <div class="text-center m-t-15">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>
                                <a href="../kelolacatalog.php" class="btn btn-primary waves-effect waves-light">Back to Catalog</a>
                            </div>
                        </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script><body>

</body>