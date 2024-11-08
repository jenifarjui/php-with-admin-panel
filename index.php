<?php
$pageTitle = 'Home';
include_once('include/header.php'); ?>


<div class="py-5 bg-secondary">
    <div class="container">
        <?= alertMessage(); ?>
        <h4 class="text-white text-center"> HOME </h4>
    </div>
</div>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/download (1).jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/download.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/images (1).jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center py-3">
            <h4 class="footer-content"><?= webSetting('title') ?? ''; ?></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum suscipit eos pariatur fugiat laudantium, optio quo commodi praesentium obcaecati, cupiditate quos ea natus, rerum nemo dicta neque saepe blanditiis! Dolor maiores a autem commodi at magni nemo expedita maxime?</p>
            <br>
            <p>
                <?= webSetting('small_description') ?? ''; ?>
            </p>
        </div>

    </div>
</div>


<div class="py-5 bg-light">
<div class="container">
    <div class="row">
        <h4 class="text-center py-5">Our Services</h4>
    <?php

$sql = "SELECT * FROM service";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    foreach ($result as $data) {
?>

  <div class="col-md-4 mb-3">
    <div class="card shadow-sm">

    <?php if ($data['image'] != ''):  ?>
             
      <img src="admin/assets/uploads/services/<?= $data['image']; ?>" class="card-img-top w-50 rounded" alt="Service Image">

    <?php else :  ?>
      
      <img src="admin/assets/uploads/services/linkdin-1-01.png" class="card-img-top w-50 rounded" alt="Service Image">

    <?php endif; ?> 

      <div class="card-body">
        <h5 class="card-title"><?= $data['name']; ?></h5>
        <p class="card-text mb-1"><?= $data['small_description']; ?></p>
        <div>
          <a href="slug-service.php?slug=<?= $data['slug']; ?>" class="text-primary">Read More</a>
        </div>
      </div>
    </div>
  </div> 

<?php 
    }
} else {
    
    echo "No services found";
}

?>
    </div>
</div>
</div>




<br>
<br><br><br><br><br>

<?php include_once('include/footer.php'); ?>