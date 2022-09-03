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
                  <i class="mdi mdi-stethoscope"></i>
                </span> සෞඛ්‍ය
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
                          <center><a class="dropdown-item" href="health.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="health.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="health.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="health.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="health.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="health.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="health.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="health.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="health.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="health.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="health.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="health.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='health.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය සෞඛ්‍ය සේවා මධ්‍යස්ථාන</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල්</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල් වල රෝග නිරෝධායන කාර්යය මණ්ඩලය</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ආයුර්වේද වෛද්‍ය පහසුකම්</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය පුද්ගලික වෛද්‍ය සේවා මධ්‍යස්ථාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස තුල වාර්තා වූ කොවිඩ් රෝගීන්</a>"; ?> 

                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>රජයේ රෝහල් වල සිදුවූ සජීවී,අජීවී,අඩු බර දරු උපත් සංඛ්‍යාව </a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස අනුව මාතෘ මරණ</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ජලභීතිකා රෝගය පිළිබද තොරතුරු </a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>මැලේරියා,ඩෙංගු,ලාදුරු,බරවා හා ක්ෂය රෝගීන්  </a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=11&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>සායනවල ලියාපදිංචි බෝ නොවන රෝගීන්</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=12&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>සමාජ රෝග</a>"; ?> 

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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය සෞඛ්‍ය සේවා මධ්‍යස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>රෝහල් ගණන</th>
                  <th>සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස ගණන</th>
                  <th>මහජන සෞඛ්‍ය පරීක්ෂක කොට්ඨාස ගණන</th>
                  <th>නිලධාරීන් ගණන</th>
                  <th>පවුල් සෞඛ්‍ය සේවිකා කොට්ඨාස ගණන</th>
                  <th>නිලධාරීන් ගණන</th>
                </tr>
              </thead>
              <tbody> 
<?php 

