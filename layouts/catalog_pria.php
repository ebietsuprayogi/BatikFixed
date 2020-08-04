<?php
include('controller/connection.php');

$query = "SELECT * FROM pria";
?>
<section class="site-section">
      <div class="container">
      <h3 class="text-center">Batik Pria</h3><br>
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
                <p>Product Name : <?php echo $namabrg; ?> <br>Ukuran : <?php echo $ukuran; ?> <br>Harga : <?php echo $harga; ?></p>
                <a href="https://api.whatsapp.com/send?phone=082258746417&text=Halo%20Kak,%20saya%20mau%20membeli%20batik%20dari%20Batik%20Mantap." target="_blank" class="btn btn-primary btn-sm">Buy</a>
              </div>
            </div>
                </div>
            <?php }
            } 
            ?> 
          </div>
    </div>
</section>
