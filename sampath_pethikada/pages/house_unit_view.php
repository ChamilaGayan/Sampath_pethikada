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
                  <i class="mdi mdi-home-modern"></i>
                </span> නිවාස ඒකක
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
                            <a class="dropdown-item" href="house_unit_view.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="house_unit_view.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="house_unit_view.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="house_unit_view.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="house_unit_view.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="house_unit_view.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="house_unit_view.php?year=2025&&type=0">2025</a>
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
                <?php echo "<a href='house_unit_view.php?type=1&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ආලෝකය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit_view.php?type=2&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>නිවාස ඉදිකිරීම සදහා යොදා ගෙන ඇති ප්‍රධාන ද්‍රව්‍ය අනුව</a>"; ?> 
 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit_view.php?type=3&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>නිවාස ඒකක වර්ගය අනුව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit_view.php?type=4&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>නිවාස වහල ඉදිකිරීම සදහා යොදා ඇති ද්‍රව්‍ය අනුව</a>"; ?> 

                  
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit_view.php?type=5&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>බීමට ජලය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</a>"; ?> 

                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit_view.php?type=6&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>වැසිකිළි පහසුකම් අනුව</a>"; ?> 

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
                  <h4 class="card-title">ආලෝකය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිවාස ඒකක ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="house_units" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electricity" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භූමි තෙල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lamp_oil" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සූර්ය බලශක්තිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="solar_power" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_power" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලිය නොමැති</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_electricity" >
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
                    <h4 class="card-title">නිවාස ඉදිකිරීම සදහා යොදා ගෙන ඇති ප්‍රධාන ද්‍රව්‍ය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් පවතින ද්‍රව්‍ය (ගඩොල්, සිමෙන්ති ගල්/කලු ගල්, මැටි ගල්, කබොක්/වෙනත්)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="durable_material_houses">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="non_durable_material_houses" >
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
                    <h4 class="card-title">නිවාස ඒකක වර්ගය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">තනි නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="individual_houses">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">යුගල නිවාස/පේලි නිවාස/ලයින් කාමර</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="pair_houses">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පැල්පත් නිවාස/මුඩුක්කු නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="shanty_houses">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">අනුයුක්ත නිවාස/උප ගෘහ</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="appropriate_houses">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">තට්ටු නිවාස/සුපිරි නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="apartments">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">වෙනත්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="other_houses">
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
                    <h4 class="card-title">නිවාස වහල ඉදිකිරීම සදහා යොදා ඇති ද්‍රව්‍ය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් පවතින ද්‍රව්‍ය (උලු, ඇස්බැස්ටෝස්, ටකර්න්, කොන්ක්‍රීට්, ඇලුමිනියම් මිශ්‍ර තහඩු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="durable_material_roof">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="non_durable_material_roof">
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
                    <h4 class="card-title">බීමට ජලය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළිඳ - ආරක්ෂිත , අනාරක්ෂිත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="well">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රධාන නල ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="main_pipe_water">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ග්‍රාමීය ජල ව්‍යාපෘති</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rural_water_projects">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නළ ළිඳ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tube_well">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බෝතල් කල ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bottled_water">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වැව්/ගංගා/ඇල/දොල/බුබුළු ආදී වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="river">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit5">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->




<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වැසිකිළි පහසුකම් අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකකයට වැසිකිළියක් ඇත (ගෘහ කාණ්ඩයේ තනි ප්‍රයෝජනයට, වෙනත් ගෘහ කාණ්ඩ සමග හවුලේ)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="has_a_toilet">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකකයට වැසිකිළියක් ඇති අතර වෙනත් ගෘහ කාණ්ඩ සමග  </label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="has_a_toilet_shared">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පොදු/ප්‍රසිද්ධ/තාවකාලික වැසිකිළි</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="public_toilet">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වැසිකිළි භාවිතා නො කරන</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="not_using_toilet">
                        </div>

                      </div>


                     
                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit6">Edit</button>
                      
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