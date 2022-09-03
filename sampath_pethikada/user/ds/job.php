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

              <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 
          
                      <div class="input-group">
                         <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">වර්ෂය තෝරන්න</button>
                          <div class="dropdown-menu">
                          <center><a class="dropdown-item" href="job.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="job.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="job.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="job.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="job.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="job.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="job.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="job.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="job.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="job.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="job.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="job.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='job.php?type=1&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>රැකියා නියුක්තිය ප්‍රධාන අංශයන් අනුව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job.php?type=2&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>රැකියා වර්ගීකරණය හා රැකියා විරහිත ප්‍රමාණය</a>"; ?> 
 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job.php?type=3&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>විදේශගත රැකියා වල නියුතු නුපුහුණු ශ්‍රමිකයින්</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job.php?type=4&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විදේශගත රැකියා වල නියුතු පුහුණු ශ්‍රමිකයින්</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='job.php?type=5&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සේවා වියුක්තිය</a>"; ?> 

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
                  <h6 class="m-0 font-weight-bold text-primary">රැකියා නියුක්තිය ප්‍රධාන අංශයන් අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>කෘෂිකාර්මික අංශය</th>
                  <th>කාර්මික අංශය</th> 
                  <th>සේවා අංශය</th>
                  <th>මුලු සේවා අංශය</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from emp_major_sectors WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){

$agriculture=$row['agriculture'];
$industrial=$row['industrial'];
$services=$row['services'];
$tot_services_division=$row['tot_services_division'];
$year1=$row['year'];
$ds1=$row['ds'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds1; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year1; ?></td>
		              <td><?php echo $agriculture; ?></td>
                  <td><?php echo $industrial; ?></td>
                  <td><?php echo $services; ?></td>
                  <td><?php echo $tot_services_division; ?></td> 
                </tr>
                
                <?php }} ?>
                <tr>
                  <th>එකතුව</th>
                  <th></th>
                  <th></th>
                  <th><?php
    $sql1=$conn->query("SELECT sum(agriculture) as total FROM emp_major_sectors WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(industrial) as total FROM emp_major_sectors WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(services) as total FROM emp_major_sectors WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tot_services_division) as total FROM emp_major_sectors WHERE ds='$ds'");
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
                  <h6 class="m-0 font-weight-bold text-primary">රැකියා වර්ගීකරණය හා රැකියා විරහිත ප්‍රමාණය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>මුලු සේවා </th>
                  <th>රාජ්‍ය අංශය </th>
                  <th>අර්ධ රාජ්‍ය </th>
                  <th>පෞද්ගලික</th>
                  <th>ස්වයං රැකියා </th>
                  <th>සේවා වියුක්ති සංඛ්‍යාව </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td></td>
                  <td></td>
                  <td></td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td> 
                </tr>
<?php 

