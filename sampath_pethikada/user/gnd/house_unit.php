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

// ========================insert data==========================

//tot_hous_units
if(isset($_POST['submit8']))
{ 
  $tot_house_units=$_POST['tot_house_units'];
  $tot_families=$_POST['tot_families'];
  $year8=$_POST['year8'];
 
  $sql8="INSERT into tot_hous_units (ds,userid,year,tot_house_units,tot_families,gnda) 
        VALUES ('".$ds."','".$uid."','".$year8."','".$tot_house_units."','".$tot_families."','".$gnda."')";
        $insert = $conn->query($sql8);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=8&&year=$year8';</script>";
  }
}


//source_light
if(isset($_POST['submit1']))
{ 
  $year1=$_POST['year1'];
  $house_units=$_POST['house_units'];
  $electricity=$_POST['electricity'];
  $lamp_oil=$_POST['lamp_oil'];
  $solar_power=$_POST['solar_power'];
  $other_power=$_POST['other_power'];
  $no_electricity=$_POST['no_electricity'];
 
  $sql1="INSERT into source_light (ds,userid,year,house_units,electricity,lamp_oil,solar_power,other_power,no_electricity,gnda) 
  VALUES ('".$ds."','".$uid."','".$year1."','".$house_units."','".$electricity."','".$lamp_oil."','".$solar_power."','".$other_power."','".$no_electricity."','".$gnda."')";
  $insert = $conn->query($sql1);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=1&&year=$year1';</script>";
  }
}


//materials_used_houses
if(isset($_POST['submit2']))
{ 
  $year2=$_POST['year2'];
  $durable_house=$_POST['durable_house'];
  $non_durable_house=$_POST['non_durable_house'];
 
  $sql2="INSERT into materials_used_houses (ds,userid,year,durable_house,non_durable_house,gnda) 
  VALUES ('".$ds."','".$uid."','".$year2."','".$durable_house."','".$non_durable_house."','".$gnda."')";
  $insert = $conn->query($sql2);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=2&&year=$year2';</script>";
  }
}


//housing_unit
if(isset($_POST['submit3']))
{ 
  $year3=$_POST['year3'];
  $individual_houses=$_POST['individual_houses'];
  $pair_houses=$_POST['pair_houses'];
  $shanty_houses=$_POST['shanty_houses'];
  $appropriate_houses=$_POST['appropriate_houses'];
  $apartments=$_POST['apartments'];
  $other_houses=$_POST['other_houses'];
 
  $sql3="INSERT into housing_unit (ds,userid,year,individual_houses,pair_houses,shanty_houses,appropriate_houses,apartments,other_houses,gnda) 
  VALUES ('".$ds."','".$uid."','".$year3."','".$individual_houses."','".$pair_houses."','".$shanty_houses."','".$appropriate_houses."','".$apartments."','".$other_houses."','".$gnda."')";
  $insert = $conn->query($sql3);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=3&&year=$year3';</script>";
  }
}


//material_used_roof
if(isset($_POST['submit4']))
{ 
  $year4=$_POST['year4'];
  $durable_roof=$_POST['durable_roof'];
  $non_durable_roof=$_POST['non_durable_roof'];
 
  $sql4="INSERT into material_used_roof (ds,userid,year,durable_roof,non_durable_roof,gnda) 
  VALUES ('".$ds."','".$uid."','".$year4."','".$durable_roof."','".$non_durable_roof."','".$gnda."')";
  $insert = $conn->query($sql4);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=4&&year=$year4';</script>";
  }
}


