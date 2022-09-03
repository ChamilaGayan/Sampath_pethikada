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

//area_jurisdiction
if(isset($_POST['submit1']))
{
  foreach($_POST['year1'] as $key => $year1){
    $local_authorities = $_POST['local_authorities'][$key];
    $electorates = $_POST['electorates'][$key];
    $birth_certificates = $_POST['birth_certificates'][$key];
    $police_div = $_POST['police_div'][$key];
    $agraian_services = $_POST['agraian_services'][$key];
    
    $sql="INSERT into area_jurisdiction (ds,userid,`year`,gnda,local_authorities,electorates,birth_certificates,police_div,agraian_services) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$local_authorities."','".$electorates."','".$birth_certificates."','".$police_div."','".$agraian_services."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=1&&year=$year1';</script>";
    }
}


//community_source
if(isset($_POST['submit2']))
{
  foreach($_POST['year2'] as $key => $year2){
    $community_source = $_POST['community_source'][$key];
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $registration = $_POST['registration'][$key];
    $registration_no = $_POST['registration_no'][$key];
    $registration_year = $_POST['registration_year'][$key];
   
    $sql="INSERT into community_source (ds,userid,`year`,gnda,community_source,`name`,addres,registration,registration_no,registration_year) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$community_source."','".$name."','".$addres."','".$registration."','".$registration_no."','".$registration_year."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=2&&year=$year2';</script>";
    }
}


//government
if(isset($_POST['submit3']))
{
  foreach($_POST['year3'] as $key => $year3){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
   
    $sql="INSERT into government (ds,userid,`year`,gnda,`name`,addres,contact) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$name."','".$addres."','".$contact."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=3&&year=$year3';</script>";
    }
}


//bank
if(isset($_POST['submit4']))
{
  foreach($_POST['year4'] as $key => $year4){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
   
    $sql="INSERT into bank (ds,userid,`year`,gnda,`name`,addres,contact) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$name."','".$addres."','".$contact."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=4&&year=$year4';</script>";
    }
}


//crime
if(isset($_POST['submit5']))
{
  foreach($_POST['year5'] as $key => $year5){
    $child_abuse = $_POST['child_abuse'][$key];
    $drugs = $_POST['drugs'][$key];
    $domestic_violence = $_POST['domestic_violence'][$key];
    $murder = $_POST['murder'][$key];
    $other = $_POST['other'][$key];
   
    $sql="INSERT into crime (ds,userid,`year`,gnda,child_abuse,drugs,domestic_violence,murder,other) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$gnd."','".$child_abuse."','".$drugs."','".$domestic_violence."','".$murder."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=5&&year=$year5';</script>";
    }
}


//road_accident
if(isset($_POST['submit6']))
{
  foreach($_POST['year6'] as $key => $year6){
    $deadly_accident = $_POST['deadly_accident'][$key];
    $serious_accident = $_POST['serious_accident'][$key];
    $minor_injuries = $_POST['minor_injuries'][$key];
    $damage = $_POST['damage'][$key];
   
    $sql="INSERT into road_accident (ds,userid,`year`,gnda,deadly_accident,serious_accident,minor_injuries,damage) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$gnd."','".$deadly_accident."','".$serious_accident."','".$minor_injuries."','".$damage."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=6&&year=$year6';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================

//area_jurisdiction
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $local_authoritiesu = $_POST['local_authoritiesu'][$key];
    $electoratesu = $_POST['electoratesu'][$key];
    $birth_certificatesu = $_POST['birth_certificatesu'][$key];
    $police_divu = $_POST['police_divu'][$key];
    $agraian_servicesu = $_POST['agraian_servicesu'][$key];
   
    $sql = "update area_jurisdiction set local_authorities='$local_authoritiesu',electorates='$electoratesu',birth_certificates='$birth_certificatesu',police_div='$police_divu',agraian_services='$agraian_servicesu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=1&&year=$year1u';</script>";
    }
}


//community_source
if(isset($_POST['update2']))
{
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $community_sourceu = $_POST['community_sourceu'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $registrationu = $_POST['registrationu'][$key];
    $registration_nou = $_POST['registration_nou'][$key];
    $registration_yearu = $_POST['registration_yearu'][$key];
    
    $sql = "update community_source set community_source='$community_sourceu',name='$nameu',addres='$addresu',registration='$registrationu',registration_no='$registration_nou',registration_year='$registration_yearu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=2&&year=$year2u';</script>";
    }
}

