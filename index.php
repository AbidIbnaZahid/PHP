<?php
include 'inc/header.php';
require_once "inc/db.php";
?>
<!-- Masthead -->

<main id="home" class="masthead jarallax" style="background-image:url('<?= banner('banner') ?>');" role="main">
  <div class="opener">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5">
          <h1>Hey, <?= settings('settings', 'author_name') ?></h1>
          <p class="lead mt-4 mb-5"> <?= settings('settings', 'author_description') ?></p>
          <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
        </div>

      </div>
    </div>
  </div>
</main>


<!-- About -->
<section id="about" class="section">
  <div class="container">
    <h2 data-aos="fade-up"><?= settings('settings', 'about_me_title') ?>.</h2>
    <section class="mt-4">
      <div class="row">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
          <p><?= settings('settings', 'about-me_description') ?> </p>
          <div class="experience d-flex align-items-center">
            <div class="experience-number text-parallax"><?= settings('settings', 'years_of_exprience') ?></div>
            <div class="text-dark mt-3 ml-4">Years<br> of experience</div>
          </div>
        </div>
        <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
          <?php
          foreach (read_all_query('about_experience', 5) as $value) : ?>
            <h6><?= $value['title'] ?></h6>
            <div class="progress">
              <div class="progress-bar" role="progressbar" data-aos="width" style="width: <?= $value['parentage'] ?>%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          <?php
          endforeach;
          ?>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="section bg-dark">
  <div class="container">
    <div class="container">
      <div class="row">
        <?php
        foreach (read_all_query('services', 3) as $service) :
        ?>
          <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
            <i class="text-white <?= $service['service_icon'] ?> fa-3x"></i>
            <h6 class="text-white"><?= $service['service_name'] ?></h6>
            <p><?= $service['service_desc'] ?></p>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Experience -->
<section id="experience" class="section pb-0">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-6" data-aos="fade-up">
        <h2 class="mb-3 mb-md-0">Experience</h2>
      </div>
      <div class="col-md-5 offset-md-1 text-md-right">
        <h6 class="my-0 text-gray"><a href="https://drive.google.com/drive/folders/1wHl1WNeha3giegafwzYpEUuM16Cjc4ZX?usp=sharing">Download my cv</a></h6>
      </div>
    </div>

    <div class="mt-5 pt-5">
      <?php
      foreach (read_all_query('experience') as $value) : ?>
        <div class="row-experience row justify-content-between" data-aos="fade-up">
          <div class="col-md-4">
            <div class="h6 my-0 text-gray"><?= $value['job_duration'] ?></div>
            <h5 class="mt-2 text-primary text-uppercase"><?= $value['job_name'] ?></h5>
          </div>
          <div class="col-md-4">
            <h5 class="mb-3 mt-0 text-uppercase"><?= $value['job_title'] ?></h5>
          </div>
          <div class="col-md-4">
            <p><?= $value['job_desc'] ?></p>
          </div>
        </div>
      <?php
      endforeach;
      ?>
    </div>
  </div>
</section>

<!-- Projects -->
<section id="projects" class="section">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-6" data-aos="fade-up">
        <h2 class="mb-3 mb-md-0">Featured projects</h2>
      </div>
      <div class="col-md-5 offset-md-1 text-md-right">
        <h6 class="my-0 text-gray"><a href="all_projects.php">View all projects</a></h6>
      </div>
    </div>
    <div class="mt-5 pt-5" data-aos="fade-in">
      <div class="carousel-project owl-carousel">
        <?php
        foreach (read_all_query('feature') as $key => $feature) : ?>
          <div class="project-item">
            <a href="#project<?= $key + 1; ?>" class="popup-with-zoom-anim">
              <figure class="position-relative">
                <img alt="" class="w-100" src="<?= $feature['folder_location']; ?>">
                <figcaption class="text-white">
                  <h3 class="mb-2 text-white"><?= $feature['feature_title']; ?></h3>
                  <p><?= $feature['project_type']; ?></p>
                </figcaption>
              </figure>
            </a>
          </div> <?php
                endforeach;
                  ?>
      </div>
    </div>
  </div>
</section>

<!-- Project Modal Dialog 1 -->
<?php
foreach (read_all_query('feature') as $key => $feature) : ?>
  <div id="project<?= $key + 1; ?>" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0"><?= $feature['feature_title']; ?></h2>
    <div class="mt-5 pt-2 text-dark">
      <div class="row">
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Clients:</h6>
          <span><?= $feature['clients']; ?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Completion:</h6>
          <span><?php
                echo date("F jS, Y", strtotime($feature['createed_time']))
                ?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Project Type:</h6>
          <span><?= $feature['project_type']; ?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Authors</h6>
          <span><?= $feature['author']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <h6 class="my-0">Budget:</h6>
          <span>$<?= $feature['budget']; ?></span>
        </div>
      </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="<?= $feature['folder_location']; ?>">
  </div>
  <?php
