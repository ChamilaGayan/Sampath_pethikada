<?php
error_reporting(0);
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
                  <i class="mdi mdi-account-multiple"></i>
                </span> ජනගහනය
                <?php 
    $year=$_GET['year'];
    echo"<br>";
    echo "<h5>$year වර්ෂය</h5>";
    ?>
              </h3>

            <form action="" name="13" method="post" class="signin-form" enctype="multipart/form-data"> 
          
                      <div class="input-group">
                         <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">වර්ෂය තෝරන්න</button>
                          <div class="dropdown-menu">
                            <center><a class="dropdown-item" href="population.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="population.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="population.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="population.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="population.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="population.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="population.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="population.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="population.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="population.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="population.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="population.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='population.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>මුලු ජනගහනය </a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=4&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>අංශය අනුව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=6&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ජන වර්ගය අනුව</a>"; ?> 

                </div>
            </div>

        </div>
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=3&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ආගම අනුව ජනගහනය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=2&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>අධ්‍යාපන මට්ටම අනුව වැඩිහිටි ජනගහනය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=7&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වයස් කාණ්ඩය අනුව ජනගහනය</a>"; ?> 
                  
                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=5&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ඡන්ද හිමි නාමලේඛනය අනුව</a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විදේශගත ජනගහනය</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විශ්‍රාමික ජනගහනය</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>යැපීම් අනුපාතය</a>"; ?> 

                </div>
            </div>

        </div>

        </form>

<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?> 

  <!-- DataTable with Hover -->
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">මුලු ජනගහනය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ස්ත්‍රී</th>
                  <th>පුරුෂ</th>
                  <th>එකතුව</th>
                </tr>
              </thead>
              <tbody>   
<?php 
//total_population
$q1 =$conn->query("SELECT * from total_population WHERE year='$year_update'");
if($q1 !== false && $q1->num_rows > 0){
while($row=$q1->fetch_assoc()){

$fml=$row['female'];
$ml=$row['male'];
$year1=$row['year'];
$ds1=$row['ds'];
$gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds1; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year1; ?></td>
		              <td><?php echo $fml; ?></td>
                  <td><?php echo $ml; ?></td>
                  <td><?php echo $fml + $ml; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
 <th></th>

  <th><?php
    $sql1=$conn->query("SELECT sum(female) as total FROM total_population");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f= $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(male) as total FROM total_population");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $m= $row['total'];
      }
    } ?></th>
    <th>
      <?php
      echo $f + $m;
      ?>
    </th>
    </tr>
                </tbody>
              </table>
            
                </div>
              </div>
            </div>
          
          <!--Row-->

<?php } ?>
<!-- ============================================================= -->


<!-- ============================================================== -->

<?php 
if($type=='2'){
?>

<!-- DataTable with Hover -->
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">අධ්‍යාපන මට්ටම අනුව වැඩිහිටි ජනගහනය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පාසල් අධ්‍යාපනය නො ලැබූ</th>
                  <th>1-5 ශ්‍රේණි </th>             
                  <th>6-10 ශ්‍රේණි </th>
                  <th>සා/පෙල දක්වා </th>
                  <th>උ/පෙල දක්වා </th>
                  <th>උපාධි/පශ්චාත් උපාධි/වෘත්තීය පුහුණු</th>
                  <th>එකතුව</th>
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
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>
<?php 
//adult_population_education
$q2 =$conn->query("SELECT * from adult_population_education WHERE year='$year_update'");
if($q2 !== false && $q2->num_rows > 0){
while($row=$q2->fetch_assoc()){

  $female_notedur=$row['female_notedu'];
  $male_notedur=$row['male_notedu'];
  $female_one_fiver=$row['female_one_five'];
  $male_one_fiver=$row['male_one_five'];
  $female_six_tenr=$row['female_six_ten'];
  $male_six_tenr=$row['male_six_ten'];
  $female_olr=$row['female_ol'];  
  $male_olr=$row['male_ol'];
  $female_alr=$row['female_al'];
  $male_alr=$row['male_al'];
  $female_degreer=$row['female_degree'];
  $male_degreer=$row['male_degree'];
  $year2=$row['year'];
  $ds2=$row['ds'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds2; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year2; ?></td>
		              <td><?php echo "$female_notedur &ensp; , &ensp; $male_notedur";?> </td>
                  <td><?php echo "$female_one_fiver   &ensp; , &ensp;  $male_one_fiver"; ?></td>
                  <td><?php echo "$female_six_tenr   &ensp; , &ensp;  $male_six_tenr"; ?></td>
                  <td><?php echo "$female_olr   &ensp; , &ensp;  $male_olr"; ?></td>
                  <td><?php echo "$female_alr  &ensp; , &ensp;   $male_alr"; ?></td>
                  <td><?php echo "$female_degreer  &ensp; , &ensp;   $male_degreer"; ?></td>
                  <td><?php echo  $female_notedur+$female_one_fiver+$female_six_tenr+$female_olr+$female_alr+$female_degreer; echo "&ensp; , &ensp;"; echo $male_notedur+$male_one_fiver+$male_six_tenr+$male_olr+$male_alr+$male_degreer; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
                  <th>එකතුව</th>
                  <th></th>
                  <th></th>
                  <th><?php
    $sql1=$conn->query("SELECT sum(female_notedu) as total FROM adult_population_education");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1 = $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_notedu) as total FROM adult_population_education");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1= $row['total'];
      
    }
  } 

    ?></th>


<th><?php
    $sql1=$conn->query("SELECT sum(female_one_five) as total FROM adult_population_education");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f2= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_one_five) as total FROM adult_population_education");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m2= $row['total'];
      
    }
  } 

    ?></th>


