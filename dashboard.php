<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<html lang="en">
<title>Dashboard Page - Batik Mantap</title>
<?php
include('layouts/admincss.php');
?>
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
            </li>
          </ul>
        </div>
      </div>

      <div class="main-content">
        <div class="topmenu">
          <!-- atas -->
        </div>
        <div class="main-section">
          <div class="section-title">Welcome to Admin Dashboard Batik Mantap</div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
include('layouts/adminjs.php');
?>