//source_drinking_water
if(isset($_POST['submit5']))
{ 
  $year5=$_POST['year5'];
  $well=$_POST['well'];
  $main_pipe_water=$_POST['main_pipe_water'];
  $rural_water_projects=$_POST['rural_water_projects'];
  $tube_well=$_POST['tube_well'];
  $bottled_water=$_POST['bottled_water'];
  $river=$_POST['river'];
 
  $sql5="INSERT into source_drinking_water (ds,userid,year,well,main_pipe_water,rural_water_projects,tube_well,bottled_water,river,gnda) 
        VALUES ('".$ds."','".$uid."','".$year5."','".$well."','".$main_pipe_water."','".$rural_water_projects."','".$tube_well."','".$bottled_water."','".$river."','".$gnda."')";
        $insert = $conn->query($sql5);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=5&&year=$year5';</script>";
  }
}


//toilet_facilities
if(isset($_POST['submit6']))
{ 
  $year6=$_POST['year6'];
  $has_a_toilet=$_POST['has_a_toilet'];
  $has_a_toilet_shared=$_POST['has_a_toilet_shared'];
  $public_toilet=$_POST['public_toilet'];
  $not_using_toilet=$_POST['not_using_toilet'];
 
  $sql6="INSERT into toilet_facilities (ds,userid,year,has_a_toilet,has_a_toilet_shared,public_toilet,not_using_toilet,gnda) 
  VALUES ('".$ds."','".$uid."','".$year6."','".$has_a_toilet."','".$has_a_toilet_shared."','".$public_toilet."','".$not_using_toilet."','".$gnda."')";
  $insert = $conn->query($sql6);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=6&&year=$year6';</script>";
  }
}


//house_ownership
if(isset($_POST['submit7']))
{ 
  $year7=$_POST['year7'];
  $freelancer=$_POST['freelancer'];
  $tax=$_POST['tax'];
  $rent=$_POST['rent'];
  $other_units=$_POST['other_units'];
 
  $sql7="INSERT into house_ownership (ds,userid,year,freelancer,tax,rent,other_units,gnda) 
  VALUES ('".$ds."','".$uid."','".$year7."','".$freelancer."','".$tax."','".$rent."','".$other_units."','".$gnda."')";
  $insert = $conn->query($sql7);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=7&&year=$year7';</script>";
  }
}
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================


//tot_hous_units
if(isset($_POST['update8']))
{ 
  $tot_house_unitsu=$_POST['tot_house_unitsu'];
  $tot_familiesu=$_POST['tot_familiesu'];
  $year8u=$_POST['year8u'];
 
  $sql = "update tot_hous_units set tot_house_units='$tot_house_unitsu',tot_families='$tot_familiesu' WHERE userid='$uid' AND year='$year8u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=8&&year=$year8u';</script>";
  }
}


//source_light
if(isset($_POST['update1']))
{ 
  $year1u=$_POST['year1u'];
  $house_unitsu=$_POST['house_unitsu'];
  $electricityu=$_POST['electricityu'];
  $lamp_oilu=$_POST['lamp_oilu'];
  $solar_poweru=$_POST['solar_poweru'];
  $other_poweru=$_POST['other_poweru'];
  $no_electricityu=$_POST['no_electricityu'];

  $sql1 = "update source_light set house_units='$house_unitsu',electricity='$electricityu',lamp_oil='$lamp_oilu',solar_power='$solar_poweru',other_power='$other_poweru',no_electricity='$no_electricityu' WHERE userid='$uid' AND year='$year1u'";
  $update = $conn->query($sql1);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=1&&year=$year1u';</script>";
  }
}


//materials_used_houses
if(isset($_POST['update2']))
{ 
  $year2u=$_POST['year2u'];
  $durable_houseu=$_POST['durable_houseu'];
  $non_durable_houseu=$_POST['non_durable_houseu'];
 
  $sql2 = "update materials_used_houses set durable_house='$durable_houseu',non_durable_house='$non_durable_houseu' WHERE userid='$uid' AND year='$year2u'";
  $update = $conn->query($sql2);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=2&&year=$year2u';</script>";
  }
}


