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

//emp_major_sectors
if(isset($_POST['submit1']))
{ 

$year1=$_POST['year1'];
$agriculture=$_POST['agriculture'];
$industrial=$_POST['industrial'];
$services=$_POST['services'];
$tot_services_division=$_POST['tot_services_division'];
 
  $sql1="INSERT into emp_major_sectors (ds,userid,year,agriculture,industrial,services,tot_services_division,gnda) 
         VALUES ('".$ds."','".$uid."','".$year1."','".$agriculture."','".$industrial."','".$services."','".$tot_services_division."','".$gnda."')";
         $insert = $conn->query($sql1);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=1&&year=$year1';</script>";
  }
}



//unemployment_rate
if(isset($_POST['submit2']))
{ 

  $year2=$_POST['year2'];
  $services_total_female=$_POST['services_total_female'];
  $services_total_male=$_POST['services_total_male'];
  $government_female=$_POST['government_female'];
  $government_male=$_POST['government_male'];
  $semi_government_female=$_POST['semi_government_female'];
  $semi_government_male=$_POST['semi_government_male'];
  $private_female=$_POST['private_female'];
  $private_male=$_POST['private_male'];
  $self_employment_female=$_POST['self_employment_female'];
  $self_employment_male=$_POST['self_employment_male'];
  $unemployment_female=$_POST['unemployment_female'];
  $unemployment_male=$_POST['unemployment_male'];

  $sql2="INSERT into unemployment_rate (ds,userid,year,services_total_female,services_total_male,government_female,government_male,semi_government_female,semi_government_male,private_female,private_male,self_employment_female,self_employment_male,unemployment_female,unemployment_male,gnda) 
         VALUES ('".$ds."','".$uid."','".$year2."','".$services_total_female."','".$services_total_male."','".$government_female."','".$government_male."','".$semi_government_female."','".$semi_government_male."','".$private_female."','".$private_male."','".$self_employment_female."','".$self_employment_male."','".$unemployment_female."','".$unemployment_male."','".$gnda."')";
         $insert = $conn->query($sql2);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=2&&year=$year2';</script>";
  }
}


//unskilled_abroad_emp
if(isset($_POST['submit3']))
{ 

$year3=$_POST['year3'];
$female_me_nt=$_POST['female_me_nt'];
$male_me_nt=$_POST['male_me_nt'];
$female_korea_nt=$_POST['female_korea_nt'];
$male_korea_nt=$_POST['male_korea_nt'];
$female_europe_nt=$_POST['female_europe_nt'];
$male_europe_nt=$_POST['male_europe_nt'];
$female_other_country_nt=$_POST['female_other_country_nt'];
$male_other_country_nt=$_POST['male_other_country_nt'];
 
  $sql3="INSERT into unskilled_abroad_emp (ds,userid,year,female_me_nt,male_me_nt,female_korea_nt,male_korea_nt,female_europe_nt,male_europe_nt,female_other_country_nt,male_other_country_nt,gnda) 
         VALUES ('".$ds."','".$uid."','".$year3."','".$female_me_nt."','".$male_me_nt."','".$female_korea_nt."','".$male_korea_nt."','".$female_europe_nt."','".$male_europe_nt."','".$female_other_country_nt."','".$male_other_country_nt."','".$gnda."')";
         $insert = $conn->query($sql3);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=3&&year=$year3';</script>";
  }
}



