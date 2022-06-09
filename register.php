<?php
require_once "inc/header.php";
?>
<!-- About -->
<section id="about" class="section text-center">
    <div class="container">
        <h2 data-aos="fade-up">Sign In Page</h2>
        <section class="mt-4">
            <div class="row">
                <div class="col-md-6 m-auto" data-aos="fade-up">
                    <div class="card">
                        <div class="card-body">
                            <form action="register-page.php" method="POST" class="form-request">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?= (isset($_SESSION['old_name']) ? $_SESSION['old_name'] : ""); ?>">
                                    <?php
                                    if (isset($_SESSION['name'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['name']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" value="<?= (isset($_SESSION['old_email']) ? $_SESSION['old_email'] : "") ?>">
                                    <?php
                                    if (isset($_SESSION['email'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['email']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                    <?php
                                    if (isset($_SESSION['email_exit_error'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['email_exit_error']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number *" value="<?= (isset($_SESSION['old_phone']) ? $_SESSION['old_phone'] : ""); ?>">
                                    <?php
                                    if (isset($_SESSION['phone'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['phone']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                    <?php
                                    if (isset($_SESSION['mobile_exit_error'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['mobile_exit_error']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="password *">
                                    <?php
                                    if (isset($_SESSION['password'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['password']; ?></small>
                                    <?php
                                    endif;
                                    ?>

                                    <?php
                                    if (isset($_SESSION['minimum_password'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['minimum_password']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="confirm Password *">
                                    <?php
                                    if (isset($_SESSION['confirm_password'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['confirm_password']; ?></small>
                                    <?php
                                    endif
                                    ?>
                                    <?php
                                    if (isset($_SESSION['confirm_match_password'])) :
                                    ?>
                                        <small class="text-danger"><?= $_SESSION['confirm_match_password']; ?></small>
                                    <?php
                                    endif
                                    ?>
                                </div>

                                <div class="message" id="success-message">Your message is successfully sent...</div>
                                <div class="message" id="error-message">Sorry something went wrong</div>
                                <?php
                                if (isset($_SESSION['massage'])) :


                                ?>
                                    <div class="alert alert-success">
                                        <?= $_SESSION['massage']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="mt-4">Do you have an account?<a href="login.php">Login</a></p>
                </div>
            </div>
        </section>
    </div>
</section>

<?php
include "inc/footer.php";
session_unset();
?>