<th><?php
    $sql1=$conn->query("SELECT sum(female_six_ten) as total FROM adult_population_education");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f3= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_six_ten) as total FROM adult_population_education");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m3= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_ol) as total FROM adult_population_education");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f4= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_ol) as total FROM adult_population_education");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m4= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_al) as total FROM adult_population_education");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f5= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_al) as total FROM adult_population_education");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m5= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_degree) as total FROM adult_population_education");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f6= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_degree) as total FROM adult_population_education");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m6= $row['total'];
      
    }
  } 

    ?></th>

<th>
  <?php
  echo $f1+$f2+$f3+$f4+$f5+$f6;  
  ?>

&ensp; , &ensp;

  <?php
  echo $m1+$m2+$m3+$m4+$m5+$m6;
  ?>

</th>
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

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">ආගම අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>බෞද්ධ </th>
                  <th>හින්දු </th>
                  <th>ඉස්ලාම් </th>
                  <th>රෝමානු කතෝලික </th>
                  <th>ක්‍රිස්තියානි</th>
                  <th>වෙනත් </th>
                  <th>එකතුව</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>

              <?php 
//population_religion
$q3 =$conn->query("SELECT * from population_religion WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){

  $female_buddhistr=$row['female_buddhist'];
  $male_buddhistr=$row['male_buddhist'];
  $female_tamilr=$row['female_tamil'];
  $male_tamilr=$row['male_tamil'];
  $female_muslimr=$row['female_muslim'];
  $male_muslimr=$row['male_muslim'];
  $female_romer=$row['female_rome'];
  $male_romer=$row['male_rome'];
  $female_cristianr=$row['female_cristian'];
  $male_cristianr=$row['male_cristian'];
  $female_otherr=$row['female_other'];
  $male_otherr=$row['male_other'];
  $year3=$row['year'];
  $ds3=$row['ds'];
  $gnd=$row['gnda'];
              ?>
              
                <tr>
                  <td><?php echo $ds3; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year3; ?></td>
                  <td><?php echo "$female_buddhistr &ensp; , &ensp; $male_buddhistr"; ?></td>
                  <td><?php echo "$female_tamilr &ensp; , &ensp; $male_tamilr"; ?></td>
                  <td><?php echo "$female_muslimr &ensp; , &ensp; $male_muslimr"; ?></td>
                  <td><?php echo "$female_romer &ensp; , &ensp; $male_romer"; ?></td>
                  <td><?php echo "$female_cristianr &ensp; , &ensp; $male_cristianr"; ?></td>
                  <td><?php echo "$female_otherr &ensp; , &ensp; $male_otherr"; ?></td>
                  <td><?php echo $female_buddhistr+$female_tamilr+$female_muslimr+$female_romer+$female_cristianr+$female_otherr ; echo"&ensp; , &ensp;"; echo $male_buddhistr+$male_tamilr+$male_muslimr+$male_romer+$male_cristianr+$male_otherr; ?></td>
                </tr>
                

                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_buddhist) as total FROM population_religion");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_buddhist) as total FROM population_religion");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_tamil) as total FROM population_religion");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f2= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_tamil) as total FROM population_religion");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m2= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_muslim) as total FROM population_religion");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f3= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_muslim) as total FROM population_religion");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m3= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_rome) as total FROM population_religion");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f4= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_rome) as total FROM population_religion");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m4= $row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_cristian) as total FROM population_religion");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f5= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_cristian) as total FROM population_religion");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m5= $row['total'];
      
    }
  }

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_other) as total FROM population_religion");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f6= $row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_other) as total FROM population_religion");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m6= $row['total'];
      
    }
  }

    ?></th>

    <th>
    <?php
  echo $f1+$f2+$f3+$f4+$f5+$f6;  
  ?>

