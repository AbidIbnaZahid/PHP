<?php
require_once "inc/header.php";
require_once "../inc/db.php";
session_start();

?>



<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <span class="breadcrumb-item active">Exprience</span>
    </nav>


    <div class="sl-pagebody">
        <form action="update_exprience_post.php" method="POST">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Edit Expricence</h3>
                <?php
                if (isset($_SESSION['add_expricence'])) : ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['add_expricence']; ?>
                    </div>
                <?php
                endif;
                ?>
                <div class="row">
                    <label class="col-sm-4 form-control-label">Duration: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="hidden" name="exprience_id" value="<?= single_query('experience', $_GET['id'])['id']; ?>">
                        <input type="text" class="form-control" name="job_duration" value="<?= single_query('experience', $_GET['id'])['job_duration']; ?>">
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="job_name" value="<?= single_query('experience', $_GET['id'])['job_name']; ?>">
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Title <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="job_title" value="<?= single_query('experience', $_GET['id'])['job_title']; ?>">
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Desctription <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <textarea rows="2" class="form-control" name="job_desc"><?= single_query('experience', $_GET['id'])['job_desc']; ?></textarea>
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Update</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>


    </div><!-- sl-pagebody -->

    <?php
    require_once "inc/footer.php";
    unset($_SESSION['add_expricence']);
    ?>