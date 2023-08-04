<!DOCTYPE html>
<html lang="en">

<?php
include("partials/header.php");
?>

<body>
  <!-- Blog Detail Container -->
  <div class="blog-detail-container">
    <!-- Navbar -->
    <!-- NAVBAR -->
    <?php
    include("partials/navbar.php");
    ?>

    <!-- Blog Detail Content -->
    <section class="blog-content">
      <?php
      include_once("functions/userFunctions.php");
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $blog = getById('addblog', 'id', $id);

        $formatted_date = date("F d, Y", strtotime($blog['date']));


      ?>
      <div class="container">
        <!-- Blog Image -->
        <div class="blog-image">
        <img src="uploads/<?php echo $blog['image']; ?>" alt="Blog Image" style="object-fit: scale-down;">
        </div>
        <!-- Blog Description -->
        <div class="blog-description">
          <h2 class="blog-title"><?php echo $blog['title']; ?></h2>
          <p class="blog-meta">Posted on <?php echo $formatted_date; ?></p>
          <p class="blog-text">
          <?php echo $blog['description']; ?>
          </p>
        </div>
      </div>
      <?php
      }
      ?>
    </section>
  </div>

  <!-- FOOTER -->
  <?php
  include("partials/footer.php");
  ?>

  <!-- JavaScript -->
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