&ensp; , &ensp;

  <?php
  echo $m1+$m2+$m3+$m4+$m5+$m6;
  ?>
    </th>
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

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">අංශය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>නාගරික</th>
                  <th>ග්‍රාමීය</th>
                  <th>වතු</th>
                  <th>එකතුව</th>
                  <th>භූමි ඝනත්වය(හෙක්.)</th>
                  <th>ජන ඝනත්වය(හෙක්.)</th>
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
                  <td></td>
                  <td></td>
                </tr>
<?php
//population_ds
$q4 =$conn->query("SELECT * from population_ds WHERE year='$year_update'");
if($q4 !== false && $q4->num_rows > 0){
while($row=$q4->fetch_assoc()){

  $female_townr=$row['female_town'];
  $male_townr=$row['male_town'];
  $female_ruralr=$row['female_rural'];
  $male_ruralr=$row['male_rural'];
  $female_estatesr=$row['female_estates'];
  $male_estatesr=$row['male_estates'];
  $land_densityr=$row['land_density'];
  $population_densityr=$row['population_density'];
  $year4=$row['year'];
  $ds4=$row['ds'];
  $gnd=$row['gnda'];
?>

                <tr>
                  <td><?php echo $ds4; ?></td>  
                  <td><?php echo $gnd; ?></td>  
                  <td><?php echo $year4; ?></td>
                  <td><?php echo "$female_townr  &ensp; , &ensp; $male_townr"; ?></td>
                  <td><?php echo "$female_ruralr  &ensp; , &ensp; $male_ruralr"; ?></td>
                  <td><?php echo "$female_estatesr  &ensp; , &ensp; $male_estatesr"; ?></td>
                  <td><?php echo $female_townr+$female_ruralr+$female_estatesr; echo "&ensp; , &ensp;"; echo $male_townr+$male_ruralr+$male_estatesr; ?></td>
                  <td><?php echo $land_densityr; ?></td>
                  <td><?php echo $population_densityr; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_town) as total FROM population_ds");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";
      
    $sql1=$conn->query("SELECT sum(male_town) as total FROM population_ds");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1=$row['total'];
      
    }
  }

    ?></th>
    <th><?php
    $sql1=$conn->query("SELECT sum(female_rural) as total FROM population_ds");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f2=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_rural) as total FROM population_ds");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m2= $row['total'];     
    
    }
  } 

    ?></th>
    <th><?php
    $sql1=$conn->query("SELECT sum(female_estates) as total FROM population_ds");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f3=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_estates) as total FROM population_ds");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m3=$row['total'];
      
    }
  } 

    ?></th>
 <th>
 <?php
  echo $f1+$f2+$f3;  
  ?>

&ensp; , &ensp;

  <?php
  echo $m1+$m2+$m3;
  ?>
 </th>
