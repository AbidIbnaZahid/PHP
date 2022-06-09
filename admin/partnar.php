<?php
$partnar = true;
require_once "inc/header.php";
session_start();
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Partnar</span>
    </nav>

    <div class="sl-pagebody">
        <form action="partnar_post.php" method="POST" enctype="multipart/form-data">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add Partnar</h3>
                <div class="row">
                    <label class="col-sm-4 form-control-label">Partnar Logo <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="file" class="form-control" name="partnar_logo">
                        <small class="text-danger"><?= (isset($_SESSION['img_error'])) ? $_SESSION['img_error'] : '' ?></small>
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Add Partnar</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>
    </div>
</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
?>

<?php
if (isset($_SESSION['add_partnar'])) : ?>
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
            title: "<?= $_SESSION['add_partnar'] ?>"
        })
    </script>
<?php
endif;
?>

<?php
unset($_SESSION['add_partnar']);
unset($_SESSION['img_error']);
?>