//government
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
   
    $sql = "update government set name='$nameu',addres='$addresu',contact='$contactu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=3&&year=$year3u';</script>";
    }
}


//bank
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    
    $sql = "update bank set name='$nameu',addres='$addresu',contact='$contactu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=4&&year=$year4u';</script>";
    }
}


//crime
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id = $_POST['id5'][$key];
    $child_abuseu = $_POST['child_abuseu'][$key];
    $drugsu = $_POST['drugsu'][$key];
    $domestic_violenceu = $_POST['domestic_violenceu'][$key];
    $murderu = $_POST['murderu'][$key];
    $otheru = $_POST['otheru'][$key];

    $sql = "update crime set child_abuse='$child_abuseu',drugs='$drugsu',domestic_violence='$domestic_violenceu',murder='$murderu',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=5&&year=$year5u';</script>";
    }
}


//road_accident
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id = $_POST['id6'][$key];
    $deadly_accidentu = $_POST['deadly_accidentu'][$key];
    $serious_accidentu = $_POST['serious_accidentu'][$key];
    $minor_injuriesu = $_POST['minor_injuriesu'][$key];
    $damageu = $_POST['damageu'][$key];
   
    $sql = "update road_accident set deadly_accident='$deadly_accidentu',serious_accident='$serious_accidentu',minor_injuries='$minor_injuriesu',damage='$damageu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='other.php?type=6&&year=$year6u';</script>";
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
                  <i class="mdi mdi-receipt"></i>
                </span> විවිධ තොරතුරු
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
                            <center><a class="dropdown-item" href="other.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="other.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="other.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="other.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="other.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="other.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="other.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="other.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="other.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="other.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="other.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="other.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='other.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විවිධ බල ප්‍රදේශ</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි සමිති/ප්‍රජාමූල සංවිධාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>රාජ්‍ය ආයතන</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>බැංකු හා මූල්‍ය ආයතන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>අනාවරණය වූ අපරාධ සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='other.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>මාර්ග අනතුරු පිළිබද තොරතුරු</a>"; ?> 

                </div>
            </div> 

        </div>

        </form>
            

<!-- ===========================විවිධ බල ප්‍රදේශ ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විවිධ බල ප්‍රදේශ </h4>

