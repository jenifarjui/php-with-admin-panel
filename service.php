
<?php include_once('include/header.php')?>


<div class="py-5 bg-secondary">
  <div class="container">
    <h2 class="text-center mb-4 text-white">Our Services</h2>
  </div>
</div>

<div class="py-5 bg-light">
  <div class="container">
    <div class="row">

    <?php

    $sql = "SELECT * FROM service";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        foreach ($result as $data) {
    ?>

      <div class="col-md-3 mb-3">
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


<?php include_once('include/footer.php')?>