<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><img style="width: 16%; margin-right: 8px;" src="./img/dashboard.png" alt="Home"> <a href="dashboard.php"> <?= ucfirst($_SESSION['login_success']); ?> </a></div>
    <div class="sl-sideleft">
        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="dashboard.php" class="sl-menu-link <?= (isset($dashboard) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="../index.php" class="sl-menu-link" target="blank">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-globe tx-22"></i>
                    <span class="menu-item-label">My Website</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <!-- portfolio Menu Bar Start -->
            <a href="banner.php" class="sl-menu-link <?= (isset($banner) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-suitcase tx-22"></i>
                    <span class="menu-item-label">Banner</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- portfolio Menu Bar End -->

            <!-- Skill Menu Bar Start -->
            <a href="skill.php" class="sl-menu-link <?= (isset($skill) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-arrow-graph-up-right tx-24"></i>
                    <span class="menu-item-label">Skills</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- Skill Menu Bar End -->

            <!-- Services Menu Bar Start -->
            <a href="services.php" class="sl-menu-link <?= (isset($service) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-settings tx-24"></i>
                    <span class="menu-item-label">Services</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="services.php" class="nav-link">Add Services</a></li>
                <li class="nav-item"><a href="view_services.php" class="nav-link">View Services</a></li>
            </ul>
            <!-- Services Menu Bar End -->

            <!-- Exprience Menu Bar Start -->
            <a href="experience.php" class="sl-menu-link <?= (isset($experience) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-24"></i>
                    <span class="menu-item-label">Experience</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="experience.php" class="nav-link">Add Experience</a></li>
                <li class="nav-item"><a href="view_experience.php" class="nav-link">View Experience</a></li>
            </ul>
            <!-- Exprience Menu Bar End -->

            <!-- feature Menu Bar Start -->
            <a href="feature.php" class="sl-menu-link <?= (isset($feature) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-navicon tx-22"></i>
                    <span class="menu-item-label">Feature</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- feature Menu Bar End -->

            <!-- Testimonial Menu Bar Start -->
            <a href="testimonial.php" class="sl-menu-link  <?= (isset($testimonial) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-textsms tx-24"></i>
                    <span class="menu-item-label">Testimonial</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- Testimonial Menu Bar End -->

            <!-- Latest News Menu Bar Start -->
            <a href="news.php" class="sl-menu-link <?= (isset($latest_news) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-social-rss tx-22"></i>
                    <span class="menu-item-label">Add Latest News</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- Latest News Menu Bar End -->

            <!-- partnar Menu Bar Start -->
            <a href="partnar.php" class="sl-menu-link <?= (isset($partnar) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-person-stalker tx-24"></i>
                    <span class="menu-item-label">Partnar</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- partnar Menu Bar End -->

            <!-- Icon Menu Bar Start -->
            <a href="icon.php" class="sl-menu-link <?= (isset($icon) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-add-circle tx-22"></i>
                    <span class="menu-item-label">Icon</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- Icon Menu Bar End -->

            <!-- View Massage Menu Bar Start -->
            <a href="view_massage.php" class="sl-menu-link <?= (isset($view_massage) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-textsms tx-22"></i>
                    <span class="menu-item-label">View Massage</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- View Massage Menu Bar End -->

            <!-- View Subcription Menu Bar Start -->
            <a href="view_subscription.php" class="sl-menu-link <?= (isset($subscription) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-list tx-22"></i>
                    <span class="menu-item-label">View Subscription List</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- View Subcription Menu Bar End -->

            <!-- View Settings Menu Bar Start -->
            <a href="settings.php" class="sl-menu-link <?= (isset($settings) ? 'active' : ''); ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-android-settings tx-22"></i>
                    <span class="menu-item-label">Settings</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <!-- View Settings Menu Bar End -->

        </div><!-- sl-sideleft-menu -->
        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name"><?= ucfirst($_SESSION['login_success']); ?></span>
                        <img src="img/img3.jpg" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="settings.php"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            <li><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->