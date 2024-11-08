
<?php include_once('include/header.php')?>
  <?php
if(isset($_GET['slug'])){
    if($_GET['slug']==null){
        redirect('service.php','');
    }
}else{
    redirect('service.php','');
}
    $slug=valied(trim($_GET['slug']));
    $sql = "SELECT * FROM service WHERE slug='$slug' LIMIT 1"; 
    $result = $conn->query($sql);

    if(!$result){
        redirect('service.php','');
    }

    if ($result->num_rows == 0) {
        redirect('service.php','');
    }
       $data=mysqli_fetch_assoc($result);
    ?>

<div class="py-5 bg-secondary">
  <div class="container">
    <h2 class="text-center mb-4 text-white"><?= $data['name']; ?></h2>
  </div>
</div>

<div class="py-5 bg-light">
  <div class="container">
    <div class="row">

  

      <div class="col-md-8 mb-3">
        <div class="card shadow-sm">

       

          <div class="card-body">
            <h5 class="card-title"><?= $data['name']; ?></h5>
            <p class="card-text mb-1"><?= $data['small_description']; ?></p>

            <div class="md-3">
            <?php if ($data['image'] != ''):  ?>
                 
                 <img src="admin/assets/uploads/services/<?= $data['image']; ?>" class="card-img-top w-100 rounded" alt="Service Image">
       
               <?php else :  ?>
                 
                 <img src="admin/assets/uploads/services/linkdin-1-01.png" class="card-img-top w-50 rounded" alt="Service Image">
       
               <?php endif; ?> 
               </div>
               <p class="card-text mb-1"><?= $data['long_description']; ?></p>
            
           
          </div>
        </div>
      </div> 




      <div class="col-md-4">
        <div class="card  sticky-top " style="top:150px;">
            <div class="card-header bg-warning">
                <h4 class="text-white  mb-0 ">Enquire Now </h4>              
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <form action="code.php " method="POST">

                     <div class="mb-3">
                        <label for="name">name</label>
                        <input type="text" name="name" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Email">Email</label>
                        <input type="email" name="email" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" requaired>
                    </div>
                   
                    <div class="mb-3">
                        <label for="service">Service</label>
                        <input type="text" name="service" readonly value="<?=$data['name']?>"  class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="comment">Message/Comment</label>
                        <textarea name="message" class="form-control"   rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="enquireBtn" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

    </div> 
  </div> 
</div>


<?php include_once('include/footer.php')?>