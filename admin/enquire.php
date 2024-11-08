
<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4>Enquires List
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>                           
                            <th>Service</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    
                    <tbody> 
                        <?php
                        $sql="SELECT * FROM enquires ";
                        $result=$conn->query($sql);
                        if($result->num_rows> 0){
                            foreach($result as $data){
                                
?>
                              <tr>
                                    <td><?= $data ['id'];  ?></td>
                                    <td><?= $data ['name'];  ?></td>
                                    <td><?= $data ['email'];  ?></td>
                                    <td><?= $data ['phone'];  ?></td>                                  
                                    <td><?= $data ['service'];  ?></td>                                                                       
                                    <td>
                                        <a href="view-enquires.php?id=<?= $data ['id'];?>" class="btn btn-success btn-sm">View</a>
                                        <a href="delete-enquires.php?id=<?= $data ['id'];?>" 
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