<?php include_once('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4>Service
                    <a href="service.php" class="btn btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="serviceId" value=" <?= $service['data']['id'] ?? 'insert' ?>" />

                    <div class="mb-3">
                        <label for="Title">Service Name </label>
                        <input type="text" name="name" value=" <?=$service['data']['title'] ?? '' ?>" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="Description">Small Description</label>
                        <input type="text" name="small_description" value=" <?=$service['data']['small_description'] ?? '' ?>" class="form-control">
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="long_Description">Long Description</label>

                        <textarea name="long_description" rows='3' class="form-control"><?=$service['data']['long_description'] ?? '' ?> </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="Description">Upload Service Image</label>
                        <input type="file" name="image" value=" <?=$service ?>" class="form-control">
                    </div>
                    <h5>SEO tag</h5>

                    <div class="mb-3">
                        <label for="meta_keyword">Meta keyword</label>
                        <textarea name="meta_keyword" rows='3' class="form-control"><?=$service['data']['meta_keyword'] ?? '' ?> </textarea>
                    </div>

                   
                    <div class="mb-3">
                        <label for="status">Status (checked=hidden,un-checked=visible)</label>
                        <br>
                        <input type="checkbox" name="status" style="width: 30px;height:30px;">
                    </div>
                    
                    
                    <div class="mb-3">
                        <button name="saveService" type="submit" class="btn btn-primary">Save Service</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<br>
<br><br><br><br><br>
<?php include_once('includes/footer.php') ?>