<?php
include('controller/connection.php');

$query = "SELECT * FROM anak_anak";
?>
<section class="site-section">
    <div class="container">
    <h3 class="text-center">Batik Anak-Anak</h3><br>
      <div class="row">
          <?php
          if ($result = $conn->query($query)) {
              while ($row = $result->fetch_assoc()) {
                  $kodebrg = $row["kode_brg"];
                  $namabrg = $row["nama_brg"];
                  $ukuran = $row["ukuran"];
                  $harga = $row["harga"];
                  $nama_gambar = $row["nama_gambar"];
                  ?>
            <div class="col-md-4 mb-4 text-center">
              <div class="media d-block room mb-0">
                <figure>
                  <img src="upload/<?php echo $nama_gambar; ?>" class="img-fluid">
                </figure>
                <div class="media-body">
                  <h3 class="mt-0">Product Code : <?php echo $kodebrg; ?></h3>
                  <p>Product Name : <?php echo $namabrg; ?> <br>Size : <?php echo $ukuran; ?> <br>Price : <?php echo $harga; ?> IDR</p>
                  <a href="#" target="_blank" class="btn btn-primary btn-sm">Buy</a>
                </div>
              </div>
            </div>
            <?php }
            } 
            ?> 
      </div>
    </div>
</section>