<th><?php
    $sql1=$conn->query("SELECT sum(land_density) as total FROM population_ds");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(population_density) as total FROM population_ds");
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
<?php 
$type=$_GET['type'];
if($type=='5'){
?>

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">ඡන්ද හිමි නාමලේඛනය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ඡන්ද හිමි සංඛ්‍යාව </th>
                  <th>එකතුව</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>ස්ත්‍රී,පුරුෂ</td>
                  <td></td>
                </tr>
<?php 
//population_electoral_roll
$q5 =$conn->query("SELECT * from population_electoral_roll WHERE year='$year_update'");
if($q5 !== false && $q5->num_rows > 0){
while($row=$q5->fetch_assoc()){

  $female_voter=$row['female_vote'];
  $male_voter=$row['male_vote'];
  $year5=$row['year'];
  $ds5=$row['ds'];
  $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds5; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year5; ?></td>
                  <td><?php echo " $female_voter &ensp; , &ensp; $male_voter"; ?></td>
                  <td><?php echo $female_voter+$male_voter; ?></td>
                </tr>
                <tr>
                  <th>එකතුව</th>
                  <th></th>
                  <th></th>
                  <th><?php
    $sql1=$conn->query("SELECT sum(female_vote) as total FROM population_electoral_roll");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_vote) as total FROM population_electoral_roll");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m=$row['total'];
      
    }
  } 

    ?></th>
                  <th>
                    <?php
                        echo $f+$m;
                    ?>
                  </th>
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
if($type=='6'){
?>

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">ජන වර්ගය අනුව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>සිංහල </th>
                  <th>ශ්‍රිලංකා දෙමළ </th>
                  <th>ඉන්දියානු දෙමළ </th>
                  <th>ශ්‍රිලංකා යෝනක </th>
                  <th>බර්ගර් </th>
                  <th>වෙනත් </th>
                  <th>එකතුව</th>
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
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>
            <?php 
            //population_ethnicity
$q6 =$conn->query("SELECT * from population_ethnicity WHERE year='$year_update'");
if($q6 !== false && $q6->num_rows > 0){
while($row=$q6->fetch_assoc()){

  $female_sinhalar=$row['female_sinhala'];
  $male_sinhalar=$row['male_sinhala'];
  $female_sltamilr=$row['female_sltamil'];
  $male_sltamilr=$row['male_sltamil'];
  $female_intamilr=$row['female_intamil'];
  $male_intamilr=$row['male_intamil'];
  $female_yonakar=$row['female_yonaka'];
  $male_yonakar=$row['male_yonaka'];
  $female_brgr=$row['female_brg'];
  $male_brgr=$row['male_brg'];
  $female_otherpor=$row['female_otherpo'];
  $male_otherpor=$row['male_otherpo'];
  $year6=$row['year'];
  $ds6=$row['ds'];
  $gnd=$row['gnda'];
            ?>
             
                <tr>
                  <td><?php echo $ds6; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year6; ?></td>
		              <td><?php echo "$female_sinhalar  &ensp; , &ensp; $male_sinhalar"; ?></td>
                  <td><?php echo "$female_sltamilr  &ensp; , &ensp; $male_sltamilr"; ?></td>
                  <td><?php echo "$female_intamilr  &ensp; , &ensp; $male_intamilr"; ?></td>
                  <td><?php echo "$female_yonakar  &ensp; , &ensp; $male_yonakar"; ?></td>
                  <td><?php echo "$female_brgr  &ensp; , &ensp; $male_brgr"; ?></td>
                  <td><?php echo "$female_otherpor  &ensp; , &ensp; $male_otherpor"; ?></td>
                  <td><?php echo $female_sinhalar+$female_sltamilr+$female_intamilr+$female_yonakar+$female_brgr+$female_otherpor ; echo "&ensp; , &ensp;"; echo $male_sinhalar+$male_sltamilr+$male_intamilr+$male_yonakar+$male_brgr+$male_otherpor; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_sinhala) as total FROM population_ethnicity");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_sinhala) as total FROM population_ethnicity");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_sltamil) as total FROM population_ethnicity");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f2=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_sltamil) as total FROM population_ethnicity");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m2=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_intamil) as total FROM population_ethnicity");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f3=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_intamil) as total FROM population_ethnicity");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m3=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_yonaka) as total FROM population_ethnicity");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f4=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_yonaka) as total FROM population_ethnicity");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m4=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_brg) as total FROM population_ethnicity");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f5=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_brg) as total FROM population_ethnicity");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m5=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_otherpo) as total FROM population_ethnicity");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f6=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_otherpo) as total FROM population_ethnicity");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m6=$row['total'];
      
    }
  } 

    ?></th>
    <th>
    <?php
  echo $f1+$f2+$f3+$f4+$f5+$f6;  
  ?>

