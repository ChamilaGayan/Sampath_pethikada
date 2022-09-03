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

//permit_vehicle
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $car = $_POST['car'][$key];
    $motor_bicycle = $_POST['motor_bicycle'][$key];
    $three_wheel = $_POST['three_wheel'][$key];
    $private_bus = $_POST['private_bus'][$key];
    $dual_function_vehicles = $_POST['dual_function_vehicles'][$key];
    $lorries = $_POST['lorries'][$key];
    $agri_vehicles = $_POST['agri_vehicles'][$key];
    $other = $_POST['other'][$key];

    $sql="INSERT into permit_vehicle (ds,userid,`year`,gnda,car,motor_bicycle,three_wheel,private_bus,dual_function_vehicles,lorries,agri_vehicles,other) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$car."','".$motor_bicycle."','".$three_wheel."','".$private_bus."','".$dual_function_vehicles."','".$lorries."','".$agri_vehicles."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=1&&year=$year1';</script>";
    }
}


//new_vehicle
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $car = $_POST['car'][$key];
    $tricycle_car = $_POST['tricycle_car'][$key];
    $tricycle = $_POST['tricycle'][$key];
    $tricycle_van = $_POST['tricycle_van'][$key];
    $bus = $_POST['bus'][$key];
    $motor_bicycle = $_POST['motor_bicycle'][$key];
    $dual_function_vehicle = $_POST['dual_function_vehicle'][$key];
    $single_cab = $_POST['single_cab'][$key];
    $special_vehicle = $_POST['special_vehicle'][$key];
    $lorries = $_POST['lorries'][$key];
    $prime_mover = $_POST['prime_mover'][$key];
    $ambulance = $_POST['ambulance'][$key];
    $funeral_red = $_POST['funeral_red'][$key];
    $lorry_trailer = $_POST['lorry_trailer'][$key];
    $tractor_trailer = $_POST['tractor_trailer'][$key];
    $hand_tractor = $_POST['hand_tractor'][$key];
    $tractor = $_POST['tractor'][$key];
   
    $sql="INSERT into new_vehicle (ds,userid,`year`,gnda,car,tricycle_car,tricycle,tricycle_van,bus,motor_bicycle,dual_function_vehicle,single_cab,special_vehicle,lorries,prime_mover,ambulance,funeral_red,lorry_trailer,tractor_trailer,hand_tractor,tractor) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$car."','".$tricycle_car."','".$tricycle."','".$tricycle_van."','".$bus."','".$motor_bicycle."','".$dual_function_vehicle."','".$single_cab."','".$special_vehicle."','".$lorries."','".$prime_mover."','".$ambulance."','".$funeral_red."','".$lorry_trailer."','".$tractor_trailer."','".$hand_tractor."','".$tractor."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=2&&year=$year2';</script>";
    }
}


//road_grade
if(isset($_POST['submit3']))
{
  foreach($_POST['year3'] as $key => $year3){
    $high_way = $_POST['high_way'][$key];
    $grade_a = $_POST['grade_a'][$key];
    $garde_b = $_POST['garde_b'][$key];
    $grade_c = $_POST['grade_c'][$key];
    $grade_d = $_POST['grade_d'][$key];
    $city_council_roads = $_POST['city_council_roads'][$key];
    $ds_roads = $_POST['ds_roads'][$key];
    
    $sql="INSERT into road_grade (ds,userid,`year`,gnda,high_way,grade_a,garde_b,grade_c,grade_d,city_council_roads,ds_roads) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$high_way."','".$grade_a."','".$garde_b."','".$grade_c."','".$grade_d."','".$city_council_roads."','".$ds_roads."')";
    $insert = $conn->query($sql);
    }
     
    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=3&&year=$year3';</script>";
    }
}


//post_office
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    $post_office = $_POST['post_office'][$key];
    $addres = $_POST['addres'][$key];
   
    $sql="INSERT into post_office (ds,userid,`year`,gnda,post_office,addres) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$post_office."','".$addres."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=4&&year=$year4';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================


