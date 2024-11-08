
<div class="sticky-top bg-primary text-white py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        Email:<?= webSetting('email1') ?? ''; ?>
        Mobile:<?= webSetting('phone1') ?? ''; ?>
      </div>
      <div class="col-md-6">
        Social Media:
      </div>
    </div>
  </div>
</div>




<nav class="navbar navbar-expand-lg bg-white shadow sticky-top">

  <div class="container">

    <a class="navbar-brand" href="#">LOGO</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Service</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
        
      </ul>
   
    </div>
  </div>
</nav>