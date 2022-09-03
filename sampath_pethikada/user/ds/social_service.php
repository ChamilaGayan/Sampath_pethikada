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
                  <i class="mdi mdi-voice"></i>
                </span> සමාජ සේවා/සමෘද්ධි තොරතුරු

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
                          <center><a class="dropdown-item" href="social_service.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="social_service.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="social_service.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="social_service.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="social_service.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="social_service.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="social_service.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="social_service.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="social_service.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="social_service.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="social_service.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="social_service.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='social_service.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>රජයේ ආධාර ලාභීන් සහ සමාජයේ අවධානයට ලක් විය යුතු පුද්ගලයින්</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ආබාධිත පුද්ගලයින් පිලිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ශාරීරික හා මානසික අපහසුතා සහිත පුද්ගලයින්</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වයස අවු. 15-60 අතර ශාරීරික හා මානසික ආබාධ සහිත පුද්ගලයන්</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ළමා නිවාස/වැඩිහිටි නිවාස/දිවා සුරැකුම් මධ්‍යස්ථාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>සමෘද්ධි ආධාර ලබන පවුල් සංඛ්‍යාව</a>"; ?> 

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
                  <h6 class="m-0 font-weight-bold text-primary">රජයේ ආධාර ලාභීන් සහ සමාජයේ අවධානයට ලක් විය යුතු පුද්ගලයින්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ක්ෂය රෝග ආධාර</th>
                  <th>පිළිකා රෝග ආධාර</th>
                  <th>තැලසීමියා රෝග ආධාර</th>
                  <th>ලාදුරු රෝග ආධාර</th>
                  <th>වකුගඩු ආධාර</th>
                  <th>මහජන ආධාර</th>
                  <th>වැඩිහිටි දීමනාලාභී පවුල් ගණන</th>
                  <th>ආබාධිත පවුල් ගණන</th>
                  <th>කාන්තා මූලික පවුල් ගණන</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from government_aid_recipients WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $tuberculosis=$row['tuberculosis'];
    $cancer=$row['cancer'];
    $thalassemia=$row['thalassemia'];
    $leprosy=$row['leprosy']; 
    $kidney=$row['kidney']; 
    $public_assistance=$row['public_assistance'];
    $adult_beneficiary=$row['adult_beneficiary'];
    $disabilities_people=$row['disabilities_people'];
    $female_basic=$row['female_basic']; 
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>
              
                <tr>
                <td><?php echo $ds; ?></td>
                <td><?php echo $gnd; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $tuberculosis; ?></td>
                <td><?php echo $cancer; ?></td>
		            <td><?php echo $thalassemia; ?></td>
                <td><?php echo $leprosy; ?></td>
                <td><?php echo $kidney; ?></td>
                <td><?php echo $public_assistance; ?></td>
                <td><?php echo $adult_beneficiary; ?></td>
                <td><?php echo $disabilities_people; ?></td>
                <td><?php echo $female_basic; ?></td> 
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
                  <h6 class="m-0 font-weight-bold text-primary">ආබාධිත පුද්ගලයින් පිලිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>දෘෂ්‍යාබාධිත ගණන</th>
                  <th>ශ්‍රව්‍යාබාධිත ගණන</th>
                  <th>කථන ආබාධිත ගණන</th>
                  <th>මන්ද මානසික ගණන</th>
                  <th>චලක ආබාධිත ගණන</th>
                  <th>වෙනත්</th>  
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from disabilities_people WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $visually_impaired=$row['visually_impaired'];
   $hearing_impaired=$row['hearing_impaired'];
   $speech_impaired=$row['speech_impaired'];
   $because_mental=$row['because_mental'];
   $movement_disorders=$row['movement_disorders'];
   $other=$row['other'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $visually_impaired; ?></td>
                  <td><?php echo $hearing_impaired; ?></td>
                  <td><?php echo $speech_impaired; ?></td>
                  <td><?php echo $because_mental; ?></td>
                  <td><?php echo $movement_disorders; ?></td>
                  <td><?php echo $other; ?></td> 
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
                  <h6 class="m-0 font-weight-bold text-primary">ශාරීරික හා මානසික අපහසුතා සහිත පුද්ගලයින්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පෙර පාසල්</th>
                  <th>පාසල්</th>
                  <th>උපාධි හා ඊට ඉහළ</th>
                  <th>වෘත්තීය/තාක්ෂණික</th>
                  <th>වෙනත් අධ්‍යාපන ක්‍රියාකාරකම්</th>
                  <th>අධ්‍යාපන කටයුතු වල නොයෙදේ</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from physical_mental_discomfort WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $preschool=$row['preschool'];
  $schools=$row['schools'];
  $degree=$row['degree'];
  $professional=$row['professional'];
  $other=$row['other'];
  $not_involved_education=$row['not_involved_education'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>
              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $preschool; ?></td>
                  <td><?php echo $schools; ?></td>
                  <td><?php echo $degree; ?></td>
                  <td><?php echo $professional; ?></td>
                  <td><?php echo $other; ?></td>
                  <td><?php echo $not_involved_education; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">වයස අවු. 15-60 අතර ශාරීරික හා මානසික ආබාධ සහිත පුද්ගලයන්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>රාජ්‍ය අංශය</th>
                  <th>අර්ධ රාජ්‍ය අංශය</th>
                  <th>පෞද්ගලික අංශය</th>
                  <th>ස්වයං රැකියා</th>
                  <th>කෘෂිකාර්මික අංශය</th>
                  <th>විදෙස්ගත</th>
                  <th>කිසිදු රැකියාවක නිරත නොවන</th>
                </tr>
              </thead>
              <tbody>  
<?php 
 $q3 =$conn->query("SELECT * from physical_mental_discomfort_b WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $public_sector=$row['public_sector'];
   $semi_state=$row['semi_state'];
   $private=$row['private'];
   $self_employment=$row['self_employment'];
   $agriculture=$row['agriculture'];
   $abroad=$row['abroad'];
   $no_work=$row['no_work'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $public_sector; ?></td>
                  <td><?php echo $semi_state; ?></td>
                  <td><?php echo $private; ?></td>
                  <td><?php echo $self_employment; ?></td>
                  <td><?php echo $agriculture; ?></td>
                  <td><?php echo $abroad; ?></td>
                  <td><?php echo $no_work; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ළමා නිවාස/වැඩිහිටි නිවාස/දිවා සුරැකුම් මධ්‍යස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                 <th>ප්‍රා.ලේ</th>
                 <th>ග්‍රාම නිලධාරී වසම</th>
                 <th>වර්ෂය</th>
                 <th>ළමා නිවාස/වැඩිහිටි නිවාස</th>
                 <th>ලිපිනය</th>
                 <th>දු.ක.අංකය</th>
                 <th>සේවාලාභී පුද්ගල ගණන</th>
                 <th>අවශ්‍යතා</th>
                </tr>
              </thead>
              <tbody>
<?php
  $q3 =$conn->query("SELECT * from orphanages WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $orphanages=$row['orphanages'];
    $addres=$row['addres'];
    $contact=$row['contact'];
    $client=$row['client'];
    $requirements=$row['requirements'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $orphanages; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $client; ?></td>
                  <td><?php echo $requirements; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">සමෘද්ධි ආධාර ලබන පවුල් සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>වසමේ පවුල් ගණන</th>
                  <th>ආධාරලාභී පවුල් සංඛ්‍යාව</th>
                  <th>ආධාර බෙදා දී ඇති ආකාරය රු.420</th>
                  <th>රු.1500</th>
                  <th>රු.2500</th>
                  <th>රු.3500</th>
                </tr>
              </thead>
              <tbody>   
<?php 
$q3 =$conn->query("SELECT * from samurdhi_assistance WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $families=$row['families'];
  $supported_families=$row['supported_families'];
  $four_hundred_twenty=$row['four_hundred_twenty'];
  $one_thousand_five_hundred=$row['one_thousand_five_hundred'];
  $two_thousand_five_hundred=$row['two_thousand_five_hundred'];
  $three_thousand_five_hundred=$row['three_thousand_five_hundred'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $families; ?></td>
                  <td><?php echo $supported_families; ?></td>
                  <td><?php echo $four_hundred_twenty; ?></td>
                  <td><?php echo $one_thousand_five_hundred; ?></td>
                  <td><?php echo $two_thousand_five_hundred; ?></td>
                  <td><?php echo $three_thousand_five_hundred; ?></td>
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