<!doctype php>
<php lang="en">

<?php
include("partials/header.php");
?>

<body>

  <!-- NAVBAR -->
  <?php
  include("partials/navbar.php");
  ?>




  <!-- PROJECTS -->
  <section class="project py-5" id="project">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 text-center mx-auto col-12">
        <div class="owl-carousel owl-theme">
          <?php
          include_once("functions/userFunctions.php");

          $sliders = getAllData('slider');
          foreach($sliders as $slider){
          ?>
          <div class="item">
            <div class="project-info">
              <img src="<?php echo 'uploads/'.$slider['image']; ?>" class="img-fluid" alt="<?php echo $slider['alt_attribute']; ?>" style="object-fit: scale-down;">
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  </section>



  <!-- CARD -->
  <div class="container">
  <div class="row">
    <div class="card-deck">

      <?php
      include('partials/card.php');
      ?>

    </div>
  </div>
  </div>





<?php
include("partials/footer.php");
?>

<body>
    

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
</php>