
<?php include_once('includes/header.php') ?>


<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4>Enquires List
                <a href="enquire.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <table class="table table-bordered table-striped">
                    
                    <tbody> 
                        <?php
                        $id=$_GET['id'];

                        $sql="SELECT * FROM enquires WHERE id='$id'";
                        $result=$conn->query($sql);
                        if($result->num_rows> 0){
                            foreach($result as $data){
                                
?>
                                <tr>
                                    <td>Enquire id</td>
                                    <td><?= $data ['id'];  ?></td>                                                                    
                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td><?= $data ['name'];  ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $data ['email'];  ?></td>
                                    
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><?= $data ['phone'];  ?></td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td><?= $data ['message'];  ?></td>
                                    
                                </tr>
                                <tr>
                                    <td>Service</td>
                                    <td><?= $data ['service'];  ?></td>                                  
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td><?= $data ['date'];  ?></td>
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