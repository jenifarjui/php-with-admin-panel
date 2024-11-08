<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Lists
                    <a href="create-user.php" class="btn btn-primary float-end">Add User</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>role</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $user = getAll('user');
                        if ($user->num_rows > 0) {
                            foreach ($user as $userItem) {
                        ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['phone']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td>
                                        <a href="edit-user.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete-user.php?id=<?= $userItem['id']; ?>" 
                                        onclick="return confirm('Are You Sure?')"
                                        class="btn btn-danger btn-sm mx-2">Delete</a>

                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>

                        <?php  }  ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>