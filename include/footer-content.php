<div class="py-5 bg-light">
    <div class="container">
        <div class="row ">
            <div class="col-md-4">
                <h4 class="footer-content"><?= webSetting('title') ?? ''; ?></h4>
                <br>
                <p>
                    <?= webSetting('small_description') ?? ''; ?>
                </p>
            </div>
            <div class="col-md-4">
                <h4 class="footer-content">Contact Information</h4>
                <br>
                <p>Address:
                    <?= webSetting('address') ?? ''; ?> </p>

                <p>Email:
                    <?= webSetting('email1') ?? ''; ?> <?= webSetting('email2') ?? ''; ?> </p>

                <p>Phone:
                    <?= webSetting('phone1') ?? ''; ?> <?= webSetting('phone2') ?? ''; ?> </p>
              

            </div>
            <div class="col-md-4 text-center">
            <h4 class="footer-content">Follow us</h4>
                <br>
                <?php
                $sql = "SELECT * FROM social_media";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    foreach ($result as $data) {
                ?>

                        <p> <a target="_blank" href="<?= $data['url']; ?>"><?= $data['name']; ?></a>

                    <?php    }
                } else {

                }
                    ?>
            </div>
        </div>

    </div>
</div>