//permit_vehicle
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $caru = $_POST['caru'][$key];
    $motor_bicycleu = $_POST['motor_bicycleu'][$key];
    $three_wheelu = $_POST['three_wheelu'][$key];
    $private_busu = $_POST['private_busu'][$key];
    $dual_function_vehiclesu = $_POST['dual_function_vehiclesu'][$key];
    $lorriesu = $_POST['lorriesu'][$key];
    $agri_vehiclesu = $_POST['agri_vehiclesu'][$key];
    $otheru = $_POST['otheru'][$key];
    
    $sql = "update permit_vehicle set car ='$caru',motor_bicycle='$motor_bicycleu',three_wheel='$three_wheelu',private_bus='$private_busu',motor_bicycle='$motor_bicycleu',dual_function_vehicles='$dual_function_vehiclesu',lorries='$lorriesu',agri_vehicles='$agri_vehiclesu',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=1&&year=$year1u';</script>";
    }
}



//registered_manufacturing_industry
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $caru = $_POST['caru'][$key];
    $tricycle_caru = $_POST['tricycle_caru'][$key];
    $tricycleu = $_POST['tricycleu'][$key];
    $tricycle_vanu = $_POST['tricycle_vanu'][$key];
    $busu = $_POST['busu'][$key];
    $motor_bicycleu = $_POST['motor_bicycleu'][$key];
    $dual_function_vehicleu = $_POST['dual_function_vehicleu'][$key];
    $single_cabu = $_POST['single_cabu'][$key];
    $special_vehicleu = $_POST['special_vehicleu'][$key];
    $lorriesu = $_POST['lorriesu'][$key];
    $prime_moveru = $_POST['prime_moveru'][$key];
    $ambulanceu = $_POST['ambulanceu'][$key];
    $funeral_redu = $_POST['funeral_redu'][$key];
    $lorry_traileru = $_POST['lorry_traileru'][$key];
    $tractor_traileru = $_POST['tractor_traileru'][$key];
    $hand_tractoru = $_POST['hand_tractoru'][$key];
    $tractoru = $_POST['tractoru'][$key];
   
    $sql = "update new_vehicle set car='$caru',tricycle_car='$tricycle_caru',tricycle='$tricycleu',tricycle_van='$tricycle_vanu',bus='$busu',motor_bicycle='$motor_bicycleu',dual_function_vehicle='$dual_function_vehicleu',single_cab='$single_cabu',special_vehicle='$special_vehicleu',lorries='$lorriesu',prime_mover='$prime_moveru',ambulance='$ambulanceu',funeral_red='$funeral_redu',lorry_trailer='$lorry_traileru',tractor_trailer='$tractor_traileru',hand_tractor='$hand_tractoru',tractor='$tractoru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=2&&year=$year2u';</script>";
    }
}


//weekly_fair
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $high_wayu = $_POST['high_wayu'][$key];
    $grade_au = $_POST['grade_au'][$key];
    $garde_bu = $_POST['garde_bu'][$key];
    $grade_cu = $_POST['grade_cu'][$key];
    $grade_du = $_POST['grade_du'][$key];
    $city_council_roadsu = $_POST['city_council_roadsu'][$key];
    $ds_roadsu = $_POST['ds_roadsu'][$key];
   
    $sql = "update road_grade set high_way='$high_wayu',grade_a='$grade_au',garde_b='$garde_bu',grade_c='$grade_cu',grade_d='$grade_du',city_council_roads='$city_council_roadsu',ds_roads='$ds_roadsu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=3&&year=$year3u';</script>";
    }
}


//post_office
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $post_officeu = $_POST['post_officeu'][$key];
    $addresu = $_POST['addresu'][$key];
   
    $sql = "update post_office set post_office='$post_officeu',addres='$addresu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='communication.php?type=4&&year=$year4u';</script>";
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
                  <i class="mdi mdi-wifi"></i>
                </span> ප්‍රවාහනය හා සංනිවේදනය
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
                            <center><a class="dropdown-item" href="communication.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="communication.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="communication.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="communication.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="communication.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="communication.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="communication.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="communication.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="communication.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="communication.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="communication.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="communication.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='communication.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>බලපත්‍ර ලබාගෙන ඇති වාහන සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='communication.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>නව වාහන ලියාපදිංචි කිරීම</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='communication.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ශ්‍රේණිය හා දිග අනුව ප්‍රධාන මාර්ග පිළිබද තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='communication.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>තැපැල් කාර්යාල/උප තැපැල් කාර්යාල පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

        </div>

        </form>



