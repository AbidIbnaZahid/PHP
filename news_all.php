<?php
include "inc/header.php";
?>

<section id="about" class="section">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="card-body mb-5">
                        <h5 class="card-body-title tx-white text-center" style="background-color: #5B93D3 !important;
                        padding: 10px 0;">View Latest News</h5>
                        <?php
                        foreach (read_all_query('news') as $news) : ?>
                            <div class="project-item mb-5">
                                <figure class="position-relative">
                                    <img alt="" class="w-100" src="<?= $news['folder_location'] ?>">
                                </figure>
                                <h3 class="mb-2 text-white"><?= $news['news_title'] ?></h3>
                                <small class="date"> Date:
                                    <?php
                                    $insert_date = $news['insert_date'];
                                    echo date("m.d.Y", strtotime($insert_date));
                                    ?>
                                </small>
                                <p><?= $news['news_desc'] ?></p>
                            </div>
                            <hr>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>

        </section>
    </div>
</section>
<?php
include "inc/footer.php";
?>