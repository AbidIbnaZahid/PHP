<?php
$dashboard = true;
session_start();
if (!isset($_SESSION['verification'])) {
  header('location: ../login.php');
  $_SESSION['login_first_error'] = "Your are not registered user. Please log in first";
}
require_once "../inc/db.php";
require_once "inc/header.php";

$count_unread_query = "SELECT COUNT(*) AS massages FROM massages WHERE status='unread'";
$count_unread_result = mysqli_query(db(), $count_unread_query);
$count = mysqli_fetch_assoc($count_unread_result);

$count_read_query = "SELECT COUNT(*) AS massages FROM massages WHERE status='read'";
$count_read_result = mysqli_query(db(), $count_read_query);
$count_read = mysqli_fetch_assoc($count_read_result);

$service = "SELECT COUNT(*) AS services FROM services";
$service_query = mysqli_query(db(), $service);
$total_service = mysqli_fetch_assoc($service_query);

$exprience = "SELECT COUNT(*) AS expriences FROM experience";
$exprience_query = mysqli_query(db(), $exprience);
$total_exprience = mysqli_fetch_assoc($exprience_query);

$partnar = "SELECT COUNT(*) AS partnars FROM partnar";
$partnar_query = mysqli_query(db(), $partnar);
$total_partnar = mysqli_fetch_assoc($partnar_query);

$skills = "SELECT COUNT(*) AS skills FROM about_experience";
$skills_query = mysqli_query(db(), $skills);
$total_skill = mysqli_fetch_assoc($skills_query);

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?>'s Dashboard</a>
  </nav>

  <div class="sl-pagebody">
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong class="d-block d-sm-inline-block-force">Well done!</strong> <?= $_SESSION['login_success']; ?>.
    </div><!-- alert -->
    <div class="row row-sm">
      <div class="col-sm-6 col-xl-3">
        <div class="card pd-20 bg-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Service</h6>
            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
          </div><!-- card-header -->

          <div class="d-flex align-items-center justify-content-between">
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Total Services</span>
              <h6 class="tx-white mg-b-0"> <?= $total_service['services'] ?></h6>
            </div>
          </div>
        </div><!-- card -->
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
        <div class="card pd-20 bg-info">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Exprience</h6>
            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Total Exprience</span>
              <h6 class="tx-white mg-b-0"><?= $total_exprience['expriences'] ?></h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="card pd-20 bg-purple">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Partner</h6>
            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Total Partnar</span>
              <h6 class="tx-white mg-b-0"><?= $total_partnar['partnars'] ?></h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="card pd-20 bg-sl-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Skills</h6>
            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Total Skills</span>
              <h6 class="tx-white mg-b-0"><?= $total_skill['skills'] ?></h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->
    </div><!-- row -->

    <div class="row row-sm mg-t-20">
      <div class="col-xl-8">
        <div class="card overflow-hidden">
          <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
            <div class="mg-b-20 mg-sm-b-0">
              <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Profile Statistics</h6>
              <span class="d-block tx-12">October 23, 2017</span>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="#" class="btn btn-secondary tx-12 active">Today</a>
              <a href="#" class="btn btn-secondary tx-12">This Week</a>
              <a href="#" class="btn btn-secondary tx-12">This Month</a>
            </div>
          </div><!-- card-header -->
          <div class="card-body pd-0 bd-color-gray-lighter">
            <div class="row no-gutters tx-center">
              <div class="col-12 col-sm-4 pd-y-20 tx-left">
                <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
              </div><!-- col-4 -->
              <div class="col-6 col-sm-2 pd-y-20">
                <h4 class="tx-inverse tx-lato tx-bold mg-b-5">6,112</h4>
                <p class="tx-11 mg-b-0 tx-uppercase">Views</p>
              </div><!-- col-2 -->
              <div class="col-6 col-sm-2 pd-y-20 bd-l">
                <h4 class="tx-inverse tx-lato tx-bold mg-b-5">102</h4>
                <p class="tx-11 mg-b-0 tx-uppercase">Likes</p>
              </div><!-- col-2 -->
              <div class="col-6 col-sm-2 pd-y-20 bd-l">
                <h4 class="tx-inverse tx-lato tx-bold mg-b-5">343</h4>
                <p class="tx-11 mg-b-0 tx-uppercase">Comments</p>
              </div><!-- col-2 -->
              <div class="col-6 col-sm-2 pd-y-20 bd-l">
                <h4 class="tx-inverse tx-lato tx-bold mg-b-5">960</h4>
                <p class="tx-11 mg-b-0 tx-uppercase">Shares</p>
              </div><!-- col-2 -->
            </div><!-- row -->
          </div><!-- card-body -->
          <div class="card-body pd-0">
            <div id="rickshaw2" class="wd-100p ht-200"></div>
          </div><!-- card-body -->
        </div><!-- card -->

        <div class="card pd-20 pd-sm-25 mg-t-20">
          <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
          <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
          <canvas id="chartBar4" height="300"></canvas>
        </div><!-- card -->

      </div><!-- col-8 -->
      <div class="col-xl-4 mg-t-20 mg-xl-t-0">

        <div class="card pd-20 pd-sm-25">
          <h6 class="card-body-title">Pie Chart</h6>
          <p class="mg-b-20 mg-sm-b-30">Massages Read vs Unread</p>
          <div id="flotPie2" class="ht-200 ht-sm-250"></div>
        </div><!-- card -->

        <div class="card widget-messages mg-t-20">
          <div class="card-header">
            <span>Messages</span>
            <a href=""><i class="icon ion-more"></i></a>
          </div><!-- card-header -->
          <div class="list-group list-group-flush">
            <?php
            foreach (read_all_query('massages') as  $massage) : ?>
              <a href="" class="list-group-item list-group-item-action media">
                <img src="img/img10.jpg" alt="">
                <div class="media-body">
                  <div class="msg-top">
                    <span><?= $massage['name']; ?></span>
                    <span>4:09am</span>
                  </div>
                  <p class="msg-summary"><?= $massage['massage']; ?></p>
                </div><!-- media-body -->
              </a><!-- list-group-item -->
            <?php endforeach;
            ?>
          </div><!-- list-group -->
          <div class="card-footer">
            <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
          </div><!-- card-footer -->
        </div><!-- card -->
      </div><!-- col-3 -->
    </div><!-- row -->
  </div><!-- sl-pagebody -->
  <?php
  require_once "inc/footer.php";
  ?>
  <script>
    var piedata = [{
        label: "Read",
        data: [
          [1, "<?= $count_read['massages']; ?>"]
        ],
        color: '#5B93D3'
      },
      {
        label: "Unread",
        data: [
          [1, "<?= $count['massages']; ?>"]
        ],
        color: '#324463'
      }
    ];

    $.plot('#flotPie2', piedata, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }
        }
      },
      grid: {
        hoverable: true,
        clickable: true
      },
      legend: {
        show: false
      }
    });

    function labelFormatter(label, series) {
      return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
  </script>