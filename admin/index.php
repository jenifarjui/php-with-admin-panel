<?php
include_once('includes/header.php');
?>
<div class="row">
  <div class="col-md-12">
    <?= alertMessage(); ?>

  </div>

  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
              <h5 class="font-weight-bolder mb-0">
                <?= getCount('user'); ?>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Services</p>
              <h5 class="font-weight-bolder mb-0">
                <?= getCount('service'); ?>
              </h5>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Social Media</p>
              <h5 class="font-weight-bolder mb-0">
                <?= getCount('social_media'); ?>
              </h5>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total enquires</p>
              <h5 class="font-weight-bolder mb-0">
                <?= getCount('enquires'); ?>
              </h5>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Today enquires</p>
              <h5 class="font-weight-bolder mb-0">
                <?php
                $todayDate =date('d-m-y');
                $sql ="SELECT * FROM enquires WHERE date=$todayDate";
                $result =$conn->query($sql);
                $totalCount=mysqli_num_rows($result);
                return $totalCount; 
                ?>
              </h5>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>

  

<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>


  <?php include_once('includes/footer.php') ?>