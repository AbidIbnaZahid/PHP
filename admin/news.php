<?php
$latest_news = true;
require_once "inc/header.php";
session_start();
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">News</span>
    </nav>

    <div class="sl-pagebody">
        <form action="news_post.php" method="POST" enctype="multipart/form-data">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add News</h3>

                <div class="row">
                    <label class="col-sm-4 form-control-label">News Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="news_title">
                        <small class="text-danger"><?= (isset($_SESSION['news_title_empty'])) ? $_SESSION['news_title_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">News Description<span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <textarea class="form-control" name="news_desc" rows="5"></textarea>
                        <!-- <input type="text" class="form-control" name="clients"> -->
                        <small class="text-danger"><?= (isset($_SESSION['news_desc_empty'])) ? $_SESSION['news_desc_empty'] : '' ?></small>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">News Image <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="file" class="form-control" name="news_img">
                        <small class="text-danger"><?= (isset($_SESSION['image_file_name_empty'])) ? $_SESSION['image_file_name_empty'] : '' ?></small>
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
if (isset($_SESSION['add_news'])) : ?>
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
            title: "<?= $_SESSION['add_news'] ?>"
        })
    </script>
<?php
endif;
?>

<?php
unset($_SESSION['add_news']);
unset($_SESSION['news_title_empty']);
unset($_SESSION['news_desc_empty']);
unset($_SESSION['image_file_name_empty']);
?>