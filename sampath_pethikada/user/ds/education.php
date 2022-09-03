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
                  <i class="mdi mdi-school"></i>
                </span> අධ්‍යාපන තොරතුරු
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
                          <center><a class="dropdown-item" href="education.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="education.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="education.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="education.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="education.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="education.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="education.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="education.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="education.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="education.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="education.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="education.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='education.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>පසල් තොරතුරු</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>අධ්‍යාපන මට්ටම අනුව ගුරුවරු සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ඉගැන්වීමේ මාධ්‍ය අනුව ගුරුවරු සංඛ්‍යාව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ඉගැන්වීමේ මාධ්‍ය අනුව සිසුන් සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4"> 
                <div class="form-group">
                <?php echo "<a href='education.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>අධ්‍යාපනය ලබන ශ්‍රේණි අනුව සිසුන් සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>පිරිවෙන් තොරතුරු</a>"; ?> 

                  
                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>පෙර පාසල් තොරතුරු</a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>වෘත්තීය මධ්‍යස්ථාන තොරතුරු</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>පුස්තකාල පහසුකම් සම්බන්ධ තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වෙනත් අධ්‍යාපන ආයතන/උපකාරක පන්ති</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=11&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>විභාගය සමත් වූ අයදුම් කරුවන් සංඛ්‍යාව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=12&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>විශ්ව විද්‍යාල වලට සිසුන් ඇතුලත් කිරීම්</a>"; ?> 

                </div>
            </div>

        </div>
 

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo "<a href='education.php?type=13&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විශේෂ අධ්‍යාපන ආයතන</a>"; ?> 
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
                  <h6 class="m-0 font-weight-bold text-primary">පාසල් තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>පාසල</th>
                  <th>ජාතික පාසල්</th>
                  <th>පළාත් සභා පාසල්</th>
                  <th>1 AB</th>
                  <th>1 C</th>
                  <th>2 ශ්‍රේණිය</th>
                  <th>3 ශ්‍රේණිය</th>
                  <th>පෞද්ගලික පාසල්</th>
                  <th>සිංහල</th>
                  <th>දෙමළ</th>
                  <th>ඉංග්‍රීසි</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from school_information WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
 
$id=$row['id'];
$gnd=$row['gnda'];
$school_name=$row['school_name'];
$national_schools=$row['national_schools'];
$provincial_council_schools=$row['provincial_council_schools'];
$oneab=$row['oneab'];
$onec=$row['onec'];
$two=$row['two'];
$three=$row['three'];
$private_schools=$row['private_schools'];
$sinhala=$row['sinhala'];
$tamil=$row['tamil'];
$english=$row['english'];
$no_students=$row['no_students'];
$no_teachers=$row['no_teachers']; 
$year1=$row['year'];
$ds1=$row['ds'];
?>
            
              
                <tr>
                  <td><?php echo $ds1; ?></td>
                  <td><?php echo $year1; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $school_name; ?></td>
                  <td><?php echo $national_schools; ?></td>
                  <td><?php echo $provincial_council_schools; ?></td>
                  <td><?php echo $oneab; ?></td>
                  <td><?php echo $onec; ?></td>
                  <td><?php echo $two; ?></td>
                  <td><?php echo $three; ?></td>
                  <td><?php echo $private_schools; ?></td>
                  <td><?php echo $sinhala; ?></td>
                  <td><?php echo $tamil; ?></td>
                  <td><?php echo $english; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
                </tr>
               
                <?php }} ?>

                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(national_schools) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      } 
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(provincial_council_schools) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(oneab) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(onec) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(two) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(three) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(private_schools) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(sinhala) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tamil) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(english) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(no_students) as total FROM school_information WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(no_teachers) as total FROM school_information WHERE ds='$ds'");
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
                  <h6 class="m-0 font-weight-bold text-primary">අධ්‍යාපන මට්ටම අනුව ගුරුවරු සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරී වසම </th>
                  <th>පාසල </th>
                  <th>උපාධිධාරි ගුරුවරු සංඛ්‍යාව</th>
                  <th>පුහුණු ගුරුවරු සංඛ්‍යාව</th>
                  <th>නුපුහුණු ගුරුවරු සංඛ්‍යාව</th>
                  <th>වෙනත් ගුරුවරු සංඛ්‍යාව</th>
                  <th>එකතුව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from teachers_edu_level WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $school_name=$row['school_name'];
  $graduate=$row['graduate'];
  $training=$row['training'];
  $untrained=$row['untrained'];
  $other=$row['other'];
  $year2=$row['year'];
  $ds2=$row['ds'];