//housing_unit
if(isset($_POST['update3']))
{ 
  $year3u=$_POST['year3u'];
  $individual_housesu=$_POST['individual_housesu'];
  $pair_housesu=$_POST['pair_housesu'];
  $shanty_housesu=$_POST['shanty_housesu'];
  $appropriate_housesu=$_POST['appropriate_housesu'];
  $apartmentsu=$_POST['apartmentsu'];
  $other_housesu=$_POST['other_housesu'];
 
  $sql3 = "update housing_unit set individual_houses='$individual_housesu',pair_houses='$pair_housesu',shanty_houses='$shanty_housesu',appropriate_houses='$appropriate_housesu',apartments='$apartmentsu',other_houses='$other_housesu' WHERE userid='$uid' AND year='$year3u'";
  $update = $conn->query($sql3);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=3&&year=$year3u';</script>";
  }
}


//material_used_roof
if(isset($_POST['update4']))
{ 
  $year4u=$_POST['year4u'];
  $durable_roofu=$_POST['durable_roofu'];
  $non_durable_roofu=$_POST['non_durable_roofu'];
 
  $sql4 = "update material_used_roof set durable_roof='$durable_roofu',non_durable_roof='$non_durable_roofu' WHERE userid='$uid' AND year='$year4u'";
  $update = $conn->query($sql4);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=4&&year=$year4u';</script>";
  }
}


//source_drinking_water
if(isset($_POST['update5']))
{ 
  $year5u=$_POST['year5u'];
  $wellu=$_POST['wellu'];
  $main_pipe_wateru=$_POST['main_pipe_wateru'];
  $rural_water_projectsu=$_POST['rural_water_projectsu'];
  $tube_wellu=$_POST['tube_wellu'];
  $bottled_wateru=$_POST['bottled_wateru'];
  $riveru=$_POST['riveru'];
 
  $sql5 = "update source_drinking_water set well='$wellu',main_pipe_water='$main_pipe_wateru',rural_water_projects='$rural_water_projectsu',tube_well='$tube_wellu',bottled_water='$bottled_wateru',river='$riveru' WHERE userid='$uid' AND year='$year5u'";
  $update = $conn->query($sql5);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=5&&year=$year5u';</script>";
  }
}


//toilet_facilities
if(isset($_POST['update6']))
{ 
  $year6u=$_POST['year6u'];
  $has_a_toiletu=$_POST['has_a_toiletu'];
  $has_a_toilet_sharedu=$_POST['has_a_toilet_sharedu'];
  $public_toiletu=$_POST['public_toiletu'];
  $not_using_toiletu=$_POST['not_using_toiletu'];
 
  $sql6 = "update toilet_facilities set has_a_toilet='$has_a_toiletu',has_a_toilet_shared='$has_a_toilet_sharedu',public_toilet='$public_toiletu',not_using_toilet='$not_using_toiletu' WHERE userid='$uid' AND year='$year6u'";
  $update = $conn->query($sql6);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=6&&year=$year6u';</script>";
  }
}