//skilled_abroad_emp
if(isset($_POST['submit4']))
{ 

  $year4=$_POST['year4'];
  $female_me_skilled=$_POST['female_me_skilled'];
  $male_me_skilled=$_POST['male_me_skilled'];
  $female_korea_skilled=$_POST['female_korea_skilled'];
  $male_korea_skilled=$_POST['male_korea_skilled'];
  $female_europe_skilled=$_POST['female_europe_skilled'];
  $male_europe_skilled=$_POST['male_europe_skilled'];
  $female_other_country_skilled=$_POST['female_other_country_skilled'];
  $male_other_country_skilled=$_POST['male_other_country_skilled'];

  $sql4="INSERT into skilled_abroad_emp (ds,userid,year,female_me_skilled,male_me_skilled,female_korea_skilled,male_korea_skilled,female_europe_skilled,male_europe_skilled,female_other_country_skilled,male_other_country_skilled,gnda) 
         VALUES ('".$ds."','".$uid."','".$year4."','".$female_me_skilled."','".$male_me_skilled."','".$female_korea_skilled."','".$male_korea_skilled."','".$female_europe_skilled."','".$male_europe_skilled."','".$female_other_country_skilled."','".$male_other_country_skilled."','".$gnda."')";
         $insert = $conn->query($sql4);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=4&&year=$year4';</script>";
  }
}



//unemployment
if(isset($_POST['submit5']))
{ 

  $year5=$_POST['year5'];
  $female_eighteen_twentyfive=$_POST['female_eighteen_twentyfive'];
  $male_eighteen_twentyfive=$_POST['male_eighteen_twentyfive'];
  $female_twentysix_forty=$_POST['female_twentysix_forty'];
  $male_twentysix_forty=$_POST['male_twentysix_forty'];
  $female_fortyone_sixty=$_POST['female_fortyone_sixty'];
  $male_fortyone_sixty=$_POST['male_fortyone_sixty'];
 
  $sql5="INSERT into unemployment (ds,userid,year,female_eighteen_twentyfive,male_eighteen_twentyfive,female_twentysix_forty,male_twentysix_forty,female_fortyone_sixty,male_fortyone_sixty,gnda) 
        VALUES ('".$ds."','".$uid."','".$year5."','".$female_eighteen_twentyfive."','".$male_eighteen_twentyfive."','".$female_twentysix_forty."','".$male_twentysix_forty."','".$female_fortyone_sixty."','".$male_fortyone_sixty."','".$gnda."')";
        $insert = $conn->query($sql5);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=5&&year=$year5';</script>";
  }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================



//emp_major_sectors
if(isset($_POST['update1']))
{ 
$year1u=$_POST['year1u'];
$agricultureu=$_POST['agricultureu'];
$industrialu=$_POST['industrialu'];
$servicesu=$_POST['servicesu'];
$tot_services_divisionu=$_POST['tot_services_divisionu'];
 
$sql = "update emp_major_sectors set agriculture='$agricultureu',industrial='$industrialu',services='$servicesu',tot_services_division='$tot_services_divisionu'";
$update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=1&&year=$year1u';</script>";
  }
}



//unemployment_rate
if(isset($_POST['update2']))
{ 
  $year2u=$_POST['year2u'];
  $services_total_femaleu=$_POST['services_total_femaleu'];
  $services_total_maleu=$_POST['services_total_maleu'];
  $government_femaleu=$_POST['government_femaleu'];
  $government_maleu=$_POST['government_maleu'];
  $semi_government_femaleu=$_POST['semi_government_femaleu'];
  $semi_government_maleu=$_POST['semi_government_maleu'];
  $private_femaleu=$_POST['private_femaleu'];
  $private_maleu=$_POST['private_maleu'];
  $self_employment_femaleu=$_POST['self_employment_femaleu'];
  $self_employment_maleu=$_POST['self_employment_maleu'];
  $unemployment_femaleu=$_POST['unemployment_femaleu'];
  $unemployment_maleu=$_POST['unemployment_maleu'];

  $sql = "update unemployment_rate set services_total_female='$services_total_femaleu',services_total_male='$services_total_maleu',government_female='$government_femaleu',government_male='$government_maleu',semi_government_female='$semi_government_femaleu',semi_government_male='$semi_government_maleu',private_female='$private_femaleu',private_male='$private_maleu',self_employment_female='$self_employment_femaleu',self_employment_male='$self_employment_maleu',unemployment_female='$unemployment_femaleu',unemployment_male='$unemployment_maleu'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=2&&year=$year2u';</script>";
  }
}



