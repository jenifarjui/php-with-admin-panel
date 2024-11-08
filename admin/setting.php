<?php
include_once('includes/header.php');
?>
<div class="row">
    <div class="col-md-12">
    <?=  alertMessage(); ?>

        <div class="card">
            <div class="card-header">
                <h4>Webside Setting</h4>
            </div>
            <div class="card-body p-3">
                <form action="code.php" method="post">
                <?php  $setting=getByID('setting',1); ?>

                    <input type="hidden" name="settingId" value=" <?=$setting['data']['id'] ?? 'insert'?>"/>

                <div class="mb-3">
                    <label for="Title">Title</label>
                    <input type="text" name="title"  value=" <?=$setting['data']['title'] ?? ''?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="URL/Domain">URL/Domain</label>
                    <input type="text" name="slug"  value=" <?=$setting['data']['slug'] ?? ''?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Description">Small Description</label>
                    <input type="text" name="small_description"  value=" <?=$setting['data']['small_description'] ?? ''?>" class="form-control">
                </div>
                <h4 class="my-3"
                >SEO setting</h4>
                <div class="mb-3">
                    <label for="meta_Description">Meta Description</label>
                   
                    <textarea name="meta_description"  rows='3' class="form-control" ><?=$setting['data']['meta_description'] ?? ''?> </textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keyword">Meta keyword</label>
                   <textarea name="meta_keyword"  rows='3' class="form-control" ><?=$setting['data']['meta_keyword'] ?? ''?> </textarea>
                </div>
                <h4 class="my-3">Contact Informetion</h4>
                <div class="mb-3">
                    <label for="Email1">Email 1</label>
                    <input type="email" name="email1"  value=" <?=$setting['data']['email1'] ?? ''?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Email2">Email 2</label>
                    <input type="email" name="email2"  value=" <?=$setting['data']['email2'] ?? ''?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="phone">Phone 1</label>
                    <input type="phone" name="phone1"  value=" <?=$setting['data']['phone1'] ?? ''?>" class="form-control">
                </div> 
                <div class="mb-3">
                    <label for="phone2">Phone 2</label>
                    <input type="phone" name="phone2"  value=" <?=$setting['data']['phone2'] ?? ''?>" class="form-control">
                </div> 
                <div class="mb-3">
                    <label for="Address">Address</label>
                    <textarea name="address" class="form-control" rows='3'><?=$setting['data']['address'] ?? ''?></textarea>
                </div> 
                <div class="mb-3">
                    <button type="submit" name="saveSetting" class="btn btn-primary">Save Setting</button>
                </div> 
                </form>              
            </div>
        </div>

    </div>
</div>
<?php include_once('includes/footer.php') ?>