<?php
$settings = true;
require_once "../inc/db.php";
require_once "inc/header.php";
session_start();
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Settings</span>
    </nav>

    <div class="sl-pagebody">
        <form action="settings_post.php" method="POST">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Edit Setting</h3>
                <?php
                foreach (read_all_query('settings') as $setting) : ?>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label"><?= $setting['settings_name'] ?>: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="<?= $setting['settings_name'] ?>" value="<?= $setting['settings_value'] ?>">
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Edit Settings</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>


    </div><!-- sl-pagebody -->

    <?php
    require_once "inc/footer.php";
    ?>

    <?php
    if (isset($_SESSION['edit_settings'])) : ?>
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
                title: "<?= $_SESSION['edit_settings'] ?>"
            })
        </script>
    <?php
    endif;
    ?>
    <?php
    unset($_SESSION['edit_settings']);
    ?>