<!-- ===========================බලපත්‍ර ලබාගෙන ඇති වාහන සංඛ්‍යාව ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">බලපත්‍ර ලබාගෙන ඇති වාහන සංඛ්‍යාව</h4>


<?php 

  $q3 =$conn->query("SELECT * from permit_vehicle WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $car=$row['car'];
    $motor_bicycle=$row['motor_bicycle'];
    $three_wheel=$row['three_wheel'];
    $private_bus=$row['private_bus'];
    $dual_function_vehicles=$row['dual_function_vehicles'];
    $lorries=$row['lorries'];
    $agri_vehicles=$row['agri_vehicles'];
    $other=$row['other'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මෝටර් කාර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="caru[]" value='<?php echo $car; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් සයිකල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="motor_bicycleu[]" value='<?php echo $motor_bicycle; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ත්‍රීරෝද රථ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_wheelu[]" value='<?php echo $three_wheel; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුද්ගලික බස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_busu[]" value='<?php echo $private_bus; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ද්විත්ව කාර්යය වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dual_function_vehiclesu[]" value='<?php echo $dual_function_vehicles; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලොරි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lorriesu[]" value='<?php echo $lorries; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂි ඉඩම් වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agri_vehiclesu[]" value='<?php echo $agri_vehicles; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
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
                    <h4 class="card-title">බලපත්‍ර ලබාගෙන ඇති වාහන සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මෝටර් කාර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="car[]">
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් සයිකල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="motor_bicycle[]">
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ත්‍රීරෝද රථ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_wheel[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුද්ගලික බස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_bus[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ද්විත්ව කාර්යය වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dual_function_vehicles[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලොරි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lorries[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂි ඉඩම් වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agri_vehicles[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year1[]' value='$year'>"; ?>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit1" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>

<?php }} ?>

    
<!-- ===========================නව වාහන ලියාපදිංචි කිරීම================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නව වාහන ලියාපදිංචි කිරීම</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from new_vehicle WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $car=$row['car'];
                        $tricycle_car=$row['tricycle_car'];
                        $tricycle=$row['tricycle'];
                        $tricycle_van=$row['tricycle_van'];
                        $bus=$row['bus'];
                        $motor_bicycle=$row['motor_bicycle'];
                        $dual_function_vehicle=$row['dual_function_vehicle'];
                        $single_cab=$row['single_cab'];
                        $special_vehicle=$row['special_vehicle'];
                        $lorries=$row['lorries'];
                        $prime_mover=$row['prime_mover'];
                        $ambulance=$row['ambulance'];
                        $funeral_red=$row['funeral_red'];
                        $lorry_trailer=$row['lorry_trailer'];
                        $tractor_trailer=$row['tractor_trailer'];
                        $hand_tractor=$row['hand_tractor'];
                        $tractor=$row['tractor'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මෝටර් කාර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="caru[]" value='<?php echo $car; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් ට්‍රයිසිකල් කාර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tricycle_caru[]" value='<?php echo $tricycle_car; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මෝටර් ට්‍රයිසිකල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tricycleu[]" value='<?php echo $tricycle; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් ට්‍රයිසිකල් වැන්</label>
 
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tricycle_vanu[]" value='<?php echo $tricycle_van; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="busu[]" value='<?php echo $bus; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් සයිකල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="motor_bicycleu[]" value='<?php echo $motor_bicycle; ?>'>
                        </div>

                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ද්විත්ව කාර්යය වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dual_function_vehicleu[]" value='<?php echo $dual_function_vehicle; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිංගල් කැබ්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="single_cabu[]" value='<?php echo $single_cab; ?>'>
                        </div>

                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">විශේෂ කාර්යය වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="special_vehicleu[]" value='<?php echo $special_vehicle; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලොරි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lorriesu[]" value='<?php echo $lorries; ?>'>
                        </div>

                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රයිම් මූවර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="prime_moveru[]" value='<?php echo $prime_mover; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගිලන් රථ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ambulanceu[]" value='<?php echo $ambulance; ?>'>
                        </div>

                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවමංගල රථ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="funeral_redu[]" value='<?php echo $funeral_red; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලොරි ට්‍රේලර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lorry_traileru[]" value='<?php echo $lorry_trailer; ?>'>
                        </div>

                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ට්‍රැක්ටර් ට්‍රේලර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tractor_traileru[]" value='<?php echo $tractor_trailer; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අත් ට්‍රැක්ටර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hand_tractoru[]" value='<?php echo $hand_tractor; ?>'>
                        </div>

                      </div> 


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ට්‍රැක්ටර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tractoru[]" value='<?php echo $tractor; ?>'>
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
                    <h4 class="card-title">නව වාහන ලියාපදිංචි කිරීම</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මෝටර් කාර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="car[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් ට්‍රයිසිකල් කාර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tricycle_car[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මෝටර් ට්‍රයිසිකල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tricycle[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් ට්‍රයිසිකල් වැන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tricycle_van[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bus[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් සයිකල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="motor_bicycle[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ද්විත්ව කාර්යය වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dual_function_vehicle[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිංගල් කැබ්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="single_cab[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">විශේෂ කාර්යය වාහන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="special_vehicle[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලොරි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lorries[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රයිම් මූවර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="prime_mover[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගිලන් රථ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ambulance[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවමංගල රථ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="funeral_red[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලොරි ට්‍රේලර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lorry_trailer[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ට්‍රැක්ටර් ට්‍රේලර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tractor_trailer[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අත් ට්‍රැක්ටර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hand_tractor[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ට්‍රැක්ටර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tractor[]" >
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


<!-- ===========================ශ්‍රේණිය හා දිග අනුව ප්‍රධාන මාර්ග පිළිබද තොරතුරු ================================== -->
<?php
$type=$_GET['type'];
if($type=='3'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ශ්‍රේණිය හා දිග අනුව ප්‍රධාන මාර්ග පිළිබද තොරතුරු</h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from road_grade WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $high_way=$row['high_way'];
                        $grade_a=$row['grade_a'];
                        $garde_b=$row['garde_b'];
                        $grade_c=$row['grade_c'];
                        $grade_d=$row['grade_d'];
                        $city_council_roads=$row['city_council_roads'];
                        $ds_roads=$row['ds_roads'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අධිවේගී මාර්ග දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="high_wayu[]" value='<?php echo $high_way; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">A ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grade_au[]" value='<?php echo $grade_a; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">B ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="garde_bu[]" value='<?php echo $garde_b; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">C ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grade_cu[]" value='<?php echo $grade_c; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">D ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grade_du[]" value='<?php echo $grade_d; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නගර සභා මාර්ග දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="city_council_roadsu[]" value='<?php echo $city_council_roads; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රාදේශීය සභා මාර්ග දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ds_roadsu[]" value='<?php echo $ds_roads; ?>'>
                        </div>        
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year3u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id3[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update3" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

<?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ශ්‍රේණිය හා දිග අනුව ප්‍රධාන මාර්ග පිළිබද තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අධිවේගී මාර්ග දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="high_way[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">A ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grade_a[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">B ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="garde_b[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">C ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grade_c[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">D ශ්‍රේණිය දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grade_d[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නගර සභා මාර්ග දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="city_council_roads[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රාදේශීය සභා මාර්ග දුර කි.මී.</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ds_roads[]" >
                        </div>
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year3[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit3" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } }?>


<!-- ===========================තැපැල් කාර්යාල/උප තැපැල් කාර්යාල පිළිබද තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">තැපැල් කාර්යාල/උප තැපැල් කාර්යාල පිළිබද තොරතුරු</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from post_office WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $post_office=$row['post_office'];
                          $addres=$row['addres'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">තැපැල් කාර්යාලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="post_officeu[]" value='<?php echo $post_office; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                      </div>
                     
                      <?php echo "<input type='hidden' id='custId' name='year4u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id4[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update4" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

<?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">තැපැල් කාර්යාල/උප තැපැල් කාර්යාල පිළිබද තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">තැපැල් කාර්යාලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="post_office[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year4[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit4" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

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