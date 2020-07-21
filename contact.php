<!doctype html>
<html lang="en">
<title>Contact Page - Batik Mantap</title>
  <?php
  include('layouts/css.php');
  ?>
  <body>
    <?php
    include('layouts/header.php');
    ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/anak.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Contact Batik Mantap</h1>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Contact Form</h2>
          <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Google Maps</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3488950496358!2d110.42839571381667!3d-6.968103294965967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f356e83c82c5%3A0x5cdd62c90a5bc020!2sAston%20Semarang%20Hotel%20and%20Convention%20Center!5e0!3m2!1sen!2sid!4v1578512928688!5m2!1sen!2sid" width="450" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <?php
    include('layouts/footer.php');
    ?>
    <?php
    include('layouts/js.php');
    ?>
  </body>
</html>