endforeach;
  ?>>

  <!-- Testimonials -->
  <section id="testimonials" class="testimonials section">
    <div class="container">
      <div class="carousel-testimonials owl-carousel">
        <?php
        foreach (read_all_query('testimonials') as $value) : ?>
          <div class="col-testimonial" data-aos="fade-up">
            <span class="quiote">"</span>
            <p data-aos="fade-up"><?= $value['test_desc'] ?></p>
            <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $value['name'] ?></strong> - <?= $value['company'] ?></p>
          </div>

        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>

  <!-- News -->
  <section id="news" class="section bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Latest news</h2>
        </div>
        <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="text-gray my-0"><a href="news_all.php">View all news</a></h6>
        </div>
      </div>
      <div class="mt-5 pt-5">
        <div class="row-news row">
          <?php foreach (read_all_query('news', 3) as $news) : ?>
            <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
              <figure class="position-relative">
                <div class="position-relative">
                  <a href="news_detals.php?id=<?= $news['id']; ?>"><img alt="" class="w-100 d-block" src="<?= $news['folder_location'] ?>"></a>
                  <mark class="date">
                    <?php
                    $insert_date = $news['insert_date'];
                    echo date("m.d.Y", strtotime($insert_date));
                    ?>
                  </mark>
                </div>
                <figcaption>
                  <h5><a href="news_detals.php?id=<?= $news['id']; ?>"><?= $news['news_title'] ?></a></h5>
                  <?php
                  if (strlen($news['news_desc']) > 30) {
                    echo substr($news['news_desc'], 0, 30) . "...";
                  } else {
                    echo $news['news_desc'];
                  }

                  ?>
                </figcaption>
              </figure>
            </div>
          <?php
          endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="row-partners row">
        <?php foreach (read_all_query('partnar', 4) as $partnar) : ?>
          <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
            <img alt="" src="<?= $partnar['partnar_logo'] ?>">
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer>
    <div class="section bg-dark py-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Phone:</h6>
            <p class="text-white mb-4"><?= settings('settings', 'author_phone') ?></p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Email:</h6>
            <p class="text-white mb-4"><?= settings('settings', 'author_email') ?></p>
          </div>

          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Follow me:</h6>
            <ul class="social">
              <?php
              foreach (read_all_query('icons') as $result) : ?>
                <li><a href="<?= $result['link'] ?>">
                    <i class="text-black <?= $result['icon'] ?> fa-2x"></i>
                  </a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Subscribe:</h6>
            <form action="subscription.php" method="POST">
              <div class="input-group">
                <input id="mc-email" type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <button class="btn btn-info">Go</button>
                </div>
              </div>
              <label class="mc-label" for="mc-email" id="mc-notification"></label>
            </form>
            <?php
            if (isset($_SESSION['subscriptions_done'])) : ?>
              <small class="text-danger"><?= $_SESSION['subscriptions_done'] ?></small>
            <?php
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copy section-sm">
      <div class="container">© Copyright <?php date('Y') ?> <?= settings('settings', 'author_name') ?>. All Rights Reserved
      </div>
    </div>
  </footer>


  <!-- Modal -->
  <div class="modal fade" id="send-request">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title mt-0">Send request</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Leave your contacts and our managers
            will contact you soon.</p>

          <form action="send_request.php" method="POST" class="form-request">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
              <?php
              if (isset($_SESSION['name_empty'])) :

              ?>
                <small class="text-danger"><?= $_SESSION['name_empty']; ?></small>
              <?php
              endif
              ?>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email *">
              <?php
              if (isset($_SESSION['email_empty'])) :

              ?>
                <small class="text-danger"><?= $_SESSION['email_empty']; ?></small>
              <?php
              endif
              ?>
            </div>
            <div class="form-group">
              <textarea rows="3" name="message" class="form-control" placeholder="Message"></textarea>
              <?php
              if (isset($_SESSION['message_empty'])) :

              ?>
                <small class="text-danger"><?= $_SESSION['message_empty']; ?></small>
              <?php
              endif
              ?>
            </div>
            <div class="message" id="success-message">Your message is successfully sent...</div>
            <div class="message" id="error-message">Sorry something went wrong</div>
            <?php
            if (isset($_SESSION['send_massage'])) :
            ?>
              <div class="alert alert-success">
                <?= $_SESSION['send_massage']; ?>
              </div>
            <?php
            endif;
            ?>
            <div class="form-group mb-0 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  include "inc/footer.php";
  ?>
  <!-- <?php
        unset($_SESSION['name_empty']);
        unset($_SESSION['email_empty']);
        unset($_SESSION['message_empty']);
        unset($_SESSION['send_massage']);
        ?> -->