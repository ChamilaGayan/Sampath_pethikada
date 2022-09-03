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
                  <i class="mdi mdi-truck-delivery"></i>
                </span> කර්මාන්ත වෙළද හා සේවා

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
                          <center><a class="dropdown-item" href="industries.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="industries.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="industries.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="industries.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="industries.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="industries.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="industries.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="industries.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="industries.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="industries.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="industries.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="industries.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='industries.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි කර ඇති වෙළද ආයතන ගණන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි කර ඇති නිෂ්පාදන කර්මාන්ත ආයතන සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සතිපොල පිළිබද තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කොට්ඨාසය තුල පවතින මහා පරිමාණ කර්මාන්තශාලා</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කොට්ඨාසයට ආවේණික නිෂ්පාදන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>මිරිදිය ධීවර කර්මාන්තයේ ප්‍රභවය</a>"; ?> 
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
                  <h6 class="m-0 font-weight-bold text-primary">ලියාපදිංචි කර ඇති වෙළද ආයතන ගණන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>සිල්ලර කඩ සංඛ්‍යාව</th>
                  <th>සුපිරි වෙළදසල් සංඛ්‍යාව</th>
                  <th>ආපනශාලා හා තේ කඩ</th>
                  <th>සපත්තු හා රෙදිපිළි</th>
                  <th>මස්,මාළු හා එළවළු කඩ</th>
                  <th>බෙහෙත් ශාලා හා ෆාමසි</th>
                  <th>ලී හා යකඩ ගෘහ භාණ්ඩ</th>
                  <th>විදුලි උපකරණ</th>
                  <th>සාප්පු බඩු</th>
                  <th>ගොඩනැගිලි ද්‍රව්‍ය</th>
                  <th>මත්පැන්හල්</th>
                  <th>ස්වර්ණාභරණ</th>
                  <th>පොත්පත් හා ලිපිද්‍රව්‍ය</th>
                  <th>මෝටර් රථ අමතර කොටස්</th>
                  <th>වෙනත්</th>
                </tr>
              </thead>
              <tbody>