//unskilled_abroad_emp
if(isset($_POST['update3']))
{ 

$year3u=$_POST['year3u'];
$female_me_ntu=$_POST['female_me_ntu'];
$male_me_ntu=$_POST['male_me_ntu'];
$female_korea_ntu=$_POST['female_korea_ntu'];
$male_korea_ntu=$_POST['male_korea_ntu'];
$female_europe_ntu=$_POST['female_europe_ntu'];
$male_europe_ntu=$_POST['male_europe_ntu'];
$female_other_country_ntu=$_POST['female_other_country_ntu'];
$male_other_country_ntu=$_POST['male_other_country_ntu'];
 
$sql = "update unskilled_abroad_emp set female_me_nt='$female_me_ntu',male_me_nt='$male_me_ntu',female_korea_nt='$female_korea_ntu',male_korea_nt='$male_korea_ntu',female_europe_nt='$female_europe_ntu',male_europe_nt='$male_europe_ntu',female_other_country_nt='$female_other_country_ntu',male_other_country_nt='$male_other_country_ntu'";
$update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=3&&year=$year3u';</script>";
  }
}


//skilled_abroad_emp
if(isset($_POST['update4']))
{
  $year4u=$_POST['year4u'];
  $female_me_skilledu=$_POST['female_me_skilledu'];
  $male_me_skilledu=$_POST['male_me_skilledu'];
  $female_korea_skilledu=$_POST['female_korea_skilledu'];
  $male_korea_skilledu=$_POST['male_korea_skilledu'];
  $female_europe_skilledu=$_POST['female_europe_skilledu'];
  $male_europe_skilledu=$_POST['male_europe_skilledu'];
  $female_other_country_skilledu=$_POST['female_other_country_skilledu'];
  $male_other_country_skilledu=$_POST['male_other_country_skilledu'];

  $sql = "update skilled_abroad_emp set female_me_skilled='$female_me_skilledu',male_me_skilled='$male_me_skilledu',female_korea_skilled='$female_korea_skilledu',male_korea_skilled='$male_korea_skilledu',female_europe_skilled='$female_europe_skilledu',male_europe_skilled='$male_europe_skilledu',female_other_country_skilled='$female_other_country_skilledu',male_other_country_skilled='$male_other_country_skilledu'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=4&&year=$year4u';</script>";
  }
}



