<?php
$testimonial = true;
require_once "inc/header.php";
session_start();
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Experience</span>
    </nav>

    <div class="sl-pagebody">
        <form action="testimonial_post.php" method="POST">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add Testimonial</h3>
                <div class="row">
                    <label class="col-sm-4 form-control-label">Author: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="name">
                        <small class="text-danger"><?= (isset($_SESSION['name_empty'])) ? $_SESSION['name_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Company Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="company">
                        <small class="text-danger"><?= (isset($_SESSION['company_empty'])) ? $_SESSION['company_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Description <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <textarea rows="3" class="form-control" name="test_desc"></textarea>
                        <small class="text-danger"><?= (isset($_SESSION['test_desc_empty'])) ? $_SESSION['test_desc_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Submit</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>


    </div><!-- sl-pagebody -->

    <?php
    require_once "inc/footer.php";
    ?>
    <?php
    if (isset($_SESSION['add_testimonial'])) : ?>
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
                title: "<?= $_SESSION['add_testimonial'] ?>"
            })
        </script>
    <?php
    endif;
    ?>


    <?php
    unset($_SESSION['add_testimonial']);
    unset($_SESSION['test_desc_empty']);
    unset($_SESSION['name_empty']);
    unset($_SESSION['company_empty']);
    ?>