<?php    include_once('includes/header.php') ?>
  
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="md-0 ">Add User
                    <a href="users.php" class="btn btn-danger float-end mb-0">back</a> </h4>
            </div>
            <div class="card-body">

            <?=  alertMessage(); ?>
                <form action="code.php" method="post">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Phone">Phone number</label>
                        <input type="text" name="phone" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Email">Email</label>
                        <input type="email" name="email" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label Select role>Select role
                       </label>
                        <select name="role" class="form-select">                        
                        <option value="">Select role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
                <div class="mb-3">
                        <label for="Select role"></label>
                        <br>
                        <input type="checkbox" name="is_ban" style="width:30px;height:30px">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="SaveUser" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<?php    include_once('includes/footer.php') ?>
  