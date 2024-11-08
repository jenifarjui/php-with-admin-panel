<?php
$pageTitle = "Login";
include_once('includes/header.php') ?>

<div class="row justify-content-center">
    <h2 class="py-4 bg-secondary text-center">LOGIN</h2>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-header pb-0">
                <h4 class="md-0 ">Login </h4>              
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <form action="login-code.php" method="post">

                    <div class="mb-3">
                        <label for="Email">Email address</label>
                        <input type="email" name="email" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="loginBtn" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include_once('includes/footer.php') ?>