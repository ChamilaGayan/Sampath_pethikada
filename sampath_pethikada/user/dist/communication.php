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
      $uid =  $_SESSION["id"]; 
      $year_update=$_GET['year'];

$us = $conn->query("SELECT * from users  WHERE id = $uid ");
if($us !== false && $us->num_rows > 0){
while($row=$us->fetch_assoc()){
$ds=$row["role"]; 
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
    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

<style>
  table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

table, tr, td, th {
  border: 1px solid gray;
}

th {
  vertical-align: top;
}

td:empty:after {
  content: "\00a0"; /* HTML entity of &nbsp; */
}
</style>

    <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
  
<script>

$(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
} );

function printSection(el){
    var getFullContent = document.body.innerHTML;
    var printsection = document.getElementById(el).innerHTML;
    document.body.innerHTML = printsection;
    window.print();
    document.body.innerHTML = getFullContent;
    }
</script>
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
                  <i class="mdi mdi-wifi"></i>
                </span> ප්‍රවාහනය හා සන්නිවේදනය
                <?php
    $year=$_GET['year'];
    echo"<br>";
    echo "<h5>$year වර්ෂය</h5>";
?>
              </h3>

              <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 
          
                      <div class="input-group">
                         <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">වර්ෂය තෝරන්න</button>
                          <div class="dropdown-menu">
                          <center><a class="dropdown-item" href="communication.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="communication.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="communication.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="communication.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="communication.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="communication.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="communication.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="communication.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="communication.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="communication.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="communication.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="communication.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='communication.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>බලපත්‍ර ලබාගෙන ඇති වාහන සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='communication.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>නව වාහන ලියාපදිංචි කිරීම</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='communication.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ශ්‍රේණිය හා දිග අනුව ප්‍රධාන මාර්ග පිළිබද තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='communication.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>තැපැල් කාර්යාල/උප තැපැල් කාර්යාල පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

        </div>

        </form>

<!-- ============================================================= -->
<?php
$type=$_GET['type'];
if($type=='1'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">බලපත්‍ර ලබාගෙන ඇති වාහන සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>මෝටර් රථ</th>
                  <th>මෝටර් සයිකල්</th>
                  <th>ත්‍රී රෝද රථ</th>
                  <th>පුද්ගලික බස්</th>
                  <th>ද්විත්ව කාර්යය වාහන</th>
                  <th>ලොරි</th>
                  <th>කෘෂි ඉඩම් වාහන</th>
                  <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from permit_vehicle WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $car=$row['car'];
   $motor_bicycle=$row['motor_bicycle'];
   $three_wheel=$row['three_wheel'];
   $private_bus=$row['private_bus'];
   $dual_function_vehicles=$row['dual_function_vehicles'];
   $lorries=$row['lorries'];
   $agri_vehicles=$row['agri_vehicles'];
   $other=$row['other'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>
              
                <tr>
                <td><?php echo $ds; ?></td>
                <td><?php echo $gnd; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $car; ?></td>
                <td><?php echo $motor_bicycle; ?></td>
		            <td><?php echo $three_wheel; ?></td>
                <td><?php echo $private_bus; ?></td>
                <td><?php echo $dual_function_vehicles; ?></td>
                <td><?php echo $lorries; ?></td>
                <td><?php echo $agri_vehicles; ?></td>
                <td><?php echo $other; ?></td>
                </tr>   
                <?php }} ?>  
                </tbody>
                </table>
                </div>
              </div>
            </div>
          
          <!--Row-->

<?php } ?>
<!-- ============================================================= -->


<!-- ============================================================= -->

