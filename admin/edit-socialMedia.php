<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4> Edit Social Media 
                    <a href="social-media-create.php" class="btn btn-primary float-end">Social Media</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="post">

                <?php
           $paramResult= checkParamId ('id');
           if(!is_numeric ($paramResult)){
            echo '<h5>'.$paramResult.'</h5>';
            return false;
           }


           $socialMedia=getByID('social_media',checkParamId('id'));
           if($socialMedia){

           
           if($socialMedia['status']==200){
            ?>

                 <input type="hidden" name="socialMediaId" value="<?= $socialMedia['data']['id'];  ?>" class="form-control" requaired>
                    <div class="mb-3">
                        <label for="Name">Social Media Name</label>
                        <input type="text" name="name" value="<?= $socialMedia['data']['name'];  ?>" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Password">URL/link</label>
                        <input type="text" name="url" value="<?= $socialMedia['data']['url'];  ?>" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Status</label>
                        <input type="checkbox" name="status" <?= $socialMedia['data']['status']==1 ? 'checked' :'' ?> 
                        style="width: 30px; height:30px;" requaired />
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="updateSocialMedia" class="btn btn-primary w-100">Update</button>
                    </div>


            <?php

           }else{
            echo "<h5>$socialMedia.['message']. </h5>";

           }
           }else{
            echo "<h5>Something wrong </h5>";
           }

            ?>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>