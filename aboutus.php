
<?php include_once('include/header.php')?>

<div class="py-5 bg-secondary">
    <div class="container">
        <?= alertMessage(); ?>
        <h4 class="text-white text-center"> ABOUT US </h4>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center py-2">
            <h4 class="footer-content"><?= webSetting('title') ?? ''; ?></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum suscipit eos pariatur fugiat laudantium, optio quo commodi praesentium obcaecati, cupiditate quos ea natus, rerum nemo dicta neque saepe blanditiis! Dolor maiores a autem commodi at magni nemo expedita maxime?</p>
            <br>
            <p>
                <?= webSetting('small_description') ?? ''; ?>
            </p>
        </div>

    </div>
</div>



<br>
<br><br><br><br><br>
<?php include_once('include/footer.php')?>