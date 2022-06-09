<?php
include "inc/header.php";
session_start();
?>
<!-- About -->
<section id="about" class="section">
    <div class="container">
        <h2 data-aos="fade-up">Send Me Massage</h2>
        <section class="mt-4">
            <div class="row">
                <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
                    <form action="send-massage.php" method="POST" class="form-request">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            <?php
                            if (isset($_SESSION['name'])) :

                            ?>
                                <small class="text-danger"><?= $_SESSION['name']; ?></small>
                            <?php
                            endif
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email *">
                            <?php
                            if (isset($_SESSION['email'])) :

                            ?>
                                <small class="text-danger"><?= $_SESSION['email']; ?></small>
                            <?php
                            endif
                            ?>
                        </div>
                        <div class="form-group">
                            <textarea rows="3" name="message" class="form-control" placeholder="Message"></textarea>
                            <?php
                            if (isset($_SESSION['message'])) :

                            ?>
                                <small class="text-danger"><?= $_SESSION['message']; ?></small>
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
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
                    <h6>Contact Details</h6>
                    <p>Abid Ibna Zahid</p>
                    <p>Bashundhara R/A, Dhaka, Bangladesh</p>
                    <p>Mobile No: 01700000000</p>
                </div>
            </div>
        </section>
    </div>
</section>





<?php
include "inc/footer.php";
session_unset();

?>