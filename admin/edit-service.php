<?php include_once('includes/header.php') ?>
<?php  if(isset ($_GET['id'])){

 

?>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4> Edit Service
                    <a href="service.php" class="btn btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>
                <?php 
                $id=$_GET['id'];
                $sql="SELECT * FROM service WHERE id=$id";
                $result=$conn->query($sql);

                if($result->num_rows>0){ 

                foreach($result as $data){
                
                ?>

                <form action="code.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="serviceId" value="<?= $data['id']; ?>" />

                    <div class="mb-3">
                        <label for="Title">Service Name </label>
                        <input type="text" name="name" value="<?= $data['name']; ?> " class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="Description">Small Description</label>
                        <input type="text" name="small_description" value="<?=$data['small_description'] ?>" class="form-control">
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="long_Description">Long Description</label>

                        <textarea  name="long_description" rows='5' class="form-control my_summernote"><?=$data['long_description'] ?>  </textarea>
                    </div>
                    

                    <div class="mb-3">
                        <label for="image">Upload Service Image</label>
                        <input type="file" name="image" class="form-control">
                        <input type="hidden" value=" <?=$data['image'] ?>" name="old_image" class="form-control">
                    </div>
                    <h5>SEO tag</h5>

                    <div class="mb-3">
                        <label for="meta_keyword">Meta keyword</label>
                        <textarea  name="meta_keyword" rows='3' class="form-control my_summernote"><?=$data['meta_keyword'] ?> </textarea>
                    </div>

                   
                    <div class="mb-3">
                        <label for="status">Status (checked=hidden,un-checked=visible)</label>
                        <br>
                        <input type="checkbox" name="status" style="width: 30px;height:30px;">
                    </div>
                    
                    
                    <div class="mb-3">
                        <button name="updateService" type="submit" class="btn btn-primary">Save Service</button>
                    </div>

                </form>

            </div>

            <?php   } 
             }else{

                redirect('service.php','cant found data');
            } ?>

        </div>
    </div>
</div>
<?php }else{
   echo 'Id not found';
}

?>

<?php include_once('includes/footer.php') ?>