<?php 

  $q3 =$conn->query("SELECT * from area_jurisdiction WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $local_authorities=$row['local_authorities'];
    $electorates=$row['electorates'];
    $birth_certificates=$row['birth_certificates'];
    $police_div=$row['police_div']; 
    $agraian_services=$row['agraian_services'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පළාත් පාලන ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="local_authoritiesu[]" value='<?php echo $local_authorities; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මැතිවරණ කොට්ඨාස</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electoratesu[]" value='<?php echo $electorates; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උප්පැන්න මරණ විවාහ ලියාපදිංචි කොට්ඨාස</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="birth_certificatesu[]" value='<?php echo $birth_certificates; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පොළිස් බල ප්‍රදේශ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="police_divu[]" value='<?php echo $police_div; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගොවිජන සේවා මධ්‍යස්ථාන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agraian_servicesu[]" value='<?php echo $agraian_services; ?>'>
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
                    <h4 class="card-title">විවිධ බල ප්‍රදේශ</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පළාත් පාලන ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="local_authorities[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මැතිවරණ කොට්ඨාසය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electorates[]" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උප්පැන්න මරණ විවාහ ලියාපදිංචි කොට්ඨසය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="birth_certificates[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පොළිස් බල ප්‍රදේශ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="police_div[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගොවිජන සේවා මධ්‍යස්‍ථාන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agraian_services[]" >
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


<!-- ===========================ලියාපදිංචි සමිති/ප්‍රජා මූල සංවිධාන පිළිබද තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ලියාපදිංචි සමිති/ප්‍රජා මූල සංවිධාන පිළිබද තොරතුරු</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from community_source WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $community_source=$row['community_source'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $registration=$row['registration'];
                        $registration_no=$row['registration_no'];
                        $registration_year=$row['registration_year'];
                        ?>
                        
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රජාමූල සංවිධාන වර්ගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="community_sourceu[]" value='<?php echo $community_source; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සංවිධානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලියාපදිංචිය(ඇත,නැත)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="registrationu[]" value='<?php echo $registration; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලියාපදිංචි අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="registration_nou[]" value='<?php echo $registration_no; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලියාපදිංචි වර්ෂය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="registration_yearu[]" value='<?php echo $registration_year; ?>'>
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
                    <h4 class="card-title">ලියාපදිංචි සමිති/ප්‍රජා මූල සංවිධාන පිළිබද තොරතුරු</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රජාමූල සංවිධාන වර්ගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="community_source[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සංවිධානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                      </div>
                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලියාපදිංචිය(ඇත,නැත)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="registration[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලියාපදිංචි අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="registration_no[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලියාපදිංචි වර්ෂය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="registration_year[]" >
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



<!-- ===========================රාජ්‍ය ආයතන ================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රාජ්‍ය ආයතන </h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from government WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයතනයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
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
                    <h4 class="card-title">රාජ්‍ය ආයතන </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයතනයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
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



<!-- ===========================බැංකු හා මූල්‍ය ආයතන================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">බැංකු හා මූල්‍ය ආයතන</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from bank WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $name=$row['name'];
                          $addres=$row['addres'];
                          $contact=$row['contact'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයතනයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
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
                    <h4 class="card-title">බැංකු හා මූල්‍ය ආයතන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයතනයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
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



<!-- ===========================අනාවරනය වූ අපරාධ සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අනාවරනය වූ අපරාධ සංඛ්‍යාව</h4>

                    <?php
    $q3 =$conn->query("SELECT * from crime WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $child_abuse=$row['child_abuse'];
      $drugs=$row['drugs'];
      $domestic_violence=$row['domestic_violence'];
      $murder=$row['murder'];
      $other=$row['other'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළමා අපචාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="child_abuseu[]" value='<?php echo $child_abuse; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මත්ද්‍රව්‍ය භාවිතය</label>

                          <div class="col-sm-4">
                          <input type="text" class="form-control" name="drugsu[]" value='<?php echo $drugs; ?>'>
                          </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගෘහස්ත හිංසනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="domestic_violenceu[]" value='<?php echo $domestic_violence; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මිනීමැරුම්</label>

                          <div class="col-sm-4">
                          <input type="text" class="form-control" name="murderu[]" value='<?php echo $murder; ?>'>
                          </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year5u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id5[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update5" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අනාවරනය වූ අපරාධ සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළමා අපචාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="child_abuse[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මත්ද්‍රව්‍ය භාවිතය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="drugs[]" >
                        </div>

                      </div>
                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගෘහස්ත හිංසනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="domestic_violence[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මිනීමැරුම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="murder[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5[]' value='$year'>"; ?>
                   
                    </div>
 
                </div>
              </div>
              </div>
              
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit5" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } }?>



<!-- ===========================මාර්ග අනතුරු පිළිබද තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මාර්ග අනතුරු පිළිබද තොරතුරු</h4>

                    <?php
    $q3 =$conn->query("SELECT * from road_accident WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $deadly_accident=$row['deadly_accident'];
      $serious_accident=$row['serious_accident'];
      $minor_injuries=$row['minor_injuries'];
      $damage=$row['damage'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මාරක රිය අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="deadly_accidentu[]" value='<?php echo $deadly_accident; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බරපතල රිය අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="serious_accidentu[]" value='<?php echo $serious_accident; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සුළු තුවාල අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="minor_injuriesu[]" value='<?php echo $minor_injuries; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අලාභහානි අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="damageu[]" value='<?php echo $damage; ?>'>
                        </div>

                      </div>
  
                      <?php echo "<input type='hidden' id='custId' name='year6u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id6[]' value='$id'>"; ?>
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update6" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>
<?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මාර්ග අනතුරු පිළිබද තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මාරක රිය අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="deadly_accident[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බරපතල රිය අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="serious_accident[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සුළු තුවාල අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="minor_injuries[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අලාභහානි අනතුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="damage[]" >
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year6[]' value='$year'>"; ?>
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit6" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
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