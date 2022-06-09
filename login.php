<?php
include "inc/header.php";
?>
<!-- About -->
<section id="about" class="section text-center">
    <div class="container">
        <h2 data-aos="fade-up">Log In Page</h2>
        <section class="mt-4">
            <div class="row">
                <div class="col-md-5 m-auto" data-aos="fade-up">
                    <div class="card">
                        <div class="card-body">
                            <form action="login-page.php" method="POST" class="form-request">
                                <?php
                                if (isset($_SESSION['sent_massage'])) :
                                ?>
                                    <div class="alert alert-success">
                                        <?= $_SESSION['sent_massage']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <?php
                                if (isset($_SESSION['passwod_error'])) : ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['passwod_error']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>

                                <?php
                                if (isset($_SESSION['login_first_error'])) : ?>
                                    <div class="alert alert-info">
                                        <?= $_SESSION['login_first_error']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <div class="form-group">
                                    <input type="text" name="email_or_email" class="form-control" placeholder="Email Or Phone Number*" value="<?= (isset($_SESSION['email_sent']) ? $_SESSION['email_sent'] : ''); ?>">
                                    <?php
                                    if (isset($_SESSION['phone_or_email_error'])) : ?>
                                        <small class="text-danger"><?= $_SESSION['phone_or_email_error']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="password *">
                                    <?php
                                    if (isset($_SESSION['password'])) : ?>
                                        <small class="text-danger"><?= $_SESSION['password']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="mt-4">You don't have an account?<a href="register.php">registration</a></p>
                </div>
            </div>
        </section>
    </div>
</section>

<?php
include "inc/footer.php";
session_unset();
?>