?>

              
                <tr>
                  <td><?php echo $ds2; ?></td>
                  <td><?php echo $year2; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $school_name; ?></td>
                  <td><?php echo $graduate; ?></td>
                  <td><?php echo $training; ?></td>
                  <td><?php echo $untrained; ?></td>
                  <td><?php echo $other; ?></td>
                  <td><?php echo $graduate + $training + $untrained + $other; ?></td>
                </tr>
               
                <?php }} ?>
                </tbody>
                <tbody>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(graduate) as total FROM teachers_edu_level WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $a= $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(training) as total FROM teachers_edu_level WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $b= $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(untrained) as total FROM teachers_edu_level WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $c= $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(other) as total FROM teachers_edu_level WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $d= $row['total'];
      }
    } ?></th>
<th>
<?php
    echo $a+$b+$c+$d;
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

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">ඉගැන්වීමේ මාධ්‍ය අනුව ගුරුවරු සංඛ්‍යාව </h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම </th>
                  <th>පාසලේ නම </th>
                  <th>සිංහල මාධ්‍ය </th>
                  <th>දෙමළ මාධ්‍ය </th>
                  <th>සිංහල හා ඉංග්‍රීසි මාධ්‍ය </th>
                  <th>ඉංග්‍රීසි හා දෙමළ මාධ්‍ය </th> 
                </tr>
              </thead>
              <tbody> 
<?php 

$q3 =$conn->query("SELECT * from teachers_medium_instruction WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $school_name=$row['school_name'];
  $sinhala=$row['sinhala'];
  $tamil=$row['tamil'];
  $sinhala_english=$row['sinhala_english'];
  $english_tamil=$row['english_tamil'];
  $year3=$row['year'];
  $ds3=$row['ds'];
?>

              
                <tr>
                  <td><?php echo $ds3; ?></td>
                  <td><?php echo $year3; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $school_name; ?></td>
                  <td><?php echo $sinhala; ?></td>
                  <td><?php echo $tamil; ?></td>
                  <td><?php echo $sinhala_english; ?></td>
                  <td><?php echo $english_tamil; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(sinhala) as total FROM teachers_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tamil) as total FROM teachers_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(sinhala_english) as total FROM teachers_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(english_tamil) as total FROM teachers_medium_instruction WHERE ds='$ds'");
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
if($type=='4'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">ඉගැන්වීමේ මාධ්‍ය අනුව සිසුන් සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>පාසලේ නම </th>
                  <th>සිංහල මාධ්‍ය (ගැ) </th>
                  <th>සිංහල මාධ්‍ය (පි) </th>
                  <th>දෙමළ මාධ්‍ය (ගැ) </th>
                  <th>දෙමළ මාධ්‍ය (පි) </th>
                  <th>ඉංග්‍රීසි මාධ්‍ය (ගැ) </th>
                  <th>ඉංග්‍රීසි මාධ්‍ය (පි) </th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from students_medium_instruction WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $school_name=$row['school_name'];
  $sinhala_female=$row['sinhala_female'];
  $sinhala_male=$row['sinhala_male'];
  $tamil_female=$row['tamil_female'];
  $tamil_male=$row['tamil_male'];
  $english_female=$row['english_female'];
  $english_male=$row['english_male'];
  $year4=$row['year'];
  $ds4=$row['ds'];
?>

              
                <tr>
                  <td><?php echo $ds4; ?></td>
                  <td><?php echo $year4; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $school_name; ?></td>
                  <td><?php echo $sinhala_female; ?></td>
                  <td><?php echo $sinhala_male; ?></td>
                  <td><?php echo $tamil_female; ?></td>
                  <td><?php echo $tamil_male; ?></td>
                  <td><?php echo $english_female; ?></td>
                  <td><?php echo $english_male; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(sinhala_female) as total FROM students_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(sinhala_male) as total FROM students_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tamil_female) as total FROM students_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(tamil_male) as total FROM students_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(english_female) as total FROM students_medium_instruction WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(english_male) as total FROM students_medium_instruction WHERE ds='$ds'");
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
                  <h6 class="m-0 font-weight-bold text-primary">අධ්‍යාපනය ලබන ශ්‍රේණි අනුව සිසුන් සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම </th>
                  <th>පාසලේ නම</th>
                  <th>1-5 ශ්‍රේණි</th>
                  <th>6-10 ශ්‍රේණි</th>
                  <th>සා/පෙළ</th>
                  <th>උ/පෙළ</th>
                  <th>විශේෂ අධ්‍යාපන ඒකක</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from students_grades_studied WHERE year='$year_update' AND ds='$ds'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $gnd=$row['gnda'];
      $school_name=$row['school_name'];
      $one_five=$row['one_five'];
      $six_ten=$row['six_ten'];
      $ol=$row['ol'];
      $al=$row['al'];
      $special_education_units=$row['special_education_units'];
      $year5=$row['year'];
      $ds5=$row['ds'];
