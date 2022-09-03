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
  $gn=$row["gnd"]; 
  $dsn=$row["ds"];  
  
  
  $qq =$conn->query("SELECT * from matale WHERE gncode='$gn'");
      if($qq !== false && $qq->num_rows > 0){
      while($row=$qq->fetch_assoc()){
        $gnd=$row['gnname'];
      }
  }
  
      
  
  
  
      $qqq =$conn->query("SELECT * from divsec WHERE divno='$dsn'");
      if($qqq !== false && $qqq->num_rows > 0){
      while($row=$qqq->fetch_assoc()){
        $ds=$row['divna'];
      }
  }
}
}

//registerd_hotels
if(isset($_POST['submit1']))
{
  foreach($_POST['year1'] as $key => $year1){
    $gov_locations = $_POST['gov_locations'][$key];
    $semi_gov_locations = $_POST['semi_gov_locations'][$key];
    $tourism_registerd_hotel = $_POST['tourism_registerd_hotel'][$key];
    
    $sql="INSERT into registerd_hotels (ds,userid,`year`,gnda,gov_locations,semi_gov_locations,tourism_registerd_hotel) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$gov_locations."','".$semi_gov_locations."','".$tourism_registerd_hotel."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='tourism.php?type=1&&year=$year1';</script>";
    }
}


//special_locations
if(isset($_POST['submit2']))
{
  foreach($_POST['year2'] as $key => $year2){
    $special_locations = $_POST['special_locations'][$key];
    $religion_locations = $_POST['religion_locations'][$key];
    $other_locations = $_POST['other_locations'][$key];
   
    $sql="INSERT into special_locations (ds,userid,`year`,gnda,special_locations,`religion_locations`,other_locations) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$special_locations."','".$religion_locations."','".$other_locations."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='tourism.php?type=2&&year=$year2';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================

//registerd_hotels
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $gov_locationsu = $_POST['gov_locationsu'][$key];
    $semi_gov_locationsu = $_POST['semi_gov_locationsu'][$key];
    $tourism_registerd_hotelu = $_POST['tourism_registerd_hotelu'][$key];
   
    $sql = "update registerd_hotels set gov_locations='$gov_locationsu',semi_gov_locations='$semi_gov_locationsu',tourism_registerd_hotel='$tourism_registerd_hotelu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='tourism.php?type=1&&year=$year1u';</script>";
    }
}


//special_locations
if(isset($_POST['update2']))
{
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $special_locationsu = $_POST['special_locationsu'][$key];
    $religion_locationsu = $_POST['religion_locationsu'][$key];
    $other_locationsu = $_POST['other_locationsu'][$key]; 
   
    $sql = "update special_locations set special_locations='$special_locationsu',religion_locations='$religion_locationsu',other_locations='$other_locationsu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='tourism.php?type=2&&year=$year2u';</script>";
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
    <script src="../../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#but_add').click(function(){
               
               // Create clone of <div class='input-form'>
               var newel = $('.input-form:last').clone();
               
               // Add after last <div class='input-form'>
               $(newel).insertAfter(".input-form:last");
            });

            $('.txt').focus(function(){
               $(this).css('border-color','red');
            });

            $('.txt').focusout(function(){
                $(this).css('border-color','initial');
            });
        
        });
</script>

  </head>
  <body>
    
    <div class="container-scroller">
     
      <!-- partial:partials/_navbar.html -->
      <?php include 'include/navbar.php' ?>
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
                  <i class="mdi mdi-image-filter-hdr"></i>
                </span> සංචාරක
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
                            <center><a class="dropdown-item" href="tourism.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="tourism.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="tourism.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="tourism.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="tourism.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="tourism.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="tourism.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="tourism.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="tourism.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="tourism.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="tourism.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="tourism.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='tourism.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි කරන ලද සංචාරක හෝටල් පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='tourism.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සුවිශේෂ,ආගමික හා වෙනත් වැදගත් ස්ථාන</a>"; ?> 
                </div>
            </div>

        </div>

        </form>
            

<!-- ===========================රාජ්‍ය,අර්ධ රාජ්‍ය හා සංචාරක මණ්ඩලයේ ලියාපදිංචි කරන ලද සංචාරක හෝටල් පිළිබද තොරතුරු ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රාජ්‍ය,අර්ධ රාජ්‍ය හා සංචාරක මණ්ඩලයේ ලියාපදිංචි කරන ලද සංචාරක හෝටල් පිළිබද තොරතුරු </h4>

<?php 
  $q3 =$conn->query("SELECT * from registerd_hotels WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $gov_locations=$row['gov_locations'];
    $semi_gov_locations=$row['semi_gov_locations'];
    $tourism_registerd_hotel=$row['tourism_registerd_hotel'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රජයේ සංචාරක බංගලා/නිවාඩු නිකේතන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="gov_locationsu[]" value='<?php echo $gov_locations; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය සංචාරක බංගලා/නිවාඩු නිකේතන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_gov_locationsu[]" value='<?php echo $semi_gov_locations; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සංචාරක මණ්ඩලයේ ලියාපදිංචි හෝටල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tourism_registerd_hotelu[]" value='<?php echo $tourism_registerd_hotel; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year1u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id1[]' value='$id'>"; ?>
                   
                    </div>
                    
                    <?php }  ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update1" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>

                <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රාජ්‍ය,අර්ධ රාජ්‍ය හා සංචාරක මණ්ඩලයේ ලියාපදිංචි කරන ලද සංචාරක හෝටල් පිළිබද තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රජයේ සංචාරක බංගලා/නිවාඩු නිකේතන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="gov_locations[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය සංචාරක බංගලා/නිවාඩු නිකේතන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_gov_locations[]" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සංචාරක මණ්ඩලයේ ලියාපදිංචි හෝටල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tourism_registerd_hotel[]" >
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year1[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit1" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>

<?php }} ?>


<!-- ===========================ප්‍රා.ලේ. කොට්ඨාසය තුල ඇති සුවිශේෂ සංචාරක ස්ථාන, ආගමික ස්ථාන හා වෙනත් වැදගත් ස්ථාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාසය තුල ඇති සුවිශේෂ සංචාරක ස්ථාන, ආගමික ස්ථාන හා වෙනත් වැදගත් ස්ථාන</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from special_locations WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $special_locations=$row['special_locations'];
                        $religion_locations=$row['religion_locations'];
                        $other_locations=$row['other_locations'];
                        ?>
                        
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සුවිශේෂ සංචාරක ස්ථාන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="special_locationsu[]" value='<?php echo $special_locations; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථාන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="religion_locationsu[]" value='<?php echo $religion_locations; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත් වැදගත් ස්ථාන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_locationsu[]" value='<?php echo $other_locations; ?>'>
                        </div>

                      </div>
                      
                      <?php echo "<input type='hidden' id='custId' name='year2u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id2[]' value='$id'>"; ?>
                   
                    </div>

                    <?php }?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update2" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>

              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාසය තුල ඇති සුවිශේෂ සංචාරක ස්ථාන, ආගමික ස්ථාන හා වෙනත් වැදගත් ස්ථාන</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සුවිශේෂ සංචාරක ස්ථාන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="special_locations[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථාන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="religion_locations[]" >
                        </div>

                      </div>
                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත් වැදගත් ස්ථාන ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_locations[]" >
                        </div>
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year2[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit2" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>

              <?php }} ?>

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
  </body>
</html>