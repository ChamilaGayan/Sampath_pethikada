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
                  <i class="mdi mdi-home-modern"></i>
                </span> නිවාස ඒකක

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
                          <center><a class="dropdown-item" href="house_unit.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="house_unit.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="house_unit.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="house_unit.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="house_unit.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="house_unit.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="house_unit.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="house_unit.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="house_unit.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="house_unit.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="house_unit.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="house_unit.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='house_unit.php?type=8&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>නිවාස ඒකක</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=3&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>නිවාස ඒකක වර්ගය අනුව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=1&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ආලෝකය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</a>"; ?> 
                </div>
            </div>

        </div>

        <div class="row">

        <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>නිවාස ඉදිකිරීම සදහා යොදා ගෙන ඇති ප්‍රධාන ද්‍රව්‍ය අනුව</a>"; ?> 
 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=4&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>නිවාස වහල ඉදිකිරීම සදහා යොදා ඇති ද්‍රව්‍ය අනුව</a>"; ?> 

                  
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=5&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>බීමට ජලය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</a>"; ?> 

                </div>
            </div>
</div>

<div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වැසිකිළි පහසුකම් අනුව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='house_unit.php?type=7&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>නිවසේ අයිතිය අනුව</a>"; ?> 

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
                  <h6 class="m-0 font-weight-bold text-primary">ආලෝකය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව </h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>විදුලිය</th>
                  <th>භූමි තෙල්</th>
                  <th>සූර්ය බලශක්තිය</th>
                  <th>වෙනත්</th>
                  <th>විදුලිය නොමැති</th>
                </tr>
              </thead>
              <tbody> 
<?php 