?>

            
                <tr>
                  <td><?php echo $ds5; ?></td>
                  <td><?php echo $year5; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $school_name; ?></td>
                  <td><?php echo $one_five; ?></td>
                  <td><?php echo $six_ten; ?></td>
                  <td><?php echo $ol; ?></td>
                  <td><?php echo $al; ?></td>
                  <td><?php echo $special_education_units; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(one_five) as total FROM students_grades_studied WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(six_ten) as total FROM students_grades_studied WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(ol) as total FROM students_grades_studied WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(al) as total FROM students_grades_studied WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(special_education_units) as total FROM students_grades_studied WHERE ds='$ds'");
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
                  <h6 class="m-0 font-weight-bold text-primary">පිරිවෙන් තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>පිරිවෙනේ නම</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from pirivena WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $pirivena_name=$row['pirivena_name'];
  $no_students=$row['no_students'];
  $no_teachers=$row['no_teachers'];
  $year6=$row['year'];
  $ds6=$row['ds'];
?>

              
                <tr>
                  <td><?php echo $ds6; ?></td>
                  <td><?php echo $year6; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $pirivena_name; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
                </tr>
                
                <?php }} ?>

                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(no_students) as total FROM pirivena WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(no_teachers) as total FROM pirivena WHERE ds='$ds'");
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
                  <h6 class="m-0 font-weight-bold text-primary">පෙර පාසල් තොරතුරු </h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>පෙර පාසලේ නම</th>
                  <th>ලියාපදිංචි අංකය</th>
                  <th>ළමුන් ගණන</th>
                </tr>
              </thead>
              <tbody>    
<?php 

