<?php
include "inc/header.php";
require_once "inc/db.php";
?>

<section id="about" class="section">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="card-body mb-5">
                        <h5 class="card-body-title tx-white text-center" style="background-color: #5B93D3 !important;
                        padding: 10px 0;">All Projects</h5>
                        <?php
                        foreach (read_all_query('feature') as  $feature) : ?>
                            <div class="project-item mb-5">
                                <figure class="position-relative">
                                    <img alt="" class="w-100" src="<?= $feature['folder_location']; ?>">
                                    <figcaption class="text-white">
                                        <h3 class="mb-2 text-white"><?= $feature['feature_title']; ?></h3>
                                        <p><?= $feature['project_type']; ?></p>
                                    </figcaption>
                                </figure>

                                <div class="mt-5 pt-2 text-dark">
                                    <div class="row">
                                        <div class="mb-5 col-md-6 col-lg-3">
                                            <h6 class="my-0">Clients:</h6>
                                            <span><?= $feature['clients']; ?></span>
                                        </div>
                                        <div class="mb-5 col-md-6 col-lg-3">
                                            <h6 class="my-0">Completion:</h6>
                                            <span><?php
                                                    echo date("F jS, Y", strtotime($feature['createed_time']))
                                                    ?></span>
                                        </div>
                                        <div class="mb-5 col-md-6 col-lg-3">
                                            <h6 class="my-0">Project Type:</h6>
                                            <span><?= $feature['project_type']; ?></span>
                                        </div>
                                        <div class="mb-5 col-md-6 col-lg-3">
                                            <h6 class="my-0">Authors</h6>
                                            <span><?= $feature['author']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h6 class="my-0">Budget:</h6>
                                            <span>$<?= $feature['budget']; ?></span>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
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