&ensp; , &ensp;

  <?php
  echo $m1+$m2+$m3+$m4+$m5+$m6;
  ?>
    </th>
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
if($type=='7'){
?>

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">වයස් කාණ්ඩය අනුව ජනගහනය </h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>අවුරුදු 0-5 </th>
                  <th>අවුරුදු 6-14 </th>
                  <th>අවුරුදු 15-18 </th>
                  <th>අවුරුදු 19-35 </th>
                  <th>අවුරුදු 36-60 </th>
                  <th>අවුරුදු 60 වැඩි </th>
                  <th>එකතුව</th>
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
                  <td>ස්ත්‍රී , පුරුෂ</td>
                </tr>
<?php 
//population_age
$q7 =$conn->query("SELECT * from population_age WHERE year='$year_update'");
  if($q7 !== false && $q7->num_rows > 0){
  while($row=$q7->fetch_assoc()){
  
  $female_zero_fiver=$row['female_zero_five'];
  $male_zero_fiver=$row['male_zero_five'];
  $female_six_fourteenr=$row['female_six_fourteen'];
  $male_six_fourteenr=$row['male_six_fourteen'];
  $female_fifteen_eighteenr=$row['female_fifteen_eighteen'];
  $male_fifteen_eighteenr=$row['male_fifteen_eighteen'];
  $female_nineteen_thirtyfiver=$row['female_nineteen_thirtyfive'];
  $male_nineteen_thirtyfiver=$row['male_nineteen_thirtyfive'];
  $female_thirtysix_sixtyr=$row['female_thirtysix_sixty'];
  $male_thirtysix_sixtyr=$row['male_thirtysix_sixty'];
  $female_sixtyr=$row['female_sixty'];
  $male_sixtyr=$row['male_sixty'];
  $year7=$row['year'];
  $ds7=$row['ds'];
  $gnd=$row['gnda'];
?>

              <tbody>
                <tr>
                  <td><?php echo $ds7; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year7; ?></td>
                  <td><?php echo "$female_zero_fiver  &ensp; , &ensp; $male_zero_fiver"; ?></td>
                  <td><?php echo "$female_six_fourteenr  &ensp; , &ensp; $male_six_fourteenr"; ?></td>
                  <td><?php echo "$female_fifteen_eighteenr  &ensp; , &ensp; $male_fifteen_eighteenr"; ?></td>
                  <td><?php echo "$female_nineteen_thirtyfiver  &ensp; , &ensp; $male_nineteen_thirtyfiver"; ?></td>
                  <td><?php echo "$female_thirtysix_sixtyr  &ensp; , &ensp; $male_thirtysix_sixtyr"; ?></td>
                  <td><?php echo "$female_sixtyr  &ensp; , &ensp; $male_sixtyr"; ?></td>
                  <td><?php echo $female_zero_fiver+$female_six_fourteenr+$female_fifteen_eighteenr+$female_nineteen_thirtyfiver+$female_thirtysix_sixtyr+$female_sixtyr ; echo "&ensp; , &ensp;"; echo $male_zero_fiver+$male_six_fourteenr+$male_fifteen_eighteenr+$male_nineteen_thirtyfiver+$male_thirtysix_sixtyr+$male_sixtyr; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
<th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_zero_five) as total FROM population_age");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_zero_five) as total FROM population_age");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_six_fourteen) as total FROM population_age");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f2=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_six_fourteen) as total FROM population_age");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m2=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_fifteen_eighteen) as total FROM population_age");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f3=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_fifteen_eighteen) as total FROM population_age");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m3=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_nineteen_thirtyfive) as total FROM population_age");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f4=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_nineteen_thirtyfive) as total FROM population_age");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m4=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_thirtysix_sixty) as total FROM population_age");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f5=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_thirtysix_sixty) as total FROM population_age");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m5=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_sixty) as total FROM population_age");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f6=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_sixty) as total FROM population_age");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m6=$row['total'];
      
    }
  } 

    ?></th>
    <th>
    <?php
  echo $f1+$f2+$f3+$f4+$f5+$f6;  
  ?>

