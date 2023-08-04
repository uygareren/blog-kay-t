<?php
include_once("functions/userFunctions.php");

$blogs = getAllData('addblog');

?>

<div class="row"> 
    <?php foreach ($blogs as $blog) {
        $description = substr($blog['description'], 0, 75);
    ?>
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo 'uploads/'.$blog['image'] ?>" class="card-img-top" alt="..." style="object-fit: scale-down;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $blog['title'] ?></h5>
                    <p class="card-text"><?php echo $description ?></p>
                    <form action="admin/code.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $blog['id'] ?>">
                        <a href="blog-detail.php?id=<?php echo $blog['id'] ?>" class="button-28" role="button">Details</a>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
