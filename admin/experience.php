<?php
$experience = true;
require_once "inc/header.php";
session_start();
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Exprience</span>
    </nav>

    <div class="sl-pagebody">
        <form action="exprience_post.php" method="POST">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add Expricence</h3>
                <div class="row">

                    <label class="col-sm-4 form-control-label">Duration: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="job_duration">
                        <!-- Error massage -->
                        <small class="text-danger"><?= (isset($_SESSION['job_duration_empty'])) ? $_SESSION['job_duration_empty'] : '' ?></small>
                        <!-- Error massage -->
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="job_name">
                        <!-- Error massage -->
                        <small class="text-danger"><?= (isset($_SESSION['job_name_empty'])) ? $_SESSION['job_name_empty'] : '' ?></small>
                        <!-- Error massage -->
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Title <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="job_title">
                        <!-- Error massage -->
                        <small class="text-danger"><?= (isset($_SESSION['job_title_empty'])) ? $_SESSION['job_title_empty'] : '' ?></small>
                        <!-- Error massage -->
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Desctription <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <textarea rows="2" class="form-control" name="job_desc"></textarea>
                        <!-- Error massage -->
                        <small class="text-danger"><?= (isset($_SESSION['job_desc_empty'])) ? $_SESSION['job_desc_empty'] : '' ?></small>
                        <!-- Error massage -->
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Add Expricence</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>


    </div><!-- sl-pagebody -->

    <?php
    require_once "inc/footer.php";
    ?>

    <?php
    if (isset($_SESSION['add_expricence'])) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: "<?= $_SESSION['add_expricence'] ?>"
            })
        </script>
    <?php
    endif;
    ?>
    <?php
    unset($_SESSION['job_duration_empty']);
    unset($_SESSION['job_name_empty']);
    unset($_SESSION['job_title_empty']);
    unset($_SESSION['job_desc_empty']);
    unset($_SESSION['add_expricence']);
    ?>