$q3 =$conn->query("SELECT * from rural_service_centers WHERE year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $no_hospitals=$row['no_hospitals'];
    $moh=$row['moh'];
    $health_inspectors=$row['health_inspectors'];
    $hofficers=$row['hofficers']; 
    $family_health_services=$row['family_health_services']; 
    $fofficers=$row['fofficers'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>
              
                <tr>
                <td><?php echo $ds; ?></td>
                <td><?php echo $gnd; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $no_hospitals; ?></td>
                <td><?php echo $moh; ?></td>
		            <td><?php echo $health_inspectors; ?></td>
                <td><?php echo $hofficers; ?></td>
                <td><?php echo $family_health_services; ?></td>
                <td><?php echo $fofficers; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary"> ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>රෝහලේ නම</th>
                  <th>ප්‍රතිකාර ලැබූ රෝගීන් ගණන</th>
                  <th>වාට්ටු සංඛ්‍යාව</th>
                  <th>ඇදන් සංඛ්‍යාව</th>
                  <th>වෛද්‍යවරුන් සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from gov_hospitals WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $hospital_name=$row['hospital_name'];
   $no_patients=$row['no_patients'];
   $ward=$row['ward'];
   $bed=$row['bed'];
   $doctors=$row['doctors'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $hospital_name; ?></td>
                  <td><?php echo $no_patients; ?></td>
                  <td><?php echo $ward; ?></td>
                  <td><?php echo $bed; ?></td>
                  <td><?php echo $doctors; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary"> ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල් වල රෝග නිරෝධායන කාර්යය මණ්ඩලය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>විශේෂ වෛද්‍ය නිලධාරී</th>
                  <th>වෛද්‍ය නිලධාරී</th>
                  <th>දන්ත වෛද්‍ය නිලධාරී</th>
                  <th>සහකාර/ලියාපදිංචි වෛද්‍ය නිලධාරී</th>
                  <th>හෙද/හෙදි නිලධාරී</th>
                  <th>රෝහල් පවුල් සෞඛ්‍ය සේවා නිලධාරී</th>
                  <th>රසායනාගාර කාර්මික ශිල්පී</th>
                  <th>වෙනත් කාර්මික ශිල්පී</th>
                  <th>ඖෂධවේදී</th>
                  <th>ඖෂධ සං‍යෝජක</th>
                  <th>ආයතන කාර්‍යය මණ්ඩලය</th>
                  <th>උපස්තායක/උපස්තායිකා</th>
                  <th>සාමාන්‍ය සනීපාරක්ෂක</th>
                  <th>අනෙකුත් සුළුසේවක</th>
                  <th>වෙනත්</th>
                  <th>අනුමත කාර්‍යය මණ්ඩලය</th>
                  <th>හිග සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from quarantine_staff WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $specialist_doctor=$row['specialist_doctor'];
  $medical_officer=$row['medical_officer'];
  $dentist=$row['dentist'];
  $assistant_medical_officer=$row['assistant_medical_officer'];
  $nursing_officer=$row['nursing_officer'];
  $family_health_officer=$row['family_health_officer'];
  $laboratory_technician=$row['laboratory_technician'];
  $other_technician=$row['other_technician'];
  $pharmacist=$row['pharmacist'];
  $drug_compound=$row['drug_compound'];
  $establishment_staff=$row['establishment_staff'];
  $caretaker=$row['caretaker'];
  $general_hygiene=$row['general_hygiene'];
  $other_employees=$row['other_employees'];
  $other=$row['other'];
  $approved_staff=$row['approved_staff'];
  $deficit_number=$row['deficit_number'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>
              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $specialist_doctor; ?></td>
                  <td><?php echo $medical_officer; ?></td>
                  <td><?php echo $dentist; ?></td>
                  <td><?php echo $assistant_medical_officer; ?></td>
                  <td><?php echo $nursing_officer; ?></td>
                  <td><?php echo $family_health_officer; ?></td>
                  <td><?php echo $laboratory_technician; ?></td>
                  <td><?php echo $other_technician; ?></td>
                  <td><?php echo $pharmacist; ?></td>
                  <td><?php echo $drug_compound; ?></td>
                  <td><?php echo $establishment_staff; ?></td>
                  <td><?php echo $caretaker; ?></td>
                  <td><?php echo $general_hygiene; ?></td>
                  <td><?php echo $other_employees; ?></td>
                  <td><?php echo $other; ?></td>
                  <td><?php echo $approved_staff; ?></td>
                  <td><?php echo $deficit_number; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ආයුර්වේද වෛද්‍ය පහසුකම්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආයුර්වේද මධ්‍යස්ථානයේ නම</th>
                  <th>ආයුර්වේද වෛද්‍යවරුන් සංඛ්‍යාව</th>
                  <th>අනෙකුත් කාර්‍යය මණ්ඩලය</th>
                  <th>ප්‍රතිකාර ලැබූ රෝගීන් ගණන</th>
                  <th>වාට්ටු සංඛ්‍යාව</th>
                  <th>ඇදන් සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>  
<?php 
$q3 =$conn->query("SELECT * from ayurvedic WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $ayurvedic_center=$row['ayurvedic_center'];
  $ayurvedic_doctors=$row['ayurvedic_doctors'];
  $other_staff=$row['other_staff'];
  $patients_treated=$row['patients_treated'];
  $wards=$row['wards'];
  $bed=$row['bed'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $ayurvedic_center; ?></td>
                  <td><?php echo $ayurvedic_doctors; ?></td>
                  <td><?php echo $other_staff; ?></td>
                  <td><?php echo $patients_treated; ?></td>
                  <td><?php echo $wards; ?></td>
                  <td><?php echo $bed; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary"> ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය පුද්ගලික වෛද්‍ය සේවා මධ්‍යස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                 <th>ලියාපදිංචි වෛද්‍ය සේවා මධ්‍යස්ථාන - දේශීය(සිංහල)</th>
                 <th>ආයුර්වේද වෛද්‍ය</th>
                 <th>බටහිර වෛද්‍ය</th>
                 <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php
 $q3 =$conn->query("SELECT * from rural_private_medical WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $local_sinhala=$row['local_sinhala'];
   $ayurvedic_doctors=$row['ayurvedic_doctors'];
   $western_medicine=$row['western_medicine'];
   $other=$row['other'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $local_sinhala; ?></td>
                  <td><?php echo $ayurvedic_doctors; ?></td>
                  <td><?php echo $western_medicine; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස තුල වාර්තා වූ කොවිඩ් රෝගීන්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>වාර්තා වූ රෝගීන් සංඛ්‍යාව - ස්ත්‍රී</th>
                  <th>පුරුෂ</th>
                </tr>
              </thead>
              <tbody>   
<?php 
$q3 =$conn->query("SELECT * from covid_patient WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $patient_female=$row['patient_female'];
  $patient_male=$row['patient_male'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $patient_female; ?></td>
                  <td><?php echo $patient_male; ?></td>
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
if($type=='7'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">රජයේ රෝහල් වල සිදුවූ සජීවී,අජීවී,අඩු බර දරු උපත් සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>සජීවී උපත්</th>
                  <th>අජීවී උපත්</th>
                  <th>අඩුබර උපත්</th>
                </tr>
              </thead>
              <tbody>
<?php
 $q3 =$conn->query("SELECT * from live_births WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $live_births=$row['live_births'];
   $inanimate_births=$row['inanimate_births'];
   $low_birth_weight=$row['low_birth_weight'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $live_births; ?></td>
                  <td><?php echo $inanimate_births; ?></td>
                  <td><?php echo $low_birth_weight; ?></td>
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
if($type=='8'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස අනුව මාතෘ මරණ</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාසය</th>
                  <th>මාතෘ මරණ</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from maternal_death WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $medical_officer=$row['medical_officer'];
    $maternal_death=$row['maternal_death'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $medical_officer; ?></td>
                  <td><?php echo $maternal_death; ?></td>
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
if($type=='9'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">ජලභීතිකා රෝගය පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ජලභීතිකා එන්නත ලබාගත් පුද්ගලයින් සංඛ්‍යාව</th>
                  <th>ජලභීතිකා රෝගයෙන් මියගිය සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 
  $q3 =$conn->query("SELECT * from rabies WHERE year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $rabies_vaccine=$row['rabies_vaccine'];
    $rabies_death=$row['rabies_death'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $rabies_vaccine; ?></td>
                  <td><?php echo $rabies_death; ?></td>
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
if($type=='10'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">මැලේරියා,ඩෙංගු,ලාදුරු,බරවා හා ක්ෂය රෝගීන්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>මැලේරියා</th>
                  <th>ඩෙංගු</th>
                  <th>ලාදුරු</th>
                  <th>බරවා</th>
                  <th>ක්ෂයරෝගය</th>
                </tr>
              </thead>
              <tbody>
<?php 
  $q3 =$conn->query("SELECT * from dengue WHERE year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $malaria=$row['malaria'];
    $dengue=$row['dengue'];
    $leprosy=$row['leprosy'];
    $barawa=$row['barawa'];
    $tuberculosis=$row['tuberculosis'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $malaria; ?></td>
                  <td><?php echo $dengue; ?></td>
                  <td><?php echo $leprosy; ?></td>
                  <td><?php echo $barawa; ?></td>
                  <td><?php echo $tuberculosis; ?></td>
                 
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
if($type=='11'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">සායනවල ලියාපදිංචි බෝ නොවන රෝගීන්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>දියවැඩියාව</th>
                  <th>අධික රුධිර පීඩනය</th>
                  <th>කොලොස්ටරෝල්</th>
                  <th>වකුගඩු රෝග</th>
                  <th>පිළිකා</th>
                  <th>වෙනත් රෝග</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from patient_reg_clinics WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $diabetes=$row['diabetes'];
    $high_blood_pressure=$row['high_blood_pressure'];
    $cholesterol=$row['cholesterol'];
    $kidney_disease=$row['kidney_disease'];
    $cancer=$row['cancer'];
    $other=$row['other'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $diabetes; ?></td>
                  <td><?php echo $high_blood_pressure; ?></td>
                  <td><?php echo $cholesterol; ?></td>
                  <td><?php echo $kidney_disease; ?></td>
                  <td><?php echo $cancer; ?></td>
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
if($type=='12'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary"> සමාජ රෝග </h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පරීක්ෂා කරන ලද රෝගීන් ගණන</th>
                  <th>නියත රෝගීන් ගණන</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from social_diseases WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $patient_tested=$row['patient_tested'];
    $patient_absolute=$row['patient_absolute'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $patient_tested; ?></td>
                  <td><?php echo $patient_absolute; ?></td>
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