
<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4>Service
                    <a href="create-services.php" class="btn btn-primary float-end">Add Services</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>small_description</th>
                            <th>image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    
                    <tbody> 
                        <?php
                        $sql="SELECT * FROM service ";
                        $result=$conn->query($sql);
                        if($result->num_rows> 0){
                            foreach($result as $data){
                                
?>
                         <tr>
                                    <td><?= $data ['id'];  ?></td>
                                    <td><?= $data ['name'];  ?></td>
                                    <td><?= $data ['small_description'];  ?></td>
                                    <td><img style="width: 50px;height:50px;" src="assets/uploads/services/<?= $data['image']; ?>" alt=""></td>
                                  
                                    
                                    <td>
                                        <a href="edit-service.php?id=<?= $data ['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete-service.php?id=<?= $data ['id'];?>" 
                                        onclick="return confirm('Are You Sure?')"
                                        class="btn btn-danger btn-sm mx-2">Delete</a>

                                    </td>
                                </tr>
                                                 

                    <?php    }
                } else {
                    echo "data not found";

                }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br>
<br><br><br><br><br>


<?php include_once('includes/footer.php') ?>