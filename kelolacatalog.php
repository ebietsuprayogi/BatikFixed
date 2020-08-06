<?php
    include('controller/connection.php');
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<title>Kelola Catalog Page - Batik Mantap</title>
<head>
<?php
include('layouts/admincss.php');
?>
<link href="assets/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
  <body>
    <div class="wrapper">
      <div class="side-menu">
        <div class="logo">
          BATIK MANTAP
        </div>

        <div class="menu">
          <ul>
            <li><a href="dashboard.php"><i class="fa fa-server" aria-hidden="true"></i><span class="text"> Dashboard </span></a>
            <li><a href="kelolacatalog.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="text"> Kelola Catalog</span></a></li>
            <li><a href="controller/logout.php"><i class="fa fa-arrows-alt" aria-hidden="true"></i><span class="text"> Logout</span></a></li>
          </ul>
        </div>
      </div>

      <div class="main-content">
        <div class="topmenu">
          <!-- atas -->
        </div>

        <div class="main-section">
          <div class="section-title">Kelola Catalog Anak-Anak</div>
          <div class="table">
          <a class="btn btn-primary" href="tablecrud/tambahanak.php">Add New Catalog</a>
          <table class="table table-bordered dataTable" id="tableUser" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 30px;">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Code</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Name</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Size</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Picture</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $query = mysqli_query($conn,"SELECT * FROM anak_anak");
            if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr role="row" class="odd">
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["kode_brg"];?></td>
                    <td><?php echo $data["nama_brg"];?></td>
                    <td><?php echo $data["ukuran"];?></td>
                    <td><?php echo $data["harga"];?></td>
                    <td><img src="upload/<?php echo $data["nama_gambar"];?>" width="100"></td>
                    <td>
                        <a class="btn btn-warning" href="tablecrud/ubahanak.php?id=<?php echo $data['kode_brg']; ?>">Update</a>
                        <a class="btn btn-danger" href="tablecrud/hapusanak.php?id=<?php echo $data['kode_brg']; ?>">Delete</a>
                    </td>
                </tr>
                <?php $no++; } ?>
            <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
        <!-- pembatas -->

        <div class="main-section">
          <div class="section-title">Kelola Catalog Pria</div>
          <div class="table">
          <a class="btn btn-primary" href="tablecrud/tambahpria.php">Add New Catalog</a>
          <table class="table table-bordered dataTable" id="tableUser" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 30px;">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Code</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Name</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Size</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Picture</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $query = mysqli_query($conn,"SELECT * FROM pria");
            if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr role="row" class="odd">
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["kode_brg"];?></td>
                    <td><?php echo $data["nama_brg"];?></td>
                    <td><?php echo $data["ukuran"];?></td>
                    <td><?php echo $data["harga"];?></td>
                    <td><img src="upload/<?php echo $data["nama_gambar"];?>" width="100"></td>
                    <td>
                        <a class="btn btn-warning" href="tablecrud/ubahpria.php?id=<?php echo $data['kode_brg']; ?>">Update</a>
                        <a class="btn btn-danger" href="tablecrud/hapuspria.php?id=<?php echo $data['kode_brg']; ?>">Delete</a>
                    </td>
                </tr>
                <?php $no++; } ?>
            <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
        <!-- pembatas -->

        <div class="main-section">
          <div class="section-title">Kelola Catalog Wanita</div>
          <div class="table">
          <a class="btn btn-primary" href="tablecrud/tambahwanita.php">Add New Catalog</a>
          <table class="table table-bordered dataTable" id="tableUser" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 30px;">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Code</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Name</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Size</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Product Picture</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $query = mysqli_query($conn,"SELECT * FROM wanita");
            if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr role="row" class="odd">
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["kode_brg"];?></td>
                    <td><?php echo $data["nama_brg"];?></td>
                    <td><?php echo $data["ukuran"];?></td>
                    <td><?php echo $data["harga"];?></td>
                    <td><img src="upload/<?php echo $data["nama_gambar"];?>" width="100"></td>
                    <td>
                        <a class="btn btn-warning" href="tablecrud/ubahwanita.php?id=<?php echo $data['kode_brg']; ?>">Update</a>
                        <a class="btn btn-danger" href="tablecrud/hapuswanita.php?id=<?php echo $data['kode_brg']; ?>">Delete</a>
                    </td>
                </tr>
                <?php $no++; } ?>
            <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
        <!-- pembatas -->
        
      </div>
    </div>

    <!-- JS -->

  </body>
</html>