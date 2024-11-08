<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit User
                    <a href="users.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>
            <div class="card-body">
            <?=  alertMessage(); ?>
            <form action="code.php" method="post">

            <?php
           $paramResult= checkParamId ('id');
           if(!is_numeric ($paramResult)){
            echo '<h5>'.$paramResult.'</h5>';
            return false;
           }


           $user=getByID('user',checkParamId('id'));
           if($user['status']==200)
           {

            ?>
            <div class="row">
                        <div class="col-md-6">
                        <input type="hidden" name="userId" value="<?= $user['data']['id']; ?>" required>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="<?= $user['data']['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Phone">Phone number</label>
                        <input type="text" name="phone" class="form-control" value="<?= $user['data']['phone']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $user['data']['email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" value="<?= $user['data']['password']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="role">Select role
                        </label>
                        <select name="role" id="role" class="form-select" required>
                            <option value="">Select role</option>
                            <option value="Admin"<?= $user['data']['role']=='admin' ?'selected':''; ?> >Admin</option>
                            <option value="User"<?= $user['data']['role']=='User' ?'selected':''; ?> >User</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" name="UpdateUser" class="btn btn-primary">Update</button>
                    </div>     
                        </div>
                    </div>

            <?php   
            
           

           }else{
            echo '<h5>'.$user['message'].'</h5>';
           }

              ?>
                    
                </form>

            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>