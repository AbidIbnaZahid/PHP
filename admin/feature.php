<?php
$feature = true;
require_once "inc/header.php";
session_start();
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Feature</span>
    </nav>

    <div class="sl-pagebody">
        <form action="feature_post.php" method="POST" enctype="multipart/form-data">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add Feature</h3>

                <div class="row">
                    <label class="col-sm-4 form-control-label">Feature Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="feature_title">
                        <small class="text-danger"><?= (isset($_SESSION['feature_title_empty'])) ? $_SESSION['feature_title_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Clients Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="clients">
                        <small class="text-danger"><?= (isset($_SESSION['clients_empty'])) ? $_SESSION['clients_empty'] : '' ?></small>
                    </div>
                </div>

                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Project Type: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="project_type">
                        <small class="text-danger"><?= (isset($_SESSION['project_type_empty'])) ? $_SESSION['project_type_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Author: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="author">
                        <small class="text-danger"><?= (isset($_SESSION['author_empty'])) ? $_SESSION['author_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Budget: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="number" class="form-control" name="budget">
                        <small class="text-danger"><?= (isset($_SESSION['budget_empty'])) ? $_SESSION['budget_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Feature Image <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="file" class="form-control" name="feature_img">
                        <small class="text-danger"><?= (isset($_SESSION['img_error'])) ? $_SESSION['img_error'] : '' ?></small>
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Add Feature</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>
    </div>
</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
?>

<?php
if (isset($_SESSION['add_feature'])) : ?>
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
            title: "<?= $_SESSION['add_feature'] ?>"
        })
    </script>
<?php
endif;
?>

<?php
unset($_SESSION['add_feature']);
unset($_SESSION['feature_title_empty']);
unset($_SESSION['clients_empty']);
unset($_SESSION['project_type_empty']);
unset($_SESSION['author_empty']);
unset($_SESSION['img_error']);
unset($_SESSION['budget_empty']);
?>