&ensp; , &ensp;

  <?php
  echo $m1+$m2+$m3+$m4+$m5+$m6;
  ?>
    </th>
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
if($type=='8'){
?>

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">විදේශගත ජනගහනය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>රැකියා </th>
                  <th>අධ්‍යාපන </th>
                  <th>වෙනත් </th>
                  <th>එකතුව</th>
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
//abroad_population
$q8 =$conn->query("SELECT * from abroad_population WHERE year='$year_update'");
if($q8 !== false && $q8->num_rows > 0){
while($row=$q8->fetch_assoc()){

  $female_jobr=$row['female_job'];
  $male_jobr=$row['male_job'];
  $female_edur=$row['female_edu'];
  $male_edur=$row['male_edu'];
  $female_otherforr=$row['female_otherfor'];
  $male_otherforr=$row['male_otherfor'];
  $year8=$row['year'];
  $ds8=$row['ds'];
  $gnd=$row['gnd'];
?>

              
                <tr>
                  <td><?php echo $ds8; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year8; ?></td>
                  <td><?php echo " $female_jobr  &ensp; , &ensp; $male_jobr"; ?></td>
                  <td><?php echo " $female_edur  &ensp; , &ensp; $male_edur"; ?></td>
                  <td><?php echo " $female_otherforr  &ensp; , &ensp; $male_otherforr"; ?></td>
                  <td><?php echo $female_jobr+$female_edur+$female_otherforr ; echo "&ensp; , &ensp;"; echo $male_jobr+$male_edur+$male_otherforr; ?></td>
                </tr>

                <?php }} ?>

                <th>එකතුව</th>
                <th></th>
                <th></th>
                <th><?php
    $sql1=$conn->query("SELECT sum(female_job) as total FROM abroad_population");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_job) as total FROM abroad_population");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_edu) as total FROM abroad_population");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f2=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_edu) as total FROM abroad_population");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m2=$row['total'];
      
    }
  } 

    ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(female_otherfor) as total FROM abroad_population");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f4=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_otherfor) as total FROM abroad_population");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m4=$row['total'];
      
    }
  } 

    ?></th>
    <th>
    <?php
  echo $f1+$f2+$f3+$f4;  
  ?>

&ensp; , &ensp;

  <?php
  echo $m1+$m2+$m3+$m4;
  ?>
    </th>
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
if($type=='9'){
?>

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">විශ්‍රාමික ජනගහනය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>විශ්‍රාමිකයින් සංඛ්‍යාව</th>
                  <th>එකතුව</th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>ස්ත්‍රී , පුරුෂ</td>
                  <td></td>
                </tr>
<?php 
//retired_population
$q9 =$conn->query("SELECT * from retired_population WHERE year='$year_update'");
if($q9 !== false && $q9->num_rows > 0){
while($row=$q9->fetch_assoc()){

$female_retireesr=$row['female_retirees'];
$male_retireesr=$row['male_retirees'];
$year9=$row['year'];
$ds9=$row['ds'];
$gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds9; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year9; ?></td>
		              <td><?php echo "$female_retireesr  &ensp; , &ensp; $male_retireesr"; ?></td>
                  <td><?php echo $female_retireesr + $male_retireesr; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(female_retirees) as total FROM retired_population");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $f1=$row['total'];
        
      }
    } 
    
    echo "&ensp; , &ensp;";

    $sql1=$conn->query("SELECT sum(male_retirees) as total FROM retired_population");
    if($sql1 !== false && $sql1->num_rows > 0){
    while($row=$sql1->fetch_assoc()){
      echo $m1=$row['total'];
      
    }
  } 

    ?></th>
    <th>
      <?php
        echo $f1+$m1;
      ?>
    </th>
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
if($type=='10'){
?>

<!-- DataTable with Hover -->
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">යැපීම් අනුපාතය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ළමා</th>
                  <th>වයස්ගත</th>
                  <th>එකතුව</th>
                </tr>
              </thead>
              <tbody>
<?php
//dependency_rate
$q10 =$conn->query("SELECT * from dependency_rate WHERE year='$year_update'");
  if($q10 !== false && $q10->num_rows > 0){
  while($row=$q10->fetch_assoc()){
  
    $childr=$row['child'];
    $agingr=$row['aging'];
    $year10=$row['year'];
    $ds10=$row['ds'];
    $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds10; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year10; ?></td>
                  <td><?php echo $childr; ?></td>
                  <td><?php echo $agingr; ?></td>
                  <td><?php echo $childr + $agingr; ?></td>
                </tr>
                
                <?php }} ?>
<tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(child) as total FROM dependency_rate");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $a= $row['total'];
      }
    } ?></th>
    <th><?php
    $sql1=$conn->query("SELECT sum(aging) as total FROM dependency_rate");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $b=$row['total'];
      }
    } ?></th>

    <th>
      <?php
        echo $a+$b;
      ?>
    </th>
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