//unemployment
if(isset($_POST['update5']))
{ 

  $year5u=$_POST['year5u'];
  $female_eighteen_twentyfiveu=$_POST['female_eighteen_twentyfiveu'];
  $male_eighteen_twentyfiveu=$_POST['male_eighteen_twentyfiveu'];
  $female_twentysix_fortyu=$_POST['female_twentysix_fortyu'];
  $male_twentysix_fortyu=$_POST['male_twentysix_fortyu'];
  $female_fortyone_sixtyu=$_POST['female_fortyone_sixtyu'];
  $male_fortyone_sixtyu=$_POST['male_fortyone_sixtyu'];
 
  $sql = "update unemployment set female_eighteen_twentyfive='$female_eighteen_twentyfiveu',male_eighteen_twentyfive='$male_eighteen_twentyfiveu',female_twentysix_forty='$female_twentysix_fortyu',male_twentysix_forty='$male_twentysix_fortyu',female_fortyone_sixty='$female_fortyone_sixtyu',male_fortyone_sixty='$male_fortyone_sixtyu'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='job.php?type=5&&year=$year5u';</script>";
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
                          <center><a class="dropdown-item" href="population.php?year=2019&&type=0">2019</a>
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

  $q3 =$conn->query("SELECT * from emp_major_sectors WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){

    $agriculture=$row['agriculture'];
    $industrial=$row['industrial'];
    $services=$row['services'];
    $tot_services_division=$row['tot_services_division'];
  }
?>
  
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">රැකියා නියුක්තිය ප්‍රධාන අංශයන් අනුව</h4>
                  <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂිකාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agricultureu" value='<?php echo $agriculture; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">කාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="industrialu" value='<?php echo $industrial; ?>'>
                        </div>

                      </div>
                      

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවා අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="servicesu" value='<?php echo $services; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මුලු සේවා අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tot_services_divisionu" value='<?php echo $tot_services_division; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year1u' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-info me-2" name="update1">Update</button></center>
                      
                    </form>
                  </div>
                </div>     
              </div>

              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">රැකියා නියුක්තිය ප්‍රධාන අංශයන් අනුව</h4>
                  <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂිකාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agriculture" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">කාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="industrial" >
                        </div>

                      </div>
                              

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවා අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මුලු සේවා අංශය</label>
                        
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tot_services_division" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year1' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit1">Submit</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
<!-- ============================================================= -->


<!-- ============================================================= -->

<?php 
if($type=='2'){

  $q3 =$conn->query("SELECT * from unemployment_rate WHERE userid='$uid' AND year='$year_update'");
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
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රැකියා වර්ගීකරණය හා රැකියා විරහිත ප්‍රමාණය</h4>
                    <form action="" name="2" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මුලු සේවා </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services_total_femaleu" placeholder="ස්ත්‍රී" value='<?php echo $services_total_female; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services_total_maleu" placeholder="පුරුෂ" value='<?php echo $services_total_male; ?>'>
                        </div>

                      </div> 


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රාජ්‍ය අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="government_femaleu" placeholder="ස්ත්‍රී" value='<?php echo $government_female; ?>'> 
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="government_maleu" placeholder="පුරුෂ" value='<?php echo $government_male; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_government_femaleu" placeholder="ස්ත්‍රී" value='<?php echo $semi_government_female; ?>'>
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_government_maleu" placeholder="පුරුෂ" value='<?php echo $semi_government_male; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_femaleu" placeholder="ස්ත්‍රී" value='<?php echo $private_female; ?>'>
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_maleu" placeholder="පුරුෂ" value='<?php echo $private_male; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්වයං රැකියා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self_employment_femaleu" placeholder="ස්ත්‍රී" value='<?php echo $self_employment_female; ?>'>
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self_employment_maleu" placeholder="පුරුෂ" value='<?php echo $self_employment_male; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවා වියුක්ති සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="unemployment_femaleu" placeholder="ස්ත්‍රී" value='<?php echo $unemployment_female; ?>'>
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="unemployment_maleu" placeholder="පුරුෂ" value='<?php echo $unemployment_male; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year2u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update2">Update</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රැකියා වර්ගීකරණය හා රැකියා විරහිත ප්‍රමාණය</h4>
                    <form action="" name="2" method="post" class="signin-form" enctype="multipart/form-data"> 

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මුලු සේවා </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services_total_female" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="services_total_male" placeholder="පුරුෂ">
                        </div>

                      </div> 


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රාජ්‍ය අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="government_female" placeholder="ස්ත්‍රී"> 
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="government_male" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_government_female" placeholder="ස්ත්‍රී">
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_government_male" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_female" placeholder="ස්ත්‍රී">
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_male" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්වයං රැකියා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self_employment_female" placeholder="ස්ත්‍රී">
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self_employment_male" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවා වියුක්ති සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="unemployment_female" placeholder="ස්ත්‍රී">
                        </div>
                       

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="unemployment_male" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year2' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-primary me-2" name="submit2">Submit</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='3'){

  $q3 =$conn->query("SELECT * from unskilled_abroad_emp WHERE userid='$uid' AND year='$year_update'");
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
  }
?>  

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත රැකියා වල නියුතු නුපුහුණු ශ්‍රමිකයින්</h4>
                    <form action="" name="3" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">මැද පෙර දිග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_me_ntu" value='<?php echo $female_me_nt; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_me_ntu" value='<?php echo $male_me_nt; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කොරියාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_korea_ntu" value='<?php echo $female_korea_nt; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_korea_ntu" value='<?php echo $male_korea_nt; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">යුරෝපය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_europe_ntu" value='<?php echo $female_europe_nt; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_europe_ntu" value='<?php echo $male_europe_nt; ?>'>
                        </div>

                      </div>

                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other_country_ntu" value='<?php echo $female_other_country_nt; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other_country_ntu" value='<?php echo $male_other_country_nt; ?>'>
                        </div>
                           
                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year3u' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-info me-2" name="update3">Update</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත රැකියා වල නියුතු නුපුහුණු ශ්‍රමිකයින්</h4>
                    <form action="" name="3" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">මැද පෙර දිග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_me_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_me_nt" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කොරියාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_korea_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_korea_nt" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">යුරෝපය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_europe_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_europe_nt" placeholder="පුරුෂ">
                        </div>

                      </div>

                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other_country_nt" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other_country_nt" placeholder="පුරුෂ">
                        </div>
                           
                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year3' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit3">Submit</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>




<!-- ============================================================= -->
<?php 
if($type=='4'){

  $q3 =$conn->query("SELECT * from skilled_abroad_emp WHERE userid='$uid' AND year='$year_update'");
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
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත රැකියා වල නියුතු පුහුණු ශ්‍රමිකයින්</h4>
                    <form action="" name="4" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">මැද පෙර දිග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_me_skilledu" value='<?php echo $female_me_skilled; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_me_skilledu" value='<?php echo $male_me_skilled; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කොරියාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_korea_skilledu" value='<?php echo $female_korea_skilled; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_korea_skilledu" value='<?php echo $male_korea_skilled; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">යුරෝපය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_europe_skilledu" value='<?php echo $female_europe_skilled; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_europe_skilledu" value='<?php echo $male_europe_skilled; ?>'>
                        </div>

                      </div>                   


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other_country_skilledu" value='<?php echo $female_other_country_skilled; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other_country_skilledu" value='<?php echo $male_other_country_skilled; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year4u' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-info me-2" name="update4">Update</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } else { ?>

  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත රැකියා වල නියුතු පුහුණු ශ්‍රමිකයින්</h4>
                    <form action="" name="4" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">මැද පෙර දිග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_me_skilled" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_me_skilled" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">කොරියාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_korea_skilled" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_korea_skilled" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">යුරෝපය  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_europe_skilled" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_europe_skilled" placeholder="පුරුෂ">
                        </div>

                      </div>                   


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other_country_skilled" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other_country_skilled" placeholder="පුරුෂ">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year4' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit4">Submit</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>




<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='5'){

  $q3 =$conn->query("SELECT * from unemployment WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
  

    $female_eighteen_twentyfive=$row['female_eighteen_twentyfive'];
    $male_eighteen_twentyfive=$row['male_eighteen_twentyfive'];
    $female_twentysix_forty=$row['female_twentysix_forty'];
    $male_twentysix_forty=$row['male_twentysix_forty'];
    $female_fortyone_sixty=$row['female_fortyone_sixty'];
    $male_fortyone_sixty=$row['male_fortyone_sixty'];
  }
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සේවා වියුක්තිය </h4>
                    <form action="" name="5" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 18-25</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_eighteen_twentyfiveu" value='<?php echo $female_eighteen_twentyfive; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_eighteen_twentyfiveu" value='<?php echo $male_eighteen_twentyfive; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 26-40</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_twentysix_fortyu" value='<?php echo $female_twentysix_forty; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_twentysix_fortyu" value='<?php echo $male_twentysix_forty; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 41-60</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_fortyone_sixtyu" value='<?php echo $female_fortyone_sixty; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_fortyone_sixtyu" value='<?php echo $male_fortyone_sixty; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5u' value='$year'>"; ?>
                      <center> <button type="submit" class="btn btn-gradient-info me-2" name="update5">Update</button></center>
                      
                    </form>
                  </div>
                </div>
              </div>

              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සේවා වියුක්තිය </h4>
                    <form action="" name="5" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 18-25</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_eighteen_twentyfive" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_eighteen_twentyfive" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 26-40</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_twentysix_forty" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_twentysix_forty" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවුරුදු 41-60</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_fortyone_sixty" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_fortyone_sixty" placeholder="පුරුෂ">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5' value='$year'>"; ?>
                      <center><button type="submit" class="btn btn-gradient-primary me-2" name="submit5">Submit</button></center>
                      
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