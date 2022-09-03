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
                  <i class="mdi mdi-gate"></i>
                </span> කෘෂිකාර්මික හා ඉඩම් තොරතුරු
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
                          <center><a class="dropdown-item" href="agri.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="agri.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="agri.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="agri.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="agri.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="agri.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="agri.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="agri.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="agri.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="agri.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="agri.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="agri.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='agri.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් අස්වද්දන ලද බිම් ප්‍රමාණය</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ කොට්ඨාස මට්ටමින් අස්වැන්න</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් සත්ව සංඛ්‍යාලේඛණ</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කිරි හා බිත්තර නිෂ්පාදනය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ග්‍රාම නිලධාරී වසම් මට්ටමින් ඉඩම් අයිතිය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ග්‍රාම නිලධාරී වසම් මට්ටමින් ගොඩ ඉඩම් අයිතිය</a>"; ?> 

                </div>
            </div> 

        </div>

        <div class="row">
           
        <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ග්‍රාම නිලධාරී වසම් මට්ටමින් මඩ ඉඩම් අයිතිය</a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කෘෂිකාර්මික ඉඩම් පරිහරණය</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>වී සහ අතිරේක භෝග වගාව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>එලවළු හා අල භෝග වගාව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=11&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>පළතුරු වගාව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=12&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කුළුබඩු හා වෙනත් භෝග වගාව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo "<a href='agri.php?type=13&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>කාබනික පොහොර නිපදවන ස්ථාන පිළිබද තොරතුරු</a>"; ?> 
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <?php echo "<a href='agri.php?type=14&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ කොට්ඨාසය තුල ඇති කෘෂිකාර්මික ජලාශ</a>"; ?> 
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් අස්වද්දන ලද බිම් ප්‍රමාණය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය</th>
                  <th>මහා වාරිමාර්ග</th>
                  <th>සුළු වාරිමාර්ග</th>
                  <th>වර්ෂා ජලය</th>
                </tr>
              </thead>
              <tbody> 
<?php 