<?php 
  $q3 =$conn->query("SELECT * from registered_trading_companies WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $grocery_store=$row['grocery_store'];
    $supermarkets=$row['supermarkets'];
    $restaurants=$row['restaurants'];
    $shoes_textiles=$row['shoes_textiles'];
    $vegetable_shop=$row['vegetable_shop'];
    $pharmacy=$row['pharmacy'];
    $house_items=$row['house_items'];
    $electrical_equipment=$row['electrical_equipment'];
    $shopping_goods=$row['shopping_goods'];
    $building_materials=$row['building_materials'];
    $liquor_stores=$row['liquor_stores'];
    $jewelry=$row['jewelry'];
    $books=$row['books'];
    $car_parts=$row['car_parts'];
    $other=$row['other'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>
              
                <tr>
                <td><?php echo $ds; ?></td>
                <td><?php echo $gnd; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $grocery_store; ?></td>
                <td><?php echo $supermarkets; ?></td>
		            <td><?php echo $restaurants; ?></td>
                <td><?php echo $shoes_textiles; ?></td>
                <td><?php echo $vegetable_shop; ?></td>
                <td><?php echo $pharmacy; ?></td>
                <td><?php echo $house_items; ?></td>
                <td><?php echo $electrical_equipment; ?></td>
                <td><?php echo $shopping_goods; ?></td>
                <td><?php echo $building_materials; ?></td>
                <td><?php echo $liquor_stores; ?></td>
                <td><?php echo $jewelry; ?></td>
                <td><?php echo $books; ?></td>
                <td><?php echo $car_parts; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">ලියාපදිංචි කර ඇති නිෂ්පාදන කර්මාන්ත ආයතන සංඛ්‍යාව</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පතල් හා කැනීම්</th>
                  <th>ආහාර,බීම වර්ග හා දුම්කොළ</th>
                  <th>රෙදිපිළි,ඇදුම් පැලදුම් හා සම් භාණ්ඩ</th>
                  <th>දැව,දැව භාණ්ඩ හා ගෘහ භාණ්ඩ</th>
                  <th>කඩදාසි නිෂ්පාදන,මුද්‍රණ කටයුතු</th>
                  <th>රසායන ද්‍රව්‍ය,ඛණිජ තෙල්,රබර් හා ප්ලාස්ටික්</th>
                  <th>අලෝහමය ඛණිජ නිෂ්පාදන</th>
                  <th>මූලික ලෝහ කර්මාන්ත,ලෝහ භාණ්ඩ යන්ත්‍රෝපකරණ හා මෙවලම්</th>
                  <th>වෙනත් නිෂ්පාදන කර්මාන්ත</th>
                  <th>ජල ආශ්‍රිත කටයුතු හා ජල සැපයුම</th>
                </tr>
              </thead>
              <tbody>
<?php
  $q3 =$conn->query("SELECT * from registered_manufacturing_industry WHERE year='$year_update' AND ds='$ds'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $mining=$row['mining'];
    $foods=$row['foods'];
    $textiles=$row['textiles'];
    $wood=$row['wood'];
    $paper=$row['paper'];
    $chemicals=$row['chemicals'];
    $minerals=$row['minerals'];
    $metal=$row['metal'];
    $other=$row['other'];
    $water=$row['water'];
    $year=$row['year'];
    $ds=$row['ds'];
    $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $mining; ?></td>
                  <td><?php echo $foods; ?></td>
                  <td><?php echo $textiles; ?></td>
                  <td><?php echo $wood; ?></td>
                  <td><?php echo $paper; ?></td>
                  <td><?php echo $chemicals; ?></td>
                  <td><?php echo $minerals; ?></td>
                  <td><?php echo $metal; ?></td>
                  <td><?php echo $other; ?></td>
                  <td><?php echo $water; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">සතිපොල පිළිබද තොරතුරු</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>පළාත් පාලන ආයතන</th>
                  <th>සති පොල පිහිටි ස්ථානය</th>
                  <th>පැවැත්වෙන දිනය</th> 
                </tr>
              </thead>
              <tbody>
<?php 
$q3 =$conn->query("SELECT * from weekly_fair WHERE year='$year_update' AND ds='$ds'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){
  $id=$row['id'];
  $institution=$row['institution'];
  $location=$row['location'];
  $date=$row['date'];
  $year=$row['year'];
  $ds=$row['ds'];
  $gnd=$row['gnda'];
?>
              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $institution; ?></td>
                  <td><?php echo $location; ?></td>
                  <td><?php echo $date; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">කොට්ඨාසය තුල පවතින මහා පරිමාණ කර්මාන්තශාලා</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>කර්මාන්ත ශාලාවේ නම</th>
                  <th>ලිපිනය</th>
                  <th>දු.ක.අංකය</th>
                  <th>නිෂ්පාදන වර්ගය</th>
                  <th>සේවක සංඛ්‍යාව - ස්ත්‍රී</th>
                  <th>පුරුෂ</th>
                </tr>
              </thead>
              <tbody>  
<?php
 $q3 =$conn->query("SELECT * from large_scale_factories WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $factory_name=$row['factory_name'];
   $addres=$row['addres'];
   $contact=$row['contact'];
   $product=$row['product'];
   $female=$row['female'];
   $male=$row['male'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

              
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $factory_name; ?></td>
                  <td><?php echo $addres; ?></td>
                  <td><?php echo $contact; ?></td>
                  <td><?php echo $product; ?></td>
                  <td><?php echo $female; ?></td>
                  <td><?php echo $male; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">කොට්ඨාසයට ආවේණික නිෂ්පාදන</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                 <th>ප්‍රා.ලේ</th>
                 <th>ග්‍රාම නිලධාරී වසම</th>
                 <th>වර්ෂය</th>
                 <th>නිෂ්පාදන/කර්මාන්තය</th>
                 <th>කර්මාන්තයේ නියුතු පවුල් ගණන</th>
                </tr>
              </thead>
              <tbody>
<?php
 $q3 =$conn->query("SELECT * from products_endemic WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $factory=$row['factory'];
   $families=$row['families'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

             
                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $factory; ?></td>
                  <td><?php echo $families; ?></td>
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
                  <h6 class="m-0 font-weight-bold text-primary">මිරිදිය ධීවර කර්මාන්තයේ ප්‍රභවය</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>වර්ෂය</th>
                  <th>ප්‍රධාන ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො.)</th>
                  <th>මධ්‍යම ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො.)</th>
                  <th>කුඩා පරිමාණ ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො.)</th>
                  <th>කාලීන ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො.)</th>
                  <th>පොකුණු හා වතු ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො.)</th>
                </tr>
              </thead>
              <tbody>   
<?php 
 $q3 =$conn->query("SELECT * from fishing_industry WHERE year='$year_update' AND ds='$ds'");
 if($q3 !== false && $q3->num_rows > 0){
 while($row=$q3->fetch_assoc()){
   $id=$row['id'];
   $major_reservoirs=$row['major_reservoirs'];
   $central_reservoirs=$row['central_reservoirs'];
   $small_reservoirs=$row['small_reservoirs'];
   $seasonal_reservoirs=$row['seasonal_reservoirs'];
   $ponds=$row['ponds'];
   $year=$row['year'];
   $ds=$row['ds'];
   $gnd=$row['gnda'];
?>

                <tr>
                  <td><?php echo $ds; ?></td>
                  <td><?php echo $gnd; ?></td>
                  <td><?php echo $year; ?></td>
		              <td><?php echo $major_reservoirs; ?></td>
                  <td><?php echo $central_reservoirs; ?></td>
                  <td><?php echo $small_reservoirs; ?></td>
                  <td><?php echo $seasonal_reservoirs; ?></td>
                  <td><?php echo $ponds; ?></td>   
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