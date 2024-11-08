<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4>Social Media List
                    <a href="social-media-create.php" class="btn btn-primary float-end">Social Media</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    
                    <tbody>

                        <?php

                        $socialMedia = getAll('social_media');
                        if($socialMedia){                  

                        if ($socialMedia->num_rows > 0) {
                            foreach ($socialMedia as $item) {
                        ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['name']; ?></td>
                                    <td><?= $item['url']; ?></td>
                                    <td><?= $item['status'] == 1 ? 'hidden':'shown'; ?></td>
                                    <td>
                                        <a href="edit-socialMedia.php?id=<?=$item['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete-socialMedia.php?id=<?= $item['id']; ?>" 
                                        onclick="return confirm('Are You Sure?')"
                                        class="btn btn-danger btn-sm mx-2">Delete</a>

                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>

                        <?php  } 
                             }
                             else
                             {
                                ?>
                                <tr>
                                    <td colspan="5">something wrong</td>
                                </tr>
    
                            <?php 

                             }                      
                          ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>