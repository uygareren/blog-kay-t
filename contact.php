<!doctype html>
<html lang="en">
<?php
include("partials/header.php");
?>
<body>

  <!-- NAVBAR -->
  <?php
  include("partials/navbar.php");
  ?>

  
<!-- CONTACT -->
<section class="contact py-5" id="contact">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-5 mr-lg-5 col-12">
        <div class="google-map w-100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.690832042512!2d27.13610007562208!3d38.425509174410045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd8f0b90e0edd%3A0xc34756ff447fbb48!2zREFUQUhBTiBCxLBMxLDFnsSwTSBTQU4uIFZFIFTEsEMuIExURC4gxZ5UxLA!5e0!3m2!1str!2str!4v1690291617515!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>

        <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
            <div class="contact-info-item">
              <h3 class="mb-3 text-white">Datahan Bilişim</h3>
              <p class="footer-text mb-0">010 020 0960</p>
              <p><a href="mailto:hello@company.co">hello@company.co</a></p>
            </div>

            <ul class="social-links">
                  <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="" data-original-title="Dribbble"></a></li>
                  <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="" data-original-title="Instagram"></a></li>
                  <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="" data-original-title="Youtube"></a></li>
            </ul>
        </div>
      </div>

      <div class="col-lg-6 col-12">
        <div class="contact-form">
          <h2 class="mb-4">Interested to work together? Let's talk</h2>

          <form action="admin/code.php" method="POST">
            <div class="row">
              <div class="col-lg-6 col-12">
                <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
              </div>

              <div class="col-lg-6 col-12">
                <input type="email" class="form-control" name="email" placeholder="Email" id="email">
              </div>

              <div class="col-12">
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
              </div>

              <div class="ml-lg-auto col-lg-5 col-12">
                <input type="submit" class="form-control submit-btn" name="add_contact_btn" value="Send Button">
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- FOOTER -->
  <?php
  include("partials/footer.php");
  ?>

    

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/Headroom.js"></script>
  <script src="js/jQuery.headroom.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>


</body>
</html>