<?php 
if($type=='2'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">නව වාහන ලියාපදිංචි කිරීම</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>මෝටර් කාර්</th>
                  <th>මෝටර් ට්‍රයිසිකල් කාර්</th>
                  <th>මෝටර් ට්‍රයිසිකල්</th>
                  <th>මෝටර් ට්‍රයිසිකල් වෑන්</th>
                  <th>බස්</th>
                  <th>මෝටර් සයිකල්</th>
                  <th>ද්විත්ව කාර්යය වාහන</th>
                  <th>සිංගල් කැබ්</th>
                  <th>විශේෂ කාර්යය වාහන</th>
                  <th>ලොරි</th>
                  <th>ප්‍රයිම් මූවර්</th>
                  <th>ගිලන් රථ</th>
                  <th>අවමංගල රථ</th>
                  <th>ලොරි ට්‍රේලර්</th>
                  <th>ට්‍රැක්ටර් ට්‍රේලර්</th>
                  <th>අත් ට්‍රැක්ටර්</th>
                  <th>ට්‍රැක්ටර්</th>
                </tr>
              </thead>
              <tbody>
<?php
   $q3 =$conn->query("SELECT * from new_vehicle WHERE year='$year_update'");
   if($q3 !== false && $q3->num_rows > 0){
   while($row=$q3->fetch_assoc()){
     $id=$row['id'];
     $car=$row['car'];
     $tricycle_car=$row['tricycle_car'];
     $tricycle=$row['tricycle'];
     $tricycle_van=$row['tricycle_van'];
     $bus=$row['bus'];
     $motor_bicycle=$row['motor_bicycle'];
     $dual_function_vehicle=$row['dual_function_vehicle'];
     $single_cab=$row['single_cab'];
     $special_vehicle=$row['special_vehicle'];
     $lorries=$row['lorries'];
     $prime_mover=$row['prime_mover'];
     $ambulance=$row['ambulance'];
     $funeral_red=$row['funeral_red'];
     $lorry_trailer=$row['lorry_trailer'];
     $tractor_trailer=$row['tractor_trailer'];
     $hand_tractor=$row['hand_tractor'];
     $tractor=$row['tractor'];
     $year=$row['year'];
     $ds=$row['ds'];
     $gnd=$row['gnda'];
?>

                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $car; ?></td>
                  <td><?php echo $tricycle_car; ?></td>
                  <td><?php echo $tricycle; ?></td>
                  <td><?php echo $tricycle_van; ?></td>
                  <td><?php echo $bus; ?></td>
                  <td><?php echo $motor_bicycle; ?></td>
                  <td><?php echo $dual_function_vehicle; ?></td>
                  <td><?php echo $single_cab; ?></td>
                  <td><?php echo $special_vehicle; ?></td>
                  <td><?php echo $lorries; ?></td>
                  <td><?php echo $prime_mover; ?></td>
                  <td><?php echo $ambulance; ?></td>
                  <td><?php echo $funeral_red; ?></td>
                  <td><?php echo $lorry_trailer; ?></td>
                  <td><?php echo $tractor_trailer; ?></td>
                  <td><?php echo $hand_tractor; ?></td>
                  <td><?php echo $tractor; ?></td>
                </tr>
                <?php }} ?>
                </tbody>
                </table>
            
                </div>
              </div>
            </div>
          
          <!--Row-->


<?php }?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='3'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">ශ්‍රේණිය හා දිග අනුව ප්‍රධාන මාර්ග පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>අධිවේගී මාර්ග දුර (කි.මී.)</th>
                  <th>A ශ්‍රේණිය දුර (කි.මී.)</th>
                  <th>B ශ්‍රේණිය දුර (කි.මී.)</th> 
                  <th>C ශ්‍රේණිය දුර (කි.මී.)</th>
                  <th>D ශ්‍රේණිය දුර (කි.මී.)</th>
                  <th>නගර සභා මාර්ග දුර (කි.මී.)</th>
                  <th>ප්‍රාදේශීය සභා මාර්ග දුර (කි.මී.)</th>
                </tr>
              </thead>
              <tbody>
<?php
$q3 =$conn->query("SELECT * from road_grade WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $high_way=$row['high_way'];
  $grade_a=$row['grade_a'];
  $garde_b=$row['garde_b'];
  $grade_c=$row['grade_c'];
  $grade_d=$row['grade_d'];
  $city_council_roads=$row['city_council_roads'];
  $ds_roads=$row['ds_roads'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $high_way; ?></td>
                  <td><?php echo $grade_a; ?></td>
                  <td><?php echo $garde_b; ?></td>
                  <td><?php echo $grade_c; ?></td>
                  <td><?php echo $grade_d; ?></td>
                  <td><?php echo $city_council_roads; ?></td>
                  <td><?php echo $ds_roads; ?></td>
                </tr>
                <?php }} ?>
                </tbody>
                </table>
            
                </div>
              </div>
            </div>
          
          <!--Row-->


<?php }?>


<!-- ============================================================= -->
<?php 
if($type=='4'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">තැපැල් කාර්යාල/උප තැපැල් කාර්යාල පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>තැපැල් කාර්යාලය/උප තැපැල් කාර්යාලය</th>
                  <th>ලිපිනය</th>
                </tr>
              </thead>
              <tbody>  
<?php 
 $q3 =$conn->query("SELECT * from post_office WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $post_office=$row['post_office'];
   $addres=$row['addres'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $post_office; ?></td>
                  <td><?php echo $addres; ?></td>
                </tr>
                <?php }} ?>
                </tbody>
                </table>
            
                </div>
              </div>
            </div>
          
          <!--Row-->

<?php }?>

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

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!-- End custom js for this page -->
  </body>
</html>