<?php
// error_reporting(0);
require_once('../../include/config.php');
if(!isset($_SESSION)) 
    {
        session_start();  
    } 
    if (strlen($_SESSION['id']==0)) {
      header('<location:login/logout.php');
      } else{
      }
      $uid =  $_SESSION["id"] ; 

      $us = $conn->query("SELECT * from users  WHERE id = $uid ");
      if($us !== false && $us->num_rows > 0){
      while($row=$us->fetch_assoc()){
      $gnd=$row["gnd"]; 
      $ds=$row["ds"]; 
} 
}
      
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>සම්පත් පැතිකඩ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    
    <div class="container-scroller">
     
      <!-- partial:partials/_navbar.html -->
      <?php include 'include/navbar.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include 'include/sidebar.php' ?>
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin" style="height:200px;">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                  <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">මුලු ජනගහනය <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">
                      
                    <?php
    $sql1=$conn->query("SELECT sum(female) as total FROM total_population WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        $female=$row['total'];
      }
    } 

    $sql2=$conn->query("SELECT sum(male) as total FROM total_population WHERE ds='$ds'");
      if($sql2 !== false && $sql2->num_rows > 0){
      while($row=$sql2->fetch_assoc()){
        $male=$row['total'];
      }
    }

    echo $female + $male ;
    ?>
                    </h2>
                    <h6 class="card-text"><div class="mt-2 mb-0 text-muted text-xs">
                      <marquee direction="up" scrolldelay="500">
                        <span class="text-light mr-2"><i class="mdi mdi-keyboard-caps"></i></span>
                        <span class="text-light mr-2">Since last month</span></marquee>
                      </div></h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin" style="height:200px;">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                  <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">ස්ත්‍රී<i class="mdi mdi-gender-female mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">
                    <?php
    $sql1=$conn->query("SELECT sum(female) as total FROM total_population WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 00){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    }
    ?>
                    </h2>
                    <h6 class="card-text"><div class="mt-2 mb-0 text-muted text-xs">
                      <marquee direction="up" scrolldelay="500">
                        <span class="text-light mr-2"><i class="mdi mdi-keyboard-caps"></i></span>
                        <span class="text-light mr-2">Since last month</span></marquee>
                      </div></h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin" style="height:200px;">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                  <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">පුරුෂ<i class="mdi mdi-gender-male mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">
                      <?php
 $sql2=$conn->query("SELECT sum(male) as total FROM total_population WHERE ds='$ds'");
 if($sql2 !== false && $sql2->num_rows > 0){
 while($row=$sql2->fetch_assoc()){
  echo $row['total'];
 }
} 
                      ?>
                    </h2>
                    <h6 class="card-text"> <div class="mt-2 mb-0 text-muted text-xs">
                      <marquee direction="up" scrolldelay="500">
                        <span class="text-light mr-2"><i class="mdi mdi-keyboard-caps"></i></span>
                        <span class="text-light mr-2">Since last month</span></marquee>
                      </div></h6>
                      
                  </div>
                </div>
              </div>
              <center><br><br><br><br><p class="card-description"><code>අද දිනය:<label><span id="datetime"></span><script>var dt = new Date();
                  document.getElementById("datetime").innerHTML=dt.toLocaleString();</script> </label></code></p>
                    <footer class="btn-gradient-success">ආයුබෝවන්. <cite title="Source Title">ඔබට සුබ දවසක්!</cite></footer></center> 
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        <?php include '../../include/footer.php'; ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>