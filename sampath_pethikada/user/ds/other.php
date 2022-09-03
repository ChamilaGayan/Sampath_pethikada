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
      $year_update=$_GET['year'];

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
                  <i class="mdi mdi-receipt"></i>
                </span> විවිධ තොරතුරු

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
                          <center><a class="dropdown-item" href="other.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="other.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="other.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="other.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="other.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="other.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="other.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="other.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="other.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="other.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="other.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="other.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='other.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටා ඇති විවිධ බල ප්‍රදේශ</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි සමිති/ප්‍රජාමූල සංවිධාන පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති රාජ්‍ය ආයතන</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති බැංකු හා මුල්‍ය ආයතන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාසයේ අනාවරණය වූ අපරාධ සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>මාර්ග අනතුරු පිළිබද තොරතුරු</a>"; ?> 
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටා ඇති විවිධ බල ප්‍රදේශ</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පළාත් පාලන ආයතන</th>
                  <th>මැතිවරණ කොට්ඨාස</th>
                  <th>උප්පැන මරණ විවාහ ලියාපදිංචි කොට්ඨාස</th>
                  <th>පොලිස් බල ප්‍රදේශ</th>
                  <th>ගොවිජන සේවා මධ්‍යස්ථාන</th>
                </tr>
              </thead>
              <tbody>
<?php 
  $q3 =$conn->query("SELECT * from area_jurisdiction WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $local_authorities=$row['local_authorities'];
    $electorates=$row['electorates'];
    $birth_certificates=$row['birth_certificates'];
    $police_div=$row['police_div']; 
    $agraian_services=$row['agraian_services'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>
              
                <tr>
                <td><?php echo $ds; ?></td>
                <td><?php echo $gnd; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $local_authorities; ?></td>
                <td><?php echo $electorates; ?></td>
		        <td><?php echo $birth_certificates; ?></td>
                <td><?php echo $police_div; ?></td>
                <td><?php echo $agraian_services; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ලියාපදිංචි සමිති/ප්‍රජාමූල සංවිධාන පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ප්‍රජාමූල සංවිධාන වර්ගය</th>
                  <th>සංවිධානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>ලියාපදිංචිය</th>
                  <th>ලියාපදිංචි අංකය</th>
                  <th>ලියාපදිංචි වර්ෂය</th>
                </tr>
              </thead>
              <tbody>
<?php
  $q3 =$conn->query("SELECT * from community_source WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $community_source=$row['community_source'];
    $name=$row['name'];
    $addres=$row['addres'];
    $registration=$row['registration'];
    $registration_no=$row['registration_no'];
    $registration_year=$row['registration_year'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $community_source; ?></td>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $registration; ?></td>
                  <td><?php echo $registration_no; ?></td>
                  <td><?php echo $registration_year; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති රාජ්‍ය ආයතන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආයතනයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක.අංකය</th> 
                </tr>
              </thead>
              <tbody>
<?php
$q3 =$conn->query("SELECT * from government WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $name=$row['name'];
  $addres=$row['addres'];
  $contact=$row['contact'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>
              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති බැංකු හා මූල්‍ය ආයතන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආයතනයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක.අංකය</th>
                </tr>
              </thead>
              <tbody>  
<?php 
 $q3 =$conn->query("SELECT * from bank WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $name=$row['name'];
   $addres=$row['addres'];
   $contact=$row['contact'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
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
$type=$_GET['type'];
if($type=='5'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසයේ අනාවරණය වූ අපරාධ සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                 <th>ප්‍රා.ලේ</th>
                 <th>ග්‍රාම නිලධාරී වසම</th>
                 <th>වර්ෂය</th>
                 <th>ළමා අපචාර</th>
                 <th>මත්ද්‍රව්‍ය භාවිතය</th>
                 <th>ගෘහස්ත හිංසනය</th>
                 <th>මිනීමැරුම්</th>
                 <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php
 $q3 =$conn->query("SELECT * from crime WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $child_abuse=$row['child_abuse'];
   $drugs=$row['drugs'];
   $domestic_violence=$row['domestic_violence'];
   $murder=$row['murder'];
   $other=$row['other'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>
             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $child_abuse; ?></td>
                  <td><?php echo $drugs; ?></td>
                  <td><?php echo $domestic_violence; ?></td>
                  <td><?php echo $murder; ?></td>
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
$type=$_GET['type'];
if($type=='6'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">මාර්ග අනතුරු සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>මාරක රිය අනතුරු</th>
                  <th>බරපතල රිය අනතුරු</th>
                  <th>සුළු තුවාල අනතුරු</th>
                  <th>අලාභහානි</th>
                </tr>
              </thead>
              <tbody>   
<?php 
 $q3 =$conn->query("SELECT * from road_accident WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $deadly_accident=$row['deadly_accident'];
   $serious_accident=$row['serious_accident'];
   $minor_injuries=$row['minor_injuries'];
   $damage=$row['damage'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $deadly_accident; ?></td>
                  <td><?php echo $serious_accident; ?></td>
                  <td><?php echo $minor_injuries; ?></td>
                  <td><?php echo $damage; ?></td>
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