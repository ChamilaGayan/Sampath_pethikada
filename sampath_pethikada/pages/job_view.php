<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
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
                  <i class="mdi mdi-book-open-page-variant"></i>
                </span> රැකියා
                <?php 
    $year=$_GET['year'];
    echo"<br>";
    echo "<h5>$year වර්ෂය</h5>";
?>
              </h3>

            <form>
          
                      <div class="input-group">
                         <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">වර්ෂය තෝරන්න</button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="job_view.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="job_view.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="job_view.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="job_view.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="job_view.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="job_view.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="job_view.php?year=2025&&type=0">2025</a>
                        </div>
                      </div>
                    </div>
                <form>
                </div>


<br>

            

        <form>



        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job_view.php?type=1&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>රැකියා නියුක්තිය ප්‍රධාන අංශයන් අනුව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job_view.php?type=2&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>රැකියා වර්ගීකරණය හා රැකියා විරහිත ප්‍රමාණය</a>"; ?> 
 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job_view.php?type=3&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>විදේශගත රැකියා වල නියුතු නුපුහුණු ශ්‍රමිකයින්</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job_view.php?type=4&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විදේශගත රැකියා වල නියුතු පුහුණු ශ්‍රමිකයින්</a>"; ?> 

                  
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job_view.php?type=5&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සේවා වියුක්තිය</a>"; ?> 

                </div>
            </div>

           

        </div>

        </form>
            



<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">රැකියා නියුක්තිය ප්‍රධාන අංශයන් අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂිකාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agriculture" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">කාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="industrial" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවා අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මුලු සේවා අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tot_services_division" >
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit1">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->


<!-- ============================================================= -->

<?php 
if($type=='2'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රැකියා වර්ගීකරණය හා රැකියා විරහිත ප්‍රමාණය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මුලු සේවා </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services_total">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රාජ්‍ය අංශය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="government" >
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_government">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්වයං රැකියා </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self-employment">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවා වියුක්ති සංඛ්‍යාව </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="unemployment">
                        </div>

                      </div>



                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit2">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='3'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත රැකියා වල නියුතු නුපුහුණු ශ්‍රමිකයින්</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">මැද පෙර දිග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_middle_east_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_middle_east_nt" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කොරියාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_korea_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_korea_nt" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">යුරෝපය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_europe_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_europe_nt" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other_country_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other_country_nt" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit3">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>




<!-- ============================================================= -->
<?php 
if($type=='4'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත රැකියා වල නියුතු පුහුණු ශ්‍රමිකයින්</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">මැද පෙර දිග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_middle_east_trainee" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_middle_east_trainee" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කොරියාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_korea_trainee" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_korea_trainee" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">යුරෝපය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_europe_trainee" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_europe_trainee" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other_country_trainee" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other_country_trainee" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit4">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>





<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සේවා වියුක්තිය </h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 18-25</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_18-25" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_18-25" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 26-40</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_26-40" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_26-40" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 41-60</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_41-60" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_41-60" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit5">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->






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