//house_ownership
if(isset($_POST['update7']))
{ 
  $year7u=$_POST['year7u'];
  $freelanceru=$_POST['freelanceru'];
  $taxu=$_POST['taxu'];
  $rentu=$_POST['rentu'];
  $other_unitsu=$_POST['other_unitsu'];
 
  $sql7 = "update house_ownership set freelancer='$freelanceru',tax='$taxu',rent='$rentu',other_units='$other_unitsu' WHERE userid='$uid' AND year='$year7u'";
  $update = $conn->query($sql7);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='house_unit.php?type=7&&year=$year7u';</script>";
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
                          <center><a class="dropdown-item" href="population.php?year=2019&&type=0">2019</a>
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
  
  $q1 =$conn->query("SELECT * from source_light WHERE userid='$uid' AND year='$year_update'");
if($q1 !== false && $q1->num_rows > 0){
while($row=$q1->fetch_assoc()){

$house_unitsr=$row['house_units'];
$electricityr=$row['electricity'];
$lamp_oilr=$row['lamp_oil'];
$solar_powerr=$row['solar_power'];
$other_powerr=$row['other_power'];
$no_electricityr=$row['no_electricity'];
}
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">ආලෝකය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h4>
                  <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිවාස ඒකක ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="house_unitsu" value='<?php echo $house_unitsr; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electricityu" value='<?php echo $electricityr; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භූමි තෙල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lamp_oilu" value='<?php echo $lamp_oilr; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සූර්ය බලශක්තිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="solar_poweru" value='<?php echo $solar_powerr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_poweru" value='<?php echo $other_powerr; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලිය නොමැති</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_electricityu" value='<?php echo $no_electricityr; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year1u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update1">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>


              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">ආලෝකය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h4>
                  <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිවාස ඒකක ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="house_units" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electricity" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භූමි තෙල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lamp_oil" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සූර්ය බලශක්තිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="solar_power" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_power" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලිය නොමැති</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_electricity" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year1' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit1">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>
<!-- ============================================================= -->


<!-- ============================================================= -->
<?php 
if($type=='2'){
  $q2 =$conn->query("SELECT * from materials_used_houses WHERE userid='$uid' AND year='$year_update'");
  if($q2 !== false && $q2->num_rows > 0){
  while($row=$q2->fetch_assoc()){
  
  $durable_houser=$row['durable_house'];
  $non_durable_houser=$row['non_durable_house'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස ඉදිකිරීම සදහා යොදා ගෙන ඇති ප්‍රධාන ද්‍රව්‍ය අනුව</h4>
                    <form action="" name="2" method="post" class="signin-form" enctype="multipart/form-data"> 
                    
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් පවතින ද්‍රව්‍ය (ගඩොල්, සිමෙන්ති ගල්/කලු ගල්, මැටි ගල්, කබොක්/වෙනත්)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="durable_houseu" value='<?php echo $durable_houser; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="non_durable_houseu" value='<?php echo $non_durable_houser; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year2u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update2">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else {?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස ඉදිකිරීම සදහා යොදා ගෙන ඇති ප්‍රධාන ද්‍රව්‍ය අනුව</h4>
                    <form action="" name="2" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් පවතින ද්‍රව්‍ය (ගඩොල්, සිමෙන්ති ගල්/කලු ගල්, මැටි ගල්, කබොක්/වෙනත්)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="durable_house">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="non_durable_house" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year2' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-primary me-2" name="submit2">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='3'){

  $q3 =$conn->query("SELECT * from housing_unit WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
  
    $individual_housesr=$row['individual_houses'];
    $pair_housesr=$row['pair_houses'];
    $shanty_housesr=$row['shanty_houses'];
    $appropriate_housesr=$row['appropriate_houses'];
    $apartmentsr=$row['apartments'];
    $other_housesr=$row['other_houses'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස ඒකක වර්ගය අනුව</h4>
                    <form action="" name="3" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">තනි නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="individual_housesu" value='<?php echo $individual_housesr; ?>'>  
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">යුගල නිවාස/පේලි නිවාස/ලයින් කාමර</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="pair_housesu" value='<?php echo $pair_housesr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පැල්පත් නිවාස/මුඩුක්කු නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="shanty_housesu" value='<?php echo $shanty_housesr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">අනුයුක්ත නිවාස/උප ගෘහ</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="appropriate_housesu" value='<?php echo $appropriate_housesr; ?>'>
                        </div>

                      </div>
                      

                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">තට්ටු නිවාස/සුපිරි නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="apartmentsu" value='<?php echo $apartmentsr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">වෙනත්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="other_housesu" value='<?php echo $other_housesr; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year3u' value='$year'>"; ?>
                      <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update3">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?} else {?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස ඒකක වර්ගය අනුව</h4>
                    <form action="" name="3" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">තනි නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="individual_houses">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">යුගල නිවාස/පේලි නිවාස/ලයින් කාමර</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="pair_houses">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පැල්පත් නිවාස/මුඩුක්කු නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="shanty_houses">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">අනුයුක්ත නිවාස/උප ගෘහ</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="appropriate_houses">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">තට්ටු නිවාස/සුපිරි නිවාස</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="apartments">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">වෙනත්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="other_houses">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year3' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-primary me-2" name="submit3">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>



<!-- ============================================================= -->
<?php 
if($type=='4'){

  $q4 =$conn->query("SELECT * from material_used_roof WHERE userid='$uid' AND year='$year_update'");
  if($q4 !== false && $q4->num_rows > 0){
  while($row=$q4->fetch_assoc()){
  
    $durable_roofr=$row['durable_roof'];
    $non_durable_roofr=$row['non_durable_roof'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස වහල ඉදිකිරීම සදහා යොදා ඇති ද්‍රව්‍ය අනුව</h4>
                    <form action="" name="4" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් පවතින ද්‍රව්‍ය (උලු, ඇස්බැස්ටෝස්, ටකරන්, කොන්ක්‍රීට්, ඇලුමිනියම් මිශ්‍ර තහඩු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="durable_roofu" value='<?php echo $durable_roofr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="non_durable_roofu" value='<?php echo $non_durable_roofr; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year4u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update4">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php }else {?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස වහල ඉදිකිරීම සදහා යොදා ඇති ද්‍රව්‍ය අනුව</h4>
                    <form action="" name="4" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් පවතින ද්‍රව්‍ය (උලු, ඇස්බැස්ටෝස්, ටකරන්, කොන්ක්‍රීට්, ඇලුමිනියම් මිශ්‍ර තහඩු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="durable_roof">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කල් නො පවතින (මැටි,ලෑලි,පොල් අතු, තල් අතු)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="non_durable_roof">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year4' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit4">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>



<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='5'){

  $q5 =$conn->query("SELECT * from source_drinking_water WHERE userid='$uid' AND year='$year_update'");
  if($q5 !== false && $q5->num_rows > 0){
  while($row=$q5->fetch_assoc()){
  
    $wellr=$row['well'];
    $main_pipe_waterr=$row['main_pipe_water'];
    $rural_water_projectsr=$row['rural_water_projects'];
    $tube_wellr=$row['tube_well'];
    $bottled_waterr=$row['bottled_water'];
    $riverr=$row['river'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">බීමට ජලය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h4>
                    <form action="" name="5" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළිඳ - ආරක්ෂිත , අනාරක්ෂිත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="wellu" value='<?php echo $wellr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රධාන නල ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="main_pipe_wateru" value='<?php echo $main_pipe_waterr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ග්‍රාමීය ජල ව්‍යාපෘති</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rural_water_projectsu" value='<?php echo $rural_water_projectsr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නළ ළිඳ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tube_wellu" value='<?php echo $tube_wellr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බෝතල් කල ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bottled_wateru" value='<?php echo $bottled_waterr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වැව්/ගංගා/ඇල/දොල/බුබුළු ආදී වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="riveru" value='<?php echo $riverr; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update5">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php }else {?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">බීමට ජලය ලබාගන්නා ප්‍රධාන මාර්ගය අනුව</h4>
                    <form action="" name="5" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළිඳ - ආරක්ෂිත , අනාරක්ෂිත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="well">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රධාන නල ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="main_pipe_water">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ග්‍රාමීය ජල ව්‍යාපෘති</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rural_water_projects">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නළ ළිඳ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tube_well">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බෝතල් කල ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bottled_water">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වැව්/ගංගා/ඇල/දොල/බුබුළු ආදී වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="river">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit5">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='6'){

  $q6 =$conn->query("SELECT * from toilet_facilities WHERE userid='$uid' AND year='$year_update'");
  if($q6 !== false && $q6->num_rows > 0){
  while($row=$q6->fetch_assoc()){
  
    $has_a_toiletr=$row['has_a_toilet'];
    $has_a_toilet_sharedr=$row['has_a_toilet_shared'];
    $public_toiletr=$row['public_toilet'];
    $not_using_toiletr=$row['not_using_toilet'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වැසිකිළි පහසුකම් අනුව</h4>
                    <form action="" name="6" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකකයට වැසිකිළියක් ඇත (ගෘහ කාණ්ඩයේ තනි ප්‍රයෝජනයට, වෙනත් ගෘහ කාණ්ඩ සමග හවුලේ)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="has_a_toiletu" value='<?php echo $has_a_toiletr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකකයට වැසිකිළියක් ඇති අතර වෙනත් ගෘහ කාණ්ඩ සමග  </label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="has_a_toilet_sharedu" value='<?php echo $has_a_toilet_sharedr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පොදු/ප්‍රසිද්ධ/තාවකාලික වැසිකිළි</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="public_toiletu" value='<?php echo $public_toiletr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වැසිකිළි භාවිතා නො කරන</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="not_using_toiletu" value='<?php echo $not_using_toiletr; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year6u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="update6">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වැසිකිළි පහසුකම් අනුව</h4>
                    <form action="" name="6" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකකයට වැසිකිළියක් ඇත (ගෘහ කාණ්ඩයේ තනි ප්‍රයෝජනයට, වෙනත් ගෘහ කාණ්ඩ සමග හවුලේ)</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="has_a_toilet">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකකයට වැසිකිළියක් ඇති අතර වෙනත් ගෘහ කාණ්ඩ සමග  </label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="has_a_toilet_shared">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පොදු/ප්‍රසිද්ධ/තාවකාලික වැසිකිළි</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="public_toilet">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වැසිකිළි භාවිතා නො කරන</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="not_using_toilet">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year6' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit6">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
<!-- ============================================================= -->




<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='7'){

  $q7 =$conn->query("SELECT * from house_ownership  WHERE userid='$uid' AND year='$year_update'");
  if($q7 !== false && $q7->num_rows > 0){
  while($row=$q7->fetch_assoc()){
  
    $freelancerr=$row['freelancer'];
    $taxr=$row['tax'];
    $rentr=$row['rent'];
    $other_unitsr=$row['other_units'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවසේ අයිතිය අනුව</h4>
                    <form action="" name="66" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">සින්නක්කර</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="freelanceru" value='<?php echo $freelancerr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">බදු</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="taxu" value='<?php echo $taxr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">කුලී</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="rentu" value='<?php echo $rentr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">වෙනත්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="other_unitsu" value='<?php echo $other_unitsr; ?>'>
                        </div>

                      </div>


                      <?php echo "<input type='hidden' id='custId' name='year7u' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-info me-2" name="update7">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවසේ අයිතිය අනුව</h4>
                    <form action="" name="6" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">සින්නක්කර</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="freelancer">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">බදු</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="tax">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">කුලී</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="rent">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">වෙනත්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="other_units">
                        </div>

                      </div>


                      <?php echo "<input type='hidden' id='custId' name='year7' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit7">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
<!-- ============================================================= -->




<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='8'){

  $q1 =$conn->query("SELECT * from tot_hous_units WHERE userid='$uid' AND year='$year_update'");
  if($q1 !== false && $q1->num_rows > 0){
  while($row=$q1->fetch_assoc()){
  
     $tot_house_unitsr=$row['tot_house_units'];
     $tot_familiesr=$row['tot_families'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස ඒකක</h4>
                    <form action="" name="6" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකක සංඛ්‍යාව</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="tot_house_unitsu"  value='<?php echo $tot_house_unitsr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="tot_familiesu"  value='<?php echo $tot_familiesr; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year8u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update8">Update</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else {?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">නිවාස ඒකක</h4>
                    <form action="" name="6" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">නිවාස ඒකක සංඛ්‍යාව</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="tot_house_units">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="tot_families">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year8' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit8">Submit</button> </center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
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