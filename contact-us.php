<?php include_once('include/header.php') ?>

<div class="py-5 bg-secondary">
    <div class="container">
        <h4 class="text-white text-center"> Contact Information </h4>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= alertMessage(); ?>
                <h4>Contact Form</h4>
                <div class="card card-body">
<form action="sendmail.php " method="POST">
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
   <input type="text" name="service" class="form-control" requaired>
</div>
<div class="mb-3">
   <label for="comment">Message/Comment</label>
   <textarea name="message" class="form-control"   rows="3"></textarea>
</div>
<div class="mb-3">
   <button type="submit" name="contactSubmit" class="btn btn-primary w-100">Submit</button>
</div>
</form>
           </div>
         </div>
            <div class="col-md-6 text-center">

                <h4 class="footer-content">Contact Information</h4>
                <br>
                <p>Address:
                    <?= webSetting('address') ?? ''; ?> </p>

                <p>Email:
                    <?= webSetting('email1') ?? ''; ?> <?= webSetting('email2') ?? ''; ?> </p>

                <p>Phone:
                    <?= webSetting('phone1') ?? ''; ?> <?= webSetting('phone2') ?? ''; ?> </p>



            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<?php include_once('include/footer.php') ?>