$q3 =$conn->query("SELECT * from preschool WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $preschool_name=$row['preschool_name'];
  $regno=$row['regno'];
  $no_students=$row['no_students'];
  $year7=$row['year'];
  $ds7=$row['ds'];
?>

            
                <tr>
                  <td><?php echo $ds7; ?></td>
                  <td><?php echo $year7; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $preschool_name; ?></td>
                  <td><?php echo $regno; ?></td>
                  <td><?php echo $no_students; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(no_students) as total FROM preschool WHERE ds='$ds'");
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
                  <h6 class="m-0 font-weight-bold text-primary">වෘත්තීය මධ්‍යස්ථාන තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>මධ්‍යස්ථානයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක. අංකය</th>
                  <th>පාඨමාලාවේ නම</th>
                  <th>සිසුන් සංඛ්‍යාව</th>
                  <th>ගුරුවරු සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from vocational_center WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $center_name=$row['center_name'];
  $addres=$row['addres'];
  $tpno=$row['tpno'];
  $course_name=$row['course_name'];
  $no_students=$row['no_students'];
  $no_teachers=$row['no_teachers'];
  $year8=$row['year'];
  $ds8=$row['ds'];
?>

              
                <tr>
                  <td><?php echo $ds8; ?></td>
                  <td><?php echo $year8; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $center_name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $tpno; ?></td>
                  <td><?php echo $course_name; ?></td>
                  <td><?php echo $no_students; ?></td>
                  <td><?php echo $no_teachers; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(no_students) as total FROM vocational_center WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(no_teachers) as total FROM vocational_center WHERE ds='$ds'");
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
if($type=='9'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">පුස්තකාල පහසුක්ම් සම්බන්ධ තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක. අංකය</th>
                </tr>
              </thead>
              <tbody>   
<?php 

$q3 =$conn->query("SELECT * from library WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $gnd=$row['gnda'];
  $addres=$row['addres'];
  $tpno=$row['tpno'];
  $year9=$row['year'];
  $ds9=$row['ds'];
?>

           
                <tr>
                  <td><?php echo $ds9; ?></td>
                  <td><?php echo $year9; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $tpno; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">වෙනත් අධ්‍යාපන ආයතන/උපකාරක පන්ති</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>වර්ෂය</th>
                  <th>ග්‍රාම නිලධාරි වසම</th>
                  <th>ආයතනයේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක. අංකය</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from other_educational_institutions WHERE year='$year_update' AND ds='$ds'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $gnd=$row['gnda'];
      $institute_name=$row['institute_name'];
      $addres=$row['addres'];
      $tpno=$row['tpno'];
      $year10=$row['year'];
      $ds10=$row['ds'];
?>

              
                <tr>
                  <td><?php echo $ds10; ?></td>
                  <td><?php echo $year10; ?></td>
		              <td><?php echo $gnd; ?></td>
                  <td><?php echo $institute_name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $tpno; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">විභාගය සමත් වූ අයදුම් කරුවන් සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>5 ශ්‍රේණි විභාගය සදහා පෙනී සිටි සංඛ්‍යාව</th>
                  <th>කඩඉම් ලකුණ ලැබූ සංඛ්‍යාව</th>
                  <th>සා/පෙළ සදහා පෙනී සිටි සංඛ්‍යාව</th>
                  <th>උ/පෙළ සදහා සුදුසුකම් ලද සංඛ්‍යාව</th>
                  <th>උ/පෙළ සදහා පෙනී සිටි සංඛ්‍යාව</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from passed_examination WHERE year='$year_update' AND ds='$ds'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $gradefive_exame_appearances=$row['gradefive_exame_appearances'];
      $cutoffmarks_applicants=$row['cutoffmarks_applicants'];
      $ol_appearances=$row['ol_appearances'];
      $al_qualified=$row['al_qualified'];
      $al_appearances=$row['al_appearances'];
      $year11=$row['year'];
      $ds11=$row['ds'];
      $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds11; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year11; ?></td>
		              <td><?php echo $gradefive_exame_appearances; ?></td>
                  <td><?php echo $cutoffmarks_applicants; ?></td>
                  <td><?php echo $ol_appearances; ?></td>
                  <td><?php echo $al_qualified; ?></td>
                  <td><?php echo $al_appearances; ?></td>
                </tr>
               
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(gradefive_exame_appearances) as total FROM passed_examination WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(cutoffmarks_applicants) as total FROM passed_examination WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(ol_appearances) as total FROM passed_examination WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(al_qualified) as total FROM passed_examination WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(al_appearances) as total FROM passed_examination WHERE ds='$ds'");
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
if($type=='12'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">විශ්ව විද්‍යාල වලට සිසුන් ඇතුලත් කිරීම්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>විශ්ව විද්‍යාලය</th>
                  <th>2018/2019 ස්ත්‍රී</th>
                  <th>2018/2019 පුරුෂ</th>
                  <th>2019/2020 ස්ත්‍රී</th>
                  <th>2019/2020 පුරුෂ</th>
                  <th>2020/2021 ස්ත්‍රී</th>
                  <th>2020/2021 පුරුෂ</th>
                </tr>
              </thead>
              <tbody> 
<?php 

$q3 =$conn->query("SELECT * from admission_universities WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $university=$row['university'];
  $twothousand_nineteen_female=$row['twothousand_nineteen_female'];
  $twothousand_nineteen_male=$row['twothousand_nineteen_male'];
  $twothousand_twenty_female=$row['twothousand_twenty_female'];
  $twothousand_twenty_male=$row['twothousand_twenty_male'];
  $twothousand_twentyone_female=$row['twothousand_twentyone_female'];
  $twothousand_twentyone_male=$row['twothousand_twentyone_male'];
  $year12=$row['year'];
  $ds12=$row['ds'];
  $gnd=$row['gnda']
?>

              
                <tr>
                  <td><?php echo $ds12; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year12; ?></td>
		              <td><?php echo $university; ?></td>
                  <td><?php echo $twothousand_nineteen_female; ?></td>
                  <td><?php echo $twothousand_nineteen_male; ?></td>
                  <td><?php echo $twothousand_twenty_female; ?></td>
                  <td><?php echo $twothousand_twenty_male; ?></td>
                  <td><?php echo $twothousand_twentyone_female; ?></td>
                  <td><?php echo $twothousand_twentyone_male; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
  <th></th>
  <th></th>

  <th><?php
    $sql1=$conn->query("SELECT sum(twothousand_nineteen_female) as total FROM admission_universities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(twothousand_nineteen_male) as total FROM admission_universities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(twothousand_twenty_female) as total FROM admission_universities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(twothousand_twenty_male) as total FROM admission_universities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(twothousand_twentyone_female) as total FROM admission_universities WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(twothousand_twentyone_male) as total FROM admission_universities WHERE ds='$ds'");
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
if($type=='13'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">විශේෂ අධ්‍යාපන ආයතන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>රජයේ ආයතන</th>
                  <th>සිසුන් ගණන</th>
                  <th>අර්ධ රාජ්‍ය ආයතන</th>
                  <th>සිසුන් ගණන</th>
                  <th>පෞද්ගලික ආයතන</th>
                  <th>සිසුන් ගණන</th>
                </tr>
              </thead>
              <tbody>
<?php 

$q3 =$conn->query("SELECT * from special_educational_institutions WHERE year='$year_update' AND ds='$ds'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $government=$row['government'];
      $nogov_student=$row['nogov_student'];
      $semi_government=$row['semi_government'];
      $nosemi_student=$row['nosemi_student'];
      $private=$row['private'];
      $nopriv_student=$row['nopriv_student'];
      $year13=$row['year'];
      $ds13=$row['ds'];
      $gnd=$row['gnda']
?>

             
                <tr>
                  <td><?php echo $ds13; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year13; ?></td>
		              <td><?php echo $government; ?></td>
                  <td><?php echo $nogov_student; ?></td>
                  <td><?php echo $semi_government; ?></td>
                  <td><?php echo $nosemi_student; ?></td>
                  <td><?php echo $private; ?></td>
                  <td><?php echo $nopriv_student; ?></td>
                </tr>
                
                <?php }} ?>
                <tr>
  <th>එකතුව</th>
  <th></th>
<th></th>
  <th><?php
    $sql1=$conn->query("SELECT sum(government) as total FROM special_educational_institutions WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(nogov_student) as total FROM special_educational_institutions WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(semi_government) as total FROM special_educational_institutions WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(nosemi_student) as total FROM special_educational_institutions WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(`private`) as total FROM special_educational_institutions WHERE ds='$ds'");
      if($sql1 !== false && $sql1->num_rows > 0){
      while($row=$sql1->fetch_assoc()){
        echo $row['total'];
      }
    } ?></th>

<th><?php
    $sql1=$conn->query("SELECT sum(nopriv_student) as total FROM special_educational_institutions WHERE ds='$ds'");
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