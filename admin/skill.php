<?php
$skill = true;
require_once "inc/header.php";
session_start();
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Skill</span>
    </nav>
    <div class="sl-pagebody">
        <form action="skill_post.php" method="POST">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add Skill With Progressbar</h3>
                <div class="row">
                    <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="title">
                        <small class="text-danger"><?= (isset($_SESSION['title_empty'])) ? $_SESSION['title_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Parentage: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input class="range form-control" type="range" min="1" max="100" value="1" step="1" name="parentage" onmousemove="rangevalue1.value=value" />
                        <output id="rangevalue1"></output>
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Add Skill</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>
    </div>

</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
?>


<?php
if (isset($_SESSION['add_experience_progressbar'])) : ?>
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
            title: "<?= $_SESSION['add_experience_progressbar'] ?>"
        })
    </script>
<?php
endif;
?>

<?php
unset($_SESSION['add_experience_progressbar']);
unset($_SESSION['title_empty']);
?>