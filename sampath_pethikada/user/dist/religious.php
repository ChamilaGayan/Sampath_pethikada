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
                  <i class="mdi mdi-brightness-5"></i>
                </span> ආගමික
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
                          <center><a class="dropdown-item" href="religious.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="religious.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="religious.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="religious.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="religious.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="religious.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="religious.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="religious.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="religious.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="religious.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="religious.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="religious.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='religious.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස තුල ආගමික මධ්‍යස්ථාන වල ව්‍යාප්තිය</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>බෞද්ධ විහාරස්ථාන පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>හින්දු ආගමික සිද්ධස්ථාන</a>"; ?> 

                </div>
            </div>

        </div>
          
        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කතෝලික දේවස්ථාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'> ඉස්ලාම් ආගමික මධ්‍යස්ථාන </a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'> ප්‍රතිසංස්කරණය කල යුතු ආගමික ස්ථාන </a>"; ?> 
                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'> ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටි සංස්කෘතික කලායතන තොරතුරු </a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාසය තුල සිටින විශේෂිත කලාකරුවන් පිළිබද තොරතුරු</a>"; ?> 

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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස තුල ආගමික මධ්‍යස්ථාන වල ව්‍යාප්තිය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>බෞද්ධ විහාරස්ථාන සංඛ්‍යාව</th>
                  <th>කෝවිල් සංඛ්‍යාව</th>
                  <th>දේවස්ථාන සංඛ්‍යාව</th>
                  <th>මුස්ලිම් පල්ලි සංඛ්‍යාව</th>
                  <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody> 
<?php 

$q3 =$conn->query("SELECT * from religious_centers WHERE year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id1=$row['id'];
    $buddhist_temples=$row['buddhist_temples'];
    $hindu_temples=$row['hindu_temples'];
    $catholic_churches=$row['catholic_churches'];
    $mosques=$row['mosques'];
    $other=$row['other'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnd'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
                  <td><?php echo $buddhist_temples; ?></td>
                  <td><?php echo $hindu_temples; ?></td>
		              <td><?php echo $catholic_churches; ?></td>
                  <td><?php echo $mosques; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">බෞද්ධ විහාරස්ථාන පිළිබද තොරතුරු </h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආගමික ස්ථානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක අංකය</th>
                  <th>දහම්පාසලේ නම</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from buddhist_temples WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id2=$row['id'];
  $name=$row['name'];
  $addres=$row['addres'];
  $contact=$row['contact'];
  $dhamma_school=$row['dhamma_school'];
  $no_students=$row['no_students'];
  $no_teachers=$row['no_teachers'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnd'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $dhamma_school; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">හින්දු ආගමික සිද්ධස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආගමික ස්ථානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක අංකය</th>
                  <th>දහම්පාසලේ නම</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from hindu_religious_shrines WHERE year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id3=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        $dhamma_school=$row['dhamma_school'];
                        $no_students=$row['no_students'];
                        $no_teachers=$row['no_teachers'];
                        $year=$row['year'];
                        $ds=$row['ds'];
                        $gnd=$row['gnd'];
?>
              
                <tr>
                <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $dhamma_school; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">කතෝලික දේවස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආගමික ස්ථානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක අංකය</th>
                  <th>දහම්පාසලේ නම</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                  
                </tr>
              </thead>
              <tbody>  
<?php 

$q3 =$conn->query("SELECT * from catholic_churches WHERE year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id4=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        $dhamma_school=$row['dhamma_school'];
                        $no_students=$row['no_students'];
                        $no_teachers=$row['no_teachers'];
                        $year=$row['year'];
                        $ds=$row['ds'];
                        $gnd=$row['gnd'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $dhamma_school; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
                 
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
                  <h6 class="m-0 font-weight-bold text-primary">ඉස්ලාම් ආගමික මධ්‍යස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආගමික ස්ථානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක අංකය</th>
                  <th>දහම්පාසලේ නම</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php

$q3 =$conn->query("SELECT * from islamic_religious_centers WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id5=$row['id'];
  $name=$row['name'];
  $addres=$row['addres'];
  $contact=$row['contact'];
  $dhamma_school=$row['dhamma_school'];
  $no_students=$row['no_students'];
  $no_teachers=$row['no_teachers'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnd'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $dhamma_school; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary"> ප්‍රතිසංස්කරණය කල යුතු ආගමික ස්ථාන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ආගමික ස්ථානයේ නම</th>
                  <th>ප්‍රතිසංස්කරණ අවශ්‍යතාව</th>
                </tr>
              </thead>
              <tbody>   
<?php 

$q3 =$conn->query("SELECT * from religious_places_renovated WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id6=$row['id'];
  $name=$row['name'];
  $reason=$row['reason'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnd'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $reason; ?></td>
                  
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටි සංස්කෘතික කලායතන තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>සංස්කෘතික මධ්‍යස්ථානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක.අංකය</th>
                  <th>පැවැත්වෙන පාඨමාලාවන්</th>
                </tr>
              </thead>
              <tbody>
<?php

$q3 =$conn->query("SELECT * from cultural_arts_institute WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $name=$row['name'];
  $addres=$row['addres'];
  $contact=$row['contact'];
  $caurses=$row['caurses'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnd'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $caurses; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසය තුල සිටින විශේෂිත කලාකරුවන් පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>කලාකරුවාගේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක.අංකය</th>
                  <th>අංශය</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from specific_artists WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $name=$row['name'];
  $addres=$row['addres'];
  $contact=$row['contact'];
  $division=$row['division'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnd'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $division; ?></td>
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