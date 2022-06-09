<?php
$banner = true;
require_once "../inc/db.php";
require_once "inc/header.php";
session_start();
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Banner</span>
    </nav>

    <div class="sl-pagebody">
        <form action="banner_post.php" method="POST" enctype="multipart/form-data">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add Banner Image</h3>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Banner Image: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="file" class="form-control" name="banner_img">
                        <small class="text-danger"><?= (isset($_SESSION['img_error'])) ? $_SESSION['img_error'] : '' ?></small>
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Add Banner</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>
    </div>
    <div class="sl-pagebody">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach (read_all_query('banner') as  $banner) : ?>
                            <tr>
                                <td><img src="../<?= $banner['folder_location'] ?>" alt="No image found" width="100"></td>
                                <td><?= $banner['status'] ?></td>
                                <td>
                                    <?php
                                    if ($banner['status'] == 'active') : ?>
                                        <a href="banner_active_post.php?id=<?= $banner['id'] ?>" class="btn btn-danger btn-sm">Active</a>
                                    <?php
                                    endif;
                                    ?>
                                    <?php
                                    if ($banner['status'] == 'deactive') : ?>
                                        <a href="banner_active_post.php?id=<?= $banner['id'] ?>" class="btn btn-info btn-sm">Active</a>
                                    <?php
                                    endif;
                                    ?>

                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
?>

<?php
if (isset($_SESSION['add_banner'])) : ?>
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
            title: "<?= $_SESSION['add_banner'] ?>"
        })
    </script>
<?php
endif;
?>

<?php
unset($_SESSION['add_banner']);
?>