$q3 =$conn->query("SELECT * from unemployment_rate WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
 
$services_total_female=$row['services_total_female'];
$services_total_male=$row['services_total_male'];
$government_female=$row['government_female'];
$government_male=$row['government_male'];
$semi_government_female=$row['semi_government_female'];
$semi_government_male=$row['semi_government_male'];
$private_female=$row['private_female'];
$private_male=$row['private_male'];
$self_employment_female=$row['self_employment_female'];
$self_employment_male=$row['self_employment_male'];
$unemployment_female=$row['unemployment_female'];
$unemployment_male=$row['unemployment_male'];
$year2=$row['year'];
$ds2=$row['ds'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds2; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year2; ?></td>
                  <td><?php echo "$services_total_female  &ensp; , &ensp; $services_total_male"; ?></td>
                  <td><?php echo "$government_female  &ensp; , &ensp; $government_male"; ?></td>
                  <td><?php echo "$semi_government_female  &ensp; , &ensp; $semi_government_male"; ?></td>
                  <td><?php echo "$private_female  &ensp; , &ensp; $private_male"; ?></td>
                  <td><?php echo "$self_employment_female  &ensp; , &ensp; $self_employment_male"; ?></td>
                  <td><?php echo "$unemployment_female  &ensp; , &ensp; $unemployment_male"; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(services_total_female) as total FROM unemployment_rate WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(services_total_male) as total FROM unemployment_rate WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>


<th><?php
    $sql1=$conn->query("SELECT sum(government_female) as total FROM unemployment_rate WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(government_male) as total FROM unemployment_rate WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>


<th><?php
    $sql1=$conn->query("SELECT sum(semi_government_female) as total FROM unemployment_rate WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(semi_government_male) as total FROM unemployment_rate WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(private_female) as total FROM unemployment_rate WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(private_male) as total FROM unemployment_rate WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(self_employment_female) as total FROM unemployment_rate WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(self_employment_male) as total FROM unemployment_rate WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(unemployment_female) as total FROM unemployment_rate WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(unemployment_male) as total FROM unemployment_rate WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>
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
if($type=='3'){
?>  

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">විදේශගත රැකියා වල නියුතු නුපුහුණු ශ්‍රමිකයින්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>වර්ෂය</th>
                  <th>මැද පෙර දිග </th>
                  <th>කොරියාව </th>
                  <th>යුරෝපය </th>
                  <th>වෙනත් </th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                <td></td>
                  <td></td>
                  <td></td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>
<?php 

$q3 =$conn->query("SELECT * from unskilled_abroad_emp WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){

$female_me_nt=$row['female_me_nt'];
$male_me_nt=$row['male_me_nt'];
$female_korea_nt=$row['female_korea_nt'];
$male_korea_nt=$row['male_korea_nt'];
$female_europe_nt=$row['female_europe_nt'];
$male_europe_nt=$row['male_europe_nt'];
$female_other_country_nt=$row['female_other_country_nt'];
$male_other_country_nt=$row['male_other_country_nt'];
$year3=$row['year'];
$ds3=$row['ds'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds3; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year3; ?></td>
                  <td><?php echo "$female_me_nt  &ensp; , &ensp; $male_me_nt"; ?></td>
                  <td><?php echo "$female_korea_nt  &ensp; , &ensp; $male_korea_nt"; ?></td>
                  <td><?php echo "$female_europe_nt  &ensp; , &ensp; $male_europe_nt"; ?></td>
                  <td><?php echo "$female_other_country_nt  &ensp; , &ensp; $male_other_country_nt"; ?></td>
                </tr>
               
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_me_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_me_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_korea_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_korea_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_europe_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_europe_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_other_country_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_other_country_nt) as total FROM unskilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>
</tr>
                </tbody>
              </table>
            
                </div>
              </div>
            </div>
          
          <!--Row-->


<?php } ?>




<!-- ============================================================= -->
<?php 
if($type=='4'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">විදේශගත රැකියා වල නියුතු පුහුණු ශ්‍රමිකයින්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>මැද පෙර දිග</th>
                  <th>කොරියාව </th>
                  <th>යුරෝපය </th>
                  <th>වෙනත් </th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td></td>
                  <td></td>
                  <td></td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>
<?php 

$q3 =$conn->query("SELECT * from skilled_abroad_emp WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){


$female_me_skilled=$row['female_me_skilled'];
$male_me_skilled=$row['male_me_skilled'];
$female_korea_skilled=$row['female_korea_skilled'];
$male_korea_skilled=$row['male_korea_skilled'];
$female_europe_skilled=$row['female_europe_skilled'];
$male_europe_skilled=$row['male_europe_skilled'];
$female_other_country_skilled=$row['female_other_country_skilled'];
$male_other_country_skilled=$row['male_other_country_skilled'];
$year4=$row['year'];
$ds4=$row['ds'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds4; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year4; ?></td>
		              <td><?php echo "$female_me_skilled  &ensp; , &ensp; $male_me_skilled"; ?></td>
                  <td><?php echo "$female_korea_skilled  &ensp; , &ensp; $male_korea_skilled"; ?></td>
                  <td><?php echo "$female_europe_skilled  &ensp; , &ensp; $male_europe_skilled"; ?></td>
                  <td><?php echo "$female_other_country_skilled  &ensp; , &ensp; $male_other_country_skilled"; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_me_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_me_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_korea_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_korea_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_europe_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_europe_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_other_country_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_other_country_skilled) as total FROM skilled_abroad_emp WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>
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
                  <h6 class="m-0 font-weight-bold text-primary">සේවා වියුක්තිය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>අවු. 18-25 </th>
                  <th>අවු. 26-40</th>
                  <th>අවු. 41-60</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td></td>
                  <td></td>
                  <td></td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>
<?php 

$q3 =$conn->query("SELECT * from unemployment WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){


$female_eighteen_twentyfive=$row['female_eighteen_twentyfive'];
$male_eighteen_twentyfive=$row['male_eighteen_twentyfive'];
$female_twentysix_forty=$row['female_twentysix_forty'];
$male_twentysix_forty=$row['male_twentysix_forty'];
$female_fortyone_sixty=$row['female_fortyone_sixty'];
$male_fortyone_sixty=$row['male_fortyone_sixty'];
$year5=$row['year'];
$ds5=$row['ds'];
$gnd=$row['gnda'];

?>

             
                <tr>
                  <td><?php echo $ds5; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year5; ?></td>
                  <td><?php echo "$female_eighteen_twentyfive  &ensp; , &ensp; $male_eighteen_twentyfive"; ?></td>
                  <td><?php echo "$female_twentysix_forty  &ensp; , &ensp; $male_twentysix_forty"; ?></td>
                  <td><?php echo "$female_fortyone_sixty  &ensp; , &ensp; $male_fortyone_sixty"; ?></td>
                </tr>
               
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_eighteen_twentyfive) as total FROM unemployment WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_eighteen_twentyfive) as total FROM unemployment WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_twentysix_forty) as total FROM unemployment WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_twentysix_forty) as total FROM unemployment WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_fortyone_sixty) as total FROM unemployment WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_fortyone_sixty) as total FROM unemployment WHERE ds='$ds'");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $row['total'];
      
    }
  } 

    ?></th>
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