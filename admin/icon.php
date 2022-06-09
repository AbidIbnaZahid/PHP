<?php
$icon = true;
require_once "inc/header.php";
session_start();
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Icon</span>
    </nav>

    <div class="sl-pagebody">
        <form action="icon_post.php" method="POST">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <h3 class="card-body-title text-center mb-5">Add icon</h3>
                <h1 class="text-danger"><?= (isset($_SESSION['icon_error'])) ? $_SESSION['icon_error'] : '' ?></h1>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Icon:<span class="tx-danger">*</span></label>

                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="service_icon" type="text" class="form-control" name="icon" readonly>
                        <!-- Error massage -->
                        <small class="text-danger"><?= (isset($_SESSION['icon_empty'])) ? $_SESSION['icon_empty'] : '' ?></small>
                        <!-- Error massage -->
                        <div class="mt-2 fa-2x" style=" overflow-y: scroll; height: 150px;">
                            <?php
                            $icons = array(
                                "fa-facebook", "fa-twitter", "fa-linkedin", "fa-instagram"
                            );
                            foreach ($icons as $icon) : ?>
                                <div id="fa <?= $icon; ?>" class="badge font_awasume badge-dark p-2 m-1">
                                    <i class="fa <?= $icon; ?>"></i>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 form-control-label">Link:<span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" name="link">
                        <!-- Error massage -->
                        <small class="text-danger"><?= (isset($_SESSION['link_empty'])) ? $_SESSION['link_empty'] : '' ?></small>
                        <!-- Error massage -->
                    </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-5">Add Icon</button>
                </div><!-- form-layout-footer -->
            </div>
        </form>
    </div><!-- sl-pagebody -->


    <?php
    require_once "inc/footer.php";
    ?>

    <?php
    if (isset($_SESSION['add_icon'])) : ?>
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
                title: "<?= $_SESSION['add_icon'] ?>"
            })
        </script>
    <?php
    endif;
    ?>

    <script>
        $('.font_awasume').click(function() {
            $('#service_icon').val($(this).attr('id'));
        })
    </script>

    <?php
    unset($_SESSION['add_icon']);
    unset($_SESSION['icon_empty']);
    unset($_SESSION['icon_error']);
    unset($_SESSION['link_empty']);
    ?>