$q3 =$conn->query("SELECT * from extent_cultivated_land WHERE year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $extent_cultivated_land=$row['extent_cultivated_land'];
    $great_irrigation=$row['great_irrigation'];
    $minor_irrigation=$row['minor_irrigation'];
    $rain_water=$row['rain_water'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

              
                <tr>
                <td><?php echo $ds; ?></td>
                <td><?php echo $gnd; ?></td>
                <td><?php echo $year; ?></td>
              
                  <td><?php echo $extent_cultivated_land; ?></td>
                  <td><?php echo $great_irrigation; ?></td>
		              <td><?php echo $minor_irrigation; ?></td>
                  <td><?php echo $rain_water; ?></td>
                  
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් වපුරන ලද බිම් ප්‍රමාණය සහ අස්වැන්න</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>වපුරන ලද බිම් ප්‍රමාණය(හෙක්.)-වාරිමාර්ග යටතේ</th>
                  <th>වර්ෂා ජලය</th>
                  <th>අස්වැන්න-වාරිමාර්ග යටතේ</th>
                  <th>වර්ෂා ජලය</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from yield_sown WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $under_irrigation_a=$row['under_irrigation_a'];
   $rain_water_a=$row['rain_water_a'];
   $under_irrigation_b=$row['under_irrigation_b'];
   $rain_water_b=$row['rain_water_b'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $under_irrigation_a; ?></td>
                  <td><?php echo $rain_water_a; ?></td>
                  <td><?php echo $under_irrigation_b; ?></td>
                  <td><?php echo $rain_water_b; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් සත්ව සංඛ්‍යාලේඛණ</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>එල හරක් ගණන</th>
                  <th>මී හරක් ගණන</th>
                  <th>එළුවන් ගණන</th>
                  <th>ඌරන් ගණන</th>
                  <th>කුකුලන් සහ කිකිලියන් ගණන</th>
                  <th>තාරාවන් ගණන</th>
                  <th>කළුකුන් ගණන</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from animal_statistics WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $cow=$row['cow'];
  $buffaloe=$row['buffaloe'];
  $goat=$row['goat'];
  $pig=$row['pig'];
  $chicken=$row['chicken'];
  $duck=$row['duck'];
  $turkey=$row['turkey'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>
              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $cow; ?></td>
                  <td><?php echo $buffaloe; ?></td>
                  <td><?php echo $goat; ?></td>
                  <td><?php echo $pig; ?></td>
                  <td><?php echo $chicken; ?></td>
                  <td><?php echo $duck; ?></td>
                  <td><?php echo $turkey; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් කිරි හා බිත්තර නිෂ්පාදනය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>එළකිරි ලබාගන්නා දෙනුන් සංඛ්‍යාව</th>
                  <th>දෛනික කිරි නිෂ්පාදනය</th>
                  <th>මී කිරි ලබාගන්නා මී දෙනුන් සංඛ්‍යාව</th>
                  <th>දෛනික කිරි නිෂ්පාදනය</th>
                  <th>බිත්තර දමන කිකිලියන් සංඛ්‍යාව</th>
                  <th>දෛනික නිෂ්පාදනය</th>
                  
                </tr>
              </thead>
              <tbody>  
<?php 
$q3 =$conn->query("SELECT * from milk_egg WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $no_cow=$row['no_cow'];
  $milk_ltr_a=$row['milk_ltr_a'];
  $no_buffaloe=$row['no_buffaloe'];
  $milk_ltr_b=$row['milk_ltr_b'];
  $egg_chicken=$row['egg_chicken'];
  $product_egg=$row['product_egg'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $no_cow; ?></td>
                  <td><?php echo $milk_ltr_a; ?></td>
                  <td><?php echo $no_buffaloe; ?></td>
                  <td><?php echo $milk_ltr_b; ?></td>
                  <td><?php echo $egg_chicken; ?></td>
                  <td><?php echo $product_egg; ?></td>
                 
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
                  <h6 class="m-0 font-weight-bold text-primary">ග්‍රාම නිලධාරී වසම් මට්ටමින් ඉඩම් අයිතිය/රක්ෂිත හා වෙනත්</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>වසමේ මුලු ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>රජයේ ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>පෞද්ගලික ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>වෙනත් ආයතන වලට අයත් ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>රක්ෂිත වනාන්තර(අක්කර)</th>
                  <th>ජල රක්ෂිත(අක්කර)</th>
                  <th>ජලාශ වලට යටවූ බිම්(අක්කර)</th>
                  <th>වෙනත්(අක්කර)</th>
                  <th>ඉඩම් ප්‍රතිසංස්කරණ කොමිසන් සභාව සතු ඉඩම්(අක්කර)</th>
                </tr>
              </thead>
              <tbody>
<?php
 $q3 =$conn->query("SELECT * from land_ownership WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $total_land=$row['total_land'];
   $gov_land=$row['gov_land'];
   $private_land=$row['private_land'];
   $other_land=$row['other_land'];
   $reserve_forests=$row['reserve_forests'];
   $water_reserve=$row['water_reserve'];
   $lands_submerged=$row['lands_submerged'];
   $other=$row['other'];
   $lands_owned_lrc=$row['lands_owned_lrc'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $total_land; ?></td>
                  <td><?php echo $gov_land; ?></td>
                  <td><?php echo $private_land; ?></td>
                  <td><?php echo $other_land; ?></td>
                  <td><?php echo $reserve_forests; ?></td>
                  <td><?php echo $water_reserve; ?></td>
                  <td><?php echo $lands_submerged; ?></td>
                  <td><?php echo $other; ?></td>
                  <td><?php echo $lands_owned_lrc; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ග්‍රාම නිලධාරී වසම් මට්ටමින් ගොඩ ඉඩම් අයිතිය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>අක්කර 1/4 ට අඩු</th>
                  <th>අක්කර 1/4 සිට 1/2 දක්වා</th>
                  <th>අක්කර 1/2 සිට 1 දක්වා</th>
                  <th>අක්කර 1 සිට 5 දක්වා</th>
                  <th>අක්කර 5 සිට 10 දක්වා</th>
                  <th>අක්කර 10 ට වැඩි</th>
                  <th>ඉඩම් නොමැති පවුල් ගණන</th>
                </tr>
              </thead>
              <tbody>   
<?php 
$q3 =$conn->query("SELECT * from land_ownership_lots WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $three_quarters_familiy=$row['three_quarters_familiy'];
  $three_quarters_half_familiy=$row['three_quarters_half_familiy'];
  $half_one_familiy=$row['half_one_familiy'];
  $one_five_familiy=$row['one_five_familiy'];
  $five_ten_familiy=$row['five_ten_familiy'];
  $ten_familiy=$row['ten_familiy'];
  $no_land_familiy=$row['no_land_familiy'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $three_quarters_familiy; ?></td>
                  <td><?php echo $three_quarters_half_familiy; ?></td>
                  <td><?php echo $half_one_familiy; ?></td>
                  <td><?php echo $one_five_familiy; ?></td>
                  <td><?php echo $five_ten_familiy; ?></td>
                  <td><?php echo $ten_familiy; ?></td>
                  <td><?php echo $no_land_familiy; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ග්‍රාම නිලධාරී වසම් මට්ටමින් මඩ ඉඩම් අයිතිය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>අක්කර 1/4 ට අඩු</th>
                  <th>අක්කර 1/4 සිට 1/2 දක්වා</th>
                  <th>අක්කර 1/2 සිට 1 දක්වා</th>
                  <th>අක්කර 1 සිට 5 දක්වා</th>
                  <th>අක්කර 5ට වැඩි</th>
                  <th>මඩ ඉඩම් නොමැති පවුල් ගණන</th>
                </tr>
              </thead>
              <tbody>
<?php
$q3 =$conn->query("SELECT * from land_ownership_mud WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $three_quarters_familiy=$row['three_quarters_familiy'];
  $three_quarters_half_familiy=$row['three_quarters_half_familiy'];
  $half_one_familiy=$row['half_one_familiy'];
  $one_five_familiy=$row['one_five_familiy'];
  $five_familiy=$row['five_familiy'];
  $no_land_familiy=$row['no_land_familiy'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $three_quarters_familiy; ?></td>
                  <td><?php echo $three_quarters_half_familiy; ?></td>
                  <td><?php echo $half_one_familiy; ?></td>
                  <td><?php echo $one_five_familiy; ?></td>
                  <td><?php echo $five_familiy; ?></td>
                  <td><?php echo $no_land_familiy; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කෘෂිකාර්මික ඉඩම් පරිහරණය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>වසමේ මුලු ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>රජයේ ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>වී වගා ඉඩම් ප්‍රමාණය(අක්කර)</th>
                  <th>තේ</th>
                  <th>පොල්</th>
                  <th>රබර්</th>
                  <th>ගම්මිරිස්</th>
                  <th>කජු</th>
                  <th>මිශ්‍ර වගාව</th>
                  
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from agricultural_land WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $total_land=$row['total_land'];
  $gov_land=$row['gov_land'];
  $paddy_land=$row['paddy_land'];
  $tea=$row['tea'];
  $coconut=$row['coconut'];
  $rubber=$row['rubber'];
  $peper=$row['peper'];
  $cashews=$row['cashews'];
  $mixed_cultivation=$row['mixed_cultivation'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $total_land; ?></td>
                  <td><?php echo $gov_land; ?></td>
                  <td><?php echo $paddy_land; ?></td>
                  <td><?php echo $tea; ?></td>
                  <td><?php echo $coconut; ?></td>
                  <td><?php echo $rubber; ?></td>
                  <td><?php echo $peper; ?></td>
                  <td><?php echo $cashews; ?></td>
                  <td><?php echo $mixed_cultivation; ?></td>
                 
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
                  <h6 class="m-0 font-weight-bold text-primary">වී සහ අතිරේඛ භෝග වගාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>භෝගය</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය-යල(හෙක්.)</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය-මහ(හෙක්.)</th>
                  <th>අස්වැන්න-යල(මෙ.ටො.)</th>
                  <th>අස්වැන්න-මහ(මෙ.ටො.)</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from cultivation_paddy WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $crops=$row['crops'];
  $area_yala=$row['area_yala'];
  $area_maha=$row['area_maha'];
  $harvest_yala=$row['harvest_yala'];
  $harvest_maha=$row['harvest_maha'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $crops; ?></td>
                  <td><?php echo $area_yala; ?></td>
                  <td><?php echo $area_maha; ?></td>
                  <td><?php echo $harvest_yala; ?></td>
                  <td><?php echo $harvest_maha; ?></td>
                 
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
                  <h6 class="m-0 font-weight-bold text-primary">එලවළු හා අල භෝග වගාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>භෝගය</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය-යල(හෙක්.)</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය-මහ(හෙක්.)</th>
                  <th>අස්වැන්න-යල(මෙ.ටො.)</th>
                  <th>අස්වැන්න-මහ(මෙ.ටො.)</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from cultivation_vegetables WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $crops=$row['crops'];
   $area_yala=$row['area_yala'];
   $area_maha=$row['area_maha'];
   $harvest_yala=$row['harvest_yala'];
   $harvest_maha=$row['harvest_maha'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $crops; ?></td>
                  <td><?php echo $area_yala; ?></td>
                  <td><?php echo $area_maha; ?></td>
                  <td><?php echo $harvest_yala; ?></td>
                  <td><?php echo $harvest_maha; ?></td>
                 
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
                  <h6 class="m-0 font-weight-bold text-primary">පළතුරු වගාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පළතුරු වර්ගය</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</th>
                  <th>අස්වැන්න(කි.ග්‍රෑ)</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from cultivation_fruit WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $fruit=$row['fruit'];
  $area=$row['area'];
  $harvest=$row['harvest'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $fruit; ?></td>
                  <td><?php echo $area; ?></td>
                  <td><?php echo $harvest; ?></td>
                
                 
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
                  <h6 class="m-0 font-weight-bold text-primary">කුළුබඩු හා වෙනත් භෝග වගාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>කුළුබඩු හා වෙනත් භෝග වර්ගය</th>
                  <th>අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</th>
                  <th>අස්වැන්න(කි.ග්‍රැ.)</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from cultivation_spices WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $crops=$row['crops'];
   $area=$row['area'];
   $harvest=$row['harvest'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $crops; ?></td>
                  <td><?php echo $area; ?></td>
                  <td><?php echo $harvest; ?></td>
                  
                 
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
if($type=='13'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">කාබනික පොහොර නිපදවන ස්ථාන පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>නිෂ්පාදන ආයතනය</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක අංකය</th>
                  <th>වාර්ෂික නිෂ්පාදනය(මෙ.ටො.)</th>
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from organic_fertilizer WHERE year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $production_company=$row['production_company'];
  $addres=$row['addres'];
  $contact=$row['contact'];
  $annual_production=$row['annual_production'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $production_company; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $annual_production; ?></td>
                 
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
if($type=='14'){
?>

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති කෘෂිකාර්මික ජලාශ</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ජල ධාරිතාව</th>
                  <th>ධාරී ප්‍රදේශය(අක්කර)</th>
                  <th>මතුපිට විශාලත්වය(අක්කර)</th>
                </tr>
              </thead>
              <tbody>
<?php 
 $q3 =$conn->query("SELECT * from agricultural_reservoirs WHERE year='$year_update'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   
   $water_capacity=$row['water_capacity'];
   $holding_area=$row['holding_area'];
   $surface_size=$row['surface_size'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $water_capacity; ?></td>
                  <td><?php echo $holding_area; ?></td>
                  <td><?php echo $surface_size; ?></td>
                 
                 
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