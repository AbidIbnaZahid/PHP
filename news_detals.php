<?php
include "inc/header.php";
require_once "inc/db.php";
?>
<section id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="card">
                    <div class="card-header">
                        <?= single_query('news', $_GET['id'])['news_title'];  ?>
                    </div>
                    <div class="card-body">
                        <img alt="" class="w-100 d-block" src="<?= single_query('news', $_GET['id'])['folder_location'];  ?>">
                        <br>
                        <p>Description: <?= single_query('news', $_GET['id'])['news_desc'];  ?></p>
                    </div>
                </div>
                <a href="index.php" class="btn btn-primary mt-3 text-end">Back</a>
            </div>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>