<!doctype html>
<html lang="en">
<title>Catalog Page - Batik Mantap</title>
  <?php
  include('layouts/css.php');
  ?>
  <body>
    <?php
    include('layouts/header.php');
    ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/couple.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">
            <div class="mb-5 element-animate">
              <h1>Catalog Batik Mantap</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <?php
    include('layouts/catalog_anak.php');
    ?>

    <?php
    include('layouts/catalog_pria.php');
    ?>

    <?php
    include('layouts/catalog_wanita.php');
    ?>

   

    <?php
    include('layouts/footer.php');
    ?>
    <?php
    include('layouts/js.php');
    ?>
  </body>
</html>