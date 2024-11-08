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

                <form action="code.php" method="post">

                    <div class="mb-3">
                        <label for="Name">Social Media Name</label>
                        <input type="text" name="name" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Password">URL/link</label>
                        <input type="text" name="url" class="form-control" requaired>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Status</label>
                        <input type="checkbox" name="status" style="width: 30px; height:30px;" requaired>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="saveMedia" class="btn btn-primary w-100">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>