$q1 =$conn->query("SELECT * from source_light WHERE year='$year_update' AND ds='$ds'");
if($q1 !== false && $q1->num_rows > 0){
while($row=$q1->fetch_assoc()){

$year1=$row['year'];
$ds1=$row['ds'];
$house_unitsr=$row['house_units'];
$electricityr=$row['electricity'];
$lamp_oilr=$row['lamp_oil'];
$solar_powerr=$row['solar_power'];
$other_powerr=$row['other_power'];
$no_electricityr=$row['no_electricity'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds1; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year1; ?></td>
                  <td><?php echo $house_unitsr; ?></td>
                  <td><?php echo $electricityr; ?></td>
		              <td><?php echo $solar_powerr; ?></td>
                  <td><?php echo $other_powerr; ?></td>
                  <td><?php echo $no_electricityr; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>


<th><?php
    $sql1=$conn->query("SELECT sum(electricity) as total FROM source_light WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(lamp_oil) as total FROM source_light WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(solar_power) as total FROM source_light WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(other_power) as total FROM source_light WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(no_electricity) as total FROM source_light WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">නිවාස ඉදිකිරීම සදහා යොදා ගෙන ඇති ප්‍රධාන ද්‍රව්‍ය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>කල් පවතින ද්‍රව්‍ය (ගඩොල්, සිමෙන්ති ගල්/කලු ගල්, මැටි ගල්, කබොක්/වෙනත්)</th>
                  <th>කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q2 =$conn->query("SELECT * from materials_used_houses WHERE year='$year_update' AND ds='$ds'");
  if($q2 !== false && $q2->num_rows > 0){
  while($row=$q2->fetch_assoc()){
  
  $year2=$row['year'];
  $ds2=$row['ds'];
  $durable_houser=$row['durable_house'];
  $non_durable_houser=$row['non_durable_house'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds2; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year2; ?></td>
		              <td><?php echo $durable_houser; ?></td>
                  <td><?php echo $non_durable_houser; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
<th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(durable_house) as total FROM materials_used_houses WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(non_durable_house) as total FROM materials_used_houses WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>


</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">නිවාස ඒකක වර්ගය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>තනි නිවාස</th>
                  <th>යුගල නිවාස/පේලි නිවාස/ලයින් කාමර</th>
                  <th>පැල්පත් නිවාස/මුඩුක්කු නිවාස</th>
                  <th>අනුයුක්ත නිවාස/උප ගෘහ</th>
                  <th>තට්ටු නිවාස/සුපිරි නිවාස</th>
                  <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from housing_unit WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
  
$year3=$row['year'];
$ds3=$row['ds'];
$individual_housesr=$row['individual_houses'];
$pair_housesr=$row['pair_houses'];
$shanty_housesr=$row['shanty_houses'];
$appropriate_housesr=$row['appropriate_houses'];
$apartmentsr=$row['apartments'];
$other_housesr=$row['other_houses'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds3; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year3; ?></td>
		              <td><?php echo $individual_housesr; ?></td>
                  <td><?php echo $pair_housesr; ?></td>
                  <td><?php echo $shanty_housesr; ?></td>
                  <td><?php echo $appropriate_housesr; ?></td>
                  <td><?php echo $apartmentsr; ?></td>
                  <td><?php echo $other_housesr; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(individual_houses) as total FROM housing_unit WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(pair_houses) as total FROM housing_unit WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(shanty_houses) as total FROM housing_unit WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(appropriate_houses) as total FROM housing_unit WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(apartments) as total FROM housing_unit WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(other_houses) as total FROM housing_unit WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">නිවාස වහල ඉදිකිරීම සදහා යොදා ඇති ද්‍රව්‍ය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>කල් පවතින ද්‍රව්‍ය (උලු,ඇස්බැස්ටෝස්,ටකරන්,කොන්ක්‍රීට්,ඇලුමිනියම් මිශ්‍ර තහඩු)</th>
                  <th>කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</th>
                </tr>
              </thead>
              <tbody>  
<?php 

$q4 =$conn->query("SELECT * from material_used_roof WHERE year='$year_update' AND ds='$ds'");
if($q4 !== false && $q4->num_rows > 0){
while($row=$q4->fetch_assoc()){

$year4=$row['year'];
$ds4=$row['ds'];
$durable_roofr=$row['durable_roof'];
$non_durable_roofr=$row['non_durable_roof'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds4; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year4; ?></td>
		              <td><?php echo $durable_roofr; ?></td>
                  <td><?php echo $non_durable_roofr; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(durable_roof) as total FROM material_used_roof WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(non_durable_roof) as total FROM material_used_roof WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>


</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">බීමට ජලය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ළිඳ - ආරක්ෂිත , අනාරක්ෂිත</th>
                  <th>ප්‍රධාන නල ජලය</th>
                  <th>ග්‍රාමීය ජල ව්‍යාපෘති</th>
                  <th>නළ ළිඳ</th>
                  <th>බෝතල් කල ජලය</th>
                  <th>වැව්/ගංගා/ඇල/දොල/බුබුළු ආදී වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q5 =$conn->query("SELECT * from source_drinking_water WHERE year='$year_update' AND ds='$ds'");
if($q5 !== false && $q5->num_rows > 0){
while($row=$q5->fetch_assoc()){

$year5=$row['year'];
$ds5=$row['ds'];
$wellr=$row['well'];
$main_pipe_waterr=$row['main_pipe_water'];
$rural_water_projectsr=$row['rural_water_projects'];
$tube_wellr=$row['tube_well'];
$bottled_waterr=$row['bottled_water'];
$riverr=$row['river'];
$gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds5; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year5; ?></td>
		              <td><?php echo $wellr; ?></td>
                  <td><?php echo $main_pipe_waterr; ?></td>
                  <td><?php echo $rural_water_projectsr; ?></td>
                  <td><?php echo $tube_wellr; ?></td>
                  <td><?php echo $bottled_waterr; ?></td>
                  <td><?php echo $riverr; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>

  <th><?php
    $sql1=$conn->query("SELECT sum(well) as total FROM source_drinking_water WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(main_pipe_water) as total FROM source_drinking_water WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(rural_water_projects) as total FROM source_drinking_water WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tube_well) as total FROM source_drinking_water WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(bottled_water) as total FROM source_drinking_water WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(river) as total FROM source_drinking_water WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">වැසිකිළි පහසුකම් අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>නිවාස ඒකකයට වැසිකිළියක් ඇත (ගෘහ කාණ්ඩයේ තනි ප්‍රයෝජනයට, වෙනත් ගෘහ කාණ්ඩ සමග හවුලේ)</th>
                  <th>නිවාස ඒකකයට වැසිකිළියක් ඇති අතර වෙනත් ගෘහ කාණ්ඩ සමග හවුලේ </th>
                  <th>පොදු/ප්‍රසිද්ධ/තාවකාලික වැසිකිළි</th>
                  <th>වැසිකිළි භාවිතා නො කරන</th>
                </tr>
              </thead>
              <tbody>   
<?php 

$q6 =$conn->query("SELECT * from toilet_facilities WHERE year='$year_update' AND ds='$ds'");
  if($q6 !== false && $q6->num_rows > 0){
  while($row=$q6->fetch_assoc()){
  
    $year6=$row['year'];
    $ds6=$row['ds'];
    $has_a_toiletr=$row['has_a_toilet'];
    $has_a_toilet_sharedr=$row['has_a_toilet_shared'];
    $public_toiletr=$row['public_toilet'];
    $not_using_toiletr=$row['not_using_toilet'];
    $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds6; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year6; ?></td>
		              <td><?php echo $has_a_toiletr; ?></td>
                  <td><?php echo $has_a_toilet_sharedr; ?></td>
                  <td><?php echo $public_toiletr; ?></td>
                  <td><?php echo $not_using_toiletr; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
 <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(has_a_toilet) as total FROM toilet_facilities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(has_a_toilet_shared) as total FROM toilet_facilities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(public_toilet) as total FROM toilet_facilities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(not_using_toilet) as total FROM toilet_facilities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">නිවසේ අයිතිය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>සින්නක්කර</th>
                  <th>බදු</th>
                  <th>කුලී</th>
                  <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q7 =$conn->query("SELECT * from house_ownership  WHERE year='$year_update' AND ds='$ds'");
  if($q7 !== false && $q7->num_rows > 0){
  while($row=$q7->fetch_assoc()){

    $year7=$row['year'];
    $ds7=$row['ds'];
    $freelancerr=$row['freelancer'];
    $taxr=$row['tax'];
    $rentr=$row['rent'];
    $other_unitsr=$row['other_units'];
    $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds7; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year7; ?></td>
		              <td><?php echo $freelancerr; ?></td>
                  <td><?php echo $taxr; ?></td>
                  <td><?php echo $rentr; ?></td>
                  <td><?php echo $other_unitsr; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
<th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(freelancer) as total FROM house_ownership WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tax) as total FROM house_ownership WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(rent) as total FROM house_ownership WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(other_units) as total FROM house_ownership WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

</tr>
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
                  <h6 class="m-0 font-weight-bold text-primary">නිවාස ඒකක</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>නිවාස ඒකක</th>
                  <th>පවුල් සංඛ්‍යාව</th>
                  
                </tr>
              </thead>
              <tbody>
<?php 

$q1 =$conn->query("SELECT * from tot_hous_units WHERE year='$year_update' AND ds='$ds'");
if($q1 !== false && $q1->num_rows > 0){
while($row=$q1->fetch_assoc()){

  $year8=$row['year'];
  $ds8=$row['ds'];
  $tot_house_unitsr=$row['tot_house_units'];
  $tot_familiesr=$row['tot_families'];
  $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds8; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year8; ?></td>
		              <td><?php echo $tot_house_unitsr; ?></td>
                  <td><?php echo $tot_familiesr; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
<th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(tot_house_units) as total FROM tot_hous_units WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tot_families) as total FROM tot_hous_units WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>


</tr>
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