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

//religious_centers
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $buddhist_temples = $_POST['buddhist_temples'][$key];
    $hindu_temples = $_POST['hindu_temples'][$key];
    $catholic_churches = $_POST['catholic_churches'][$key];
    $mosques = $_POST['mosques'][$key];
    $other = $_POST['other'][$key];
   
    $sql="INSERT into religious_centers (ds,userid,`year`,gnd,buddhist_temples,hindu_temples,catholic_churches,mosques,other) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$buddhist_temples."','".$hindu_temples."','".$catholic_churches."','".$mosques."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=1&&year=$year1';</script>";
    }
}


//buddhist_temples
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $dhamma_school = $_POST['dhamma_school'][$key];
    $no_students = $_POST['no_students'][$key];
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into buddhist_temples (ds,userid,`year`,gnd,`name`,addres,contact,dhamma_school,no_students,no_teachers) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$name."','".$addres."','".$contact."','".$dhamma_school."','".$no_students."','".$no_teachers."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=2&&year=$year2';</script>";
    }
}


//hindu_religious_shrines
if(isset($_POST['submit3']))
{ 
  foreach($_POST['year3'] as $key => $year3){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $dhamma_school = $_POST['dhamma_school'][$key];
    $no_students = $_POST['no_students'][$key];
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into hindu_religious_shrines (ds,userid,`year`,gnd,`name`,addres,contact,dhamma_school,no_students,no_teachers) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$name."','".$addres."','".$contact."','".$dhamma_school."','".$no_students."','".$no_teachers."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=3&&year=$year3';</script>";
    }
}


//catholic_churches
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $dhamma_school = $_POST['dhamma_school'][$key];
    $no_students = $_POST['no_students'][$key];
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into catholic_churches (ds,userid,`year`,gnd,`name`,addres,contact,dhamma_school,no_students,no_teachers) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$name."','".$addres."','".$contact."','".$dhamma_school."','".$no_students."','".$no_teachers."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=4&&year=$year4';</script>";
    }
}


//islamic_religious_centers
if(isset($_POST['submit5']))
{ 
  foreach($_POST['year5'] as $key => $year5){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $dhamma_school = $_POST['dhamma_school'][$key];
    $no_students = $_POST['no_students'][$key];
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into islamic_religious_centers (ds,userid,`year`,gnd,`name`,addres,contact,dhamma_school,no_students,no_teachers) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$gnd."','".$name."','".$addres."','".$contact."','".$dhamma_school."','".$no_students."','".$no_teachers."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=5&&year=$year5';</script>";
    }
}


//religious_places_renovated
if(isset($_POST['submit6']))
{ 
  foreach($_POST['year6'] as $key => $year6){
    $name = $_POST['name'][$key];
    $reason = $_POST['reason'][$key];

    $sql="INSERT into religious_places_renovated (ds,userid,`year`,gnd,`name`,reason) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$gnd."','".$name."','".$reason."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=6&&year=$year6';</script>";
    }
}


//cultural_arts_institute
if(isset($_POST['submit7']))
{ 
  foreach($_POST['year7'] as $key => $year7){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $caurses = $_POST['caurses'][$key];

    $sql="INSERT into cultural_arts_institute (ds,userid,`year`,gnd,`name`,addres,contact,caurses) 
    VALUES ('".$ds."','".$uid."','".$year7."','".$gnd."','".$name."','".$addres."','".$contact."','".$caurses."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=7&&year=$year7';</script>";
    }
}


//specific_artists
if(isset($_POST['submit8']))
{ 
  foreach($_POST['year8'] as $key => $year8){
    $name = $_POST['name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $division = $_POST['division'][$key];

    $sql="INSERT into specific_artists (ds,userid,`year`,gnd,`name`,addres,contact,division) 
    VALUES ('".$ds."','".$uid."','".$year8."','".$gnd."','".$name."','".$addres."','".$contact."','".$division."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=8&&year=$year8';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================

//religious_centers
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $buddhist_templesu = $_POST['buddhist_templesu'][$key];
    $hindu_templesu = $_POST['hindu_templesu'][$key];
    $catholic_churchesu = $_POST['catholic_churchesu'][$key];
    $mosquesu = $_POST['mosquesu'][$key];
    $otheru = $_POST['otheru'][$key];
    $id1 = $_POST['id1'][$key];
   
    $sql = "update religious_centers set buddhist_temples='$buddhist_templesu',hindu_temples='$hindu_templesu',catholic_churches='$catholic_churchesu',mosques='$mosquesu',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=1&&year=$year1';</script>";
    }
}


//buddhist_temples
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $dhamma_schoolu = $_POST['dhamma_schoolu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];
    $no_teachersu = $_POST['no_teachersu'][$key];
    $id2 = $_POST['id2'][$key];

    $sql = "update buddhist_temples set name='$nameu',addres='$addresu',contact='$contactu',dhamma_school='$dhamma_school',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=2&&year=$year2';</script>";
    }
}


//hindu_religious_shrines
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $dhamma_schoolu = $_POST['dhamma_schoolu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];
    $no_teachersu = $_POST['no_teachersu'][$key];
    $id3 = $_POST['id3'][$key];

    $sql = "update hindu_religious_shrines set name='$nameu',addres='$addresu',contact='$contactu',dhamma_school='$dhamma_school',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=3&&year=$year3';</script>";
    }
}


//catholic_churches
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $dhamma_schoolu = $_POST['dhamma_schoolu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];
    $no_teachersu = $_POST['no_teachersu'][$key];
    $id4 = $_POST['id4'][$key];

    $sql = "update catholic_churches set name='$nameu',addres='$addresu',contact='$contactu',dhamma_school='$dhamma_school',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=4&&year=$year4';</script>";
    }
}


//islamic_religious_centers
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id = $_POST['id5'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $dhamma_schoolu = $_POST['dhamma_schoolu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];
    $no_teachersu = $_POST['no_teachersu'][$key];
    $id5 = $_POST['id5'][$key];

    $sql = "update islamic_religious_centers set name='$nameu',addres='$addresu',contact='$contactu',dhamma_school='$dhamma_school',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=5&&year=$year5';</script>";
    }
}


//religious_places_renovated
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id = $_POST['id6'][$key];
    $nameu = $_POST['nameu'][$key];
    $reasonu = $_POST['reasonu'][$key];
    $id6 = $_POST['id6'][$key];

    $sql = "update religious_places_renovated set name='$nameu',reason='$reasonu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=6&&year=$year6';</script>";
    }
}


//cultural_arts_institute
if(isset($_POST['update7']))
{ 
  foreach($_POST['year7u'] as $key => $year7u){
    $id = $_POST['id7'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $caursesu = $_POST['caursesu'][$key];
    $id7 = $_POST['id7'][$key];

    $sql = "update cultural_arts_institute set name='$nameu',addres='$addresu',contact='$contactu',caurses='$caursesu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=7&&year=$year7';</script>";
    }
}


//specific_artists
if(isset($_POST['update8']))
{ 
  foreach($_POST['year8u'] as $key => $year8u){
    $id = $_POST['id8'][$key];
    $nameu = $_POST['nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $divisionu = $_POST['divisionu'][$key];
    $id8 = $_POST['id8'][$key];

    $sql = "update specific_artists set name='$nameu',addres='$addresu',contact='$contactu',division='$divisionu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='religious.php?type=8&&year=$year8';</script>";
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
                  <i class="mdi mdi-brightness-5"></i>
                </span> ආගමික

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
                            <center><a class="dropdown-item" href="religious.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="religious.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="religious.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="religious.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="religious.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="religious.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="religious.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="religious.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="religious.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="religious.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="religious.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="religious.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='religious.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස තුල ආගමික මධ්‍යස්ථාන වල ව්‍යාප්තිය</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>බෞද්ධ විහාරස්ථාන පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>හින්දු ආගමික සිද්ධස්ථාන</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කතෝලික දේවස්ථාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'> ඉස්ලාම් ආගමික මධ්‍යස්ථාන </a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'> ප්‍රතිසංස්කරණය කල යුතු ආගමික ස්ථාන </a>"; ?> 

                  
                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'> ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටි සංස්කෘතික කලායතන තොරතුරු </a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='religious.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාසය තුල සිටින විශේෂිත කලාකරුවන් පිළිබද තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        </form>
            


<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස තුල ආගමික මධ්‍යස්ථාන වල ව්‍යාප්තිය================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස තුල ආගමික මධ්‍යස්ථාන වල ව්‍යාප්තිය</h4>

<?php
  $q3 =$conn->query("SELECT * from religious_centers WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id1=$row['id'];
    $buddhist_temples=$row['buddhist_temples'];
    $hindu_temples=$row['hindu_temples'];
    $catholic_churches=$row['catholic_churches'];
    $mosques=$row['mosques'];
    $other=$row['other'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බෞද්ධ විහාරස්ථාන සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="buddhist_templesu[]" value='<?php echo $buddhist_temples; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෝවිල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hindu_templesu[]" value='<?php echo $hindu_temples; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දේවස්ථාන සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="catholic_churchesu[]" value='<?php echo $catholic_churches; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මුස්ලිම් පල්ලි සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mosquesu[]" value='<?php echo $mosques; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස තුල ආගමික මධ්‍යස්ථාන වල ව්‍යාප්තිය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බෞද්ධ විහාරස්ථාන සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="buddhist_temples[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෝවිල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hindu_temples[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දේවස්ථාන සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="catholic_churches[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මුස්ලිම් පල්ලි සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mosques[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
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

              
<!-- ===========================බෞද්ධ විහාරස්තාන පිළිබද තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">බෞද්ධ විහාරස්ථාන පිළිබද තොරතුරු</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from buddhist_temples WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id2=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        $dhamma_school=$row['dhamma_school'];
                        $no_students=$row['no_students'];
                        $no_teachers=$row['no_teachers'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_schoolu[]" value='<?php echo $dhamma_school; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>'>
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
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">බෞද්ධ විහාරස්ථාන පිළිබද තොරතුරු</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_school[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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



<!-- ===========================හින්දු ආගමික සිද්ධස්ථාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>


<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">හින්දු ආගමික සිද්ධස්ථාන</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from hindu_religious_shrines WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id3=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        $dhamma_school=$row['dhamma_school'];
                        $no_students=$row['no_students'];
                        $no_teachers=$row['no_teachers'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_schoolu[]" value='<?php echo $dhamma_school; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>'>
                        </div>
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year3u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id3[]' value='$id'>"; ?>
                   
                    </div>

                    <?php }?>

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
                    <h4 class="card-title">හින්දු ආගමික සිද්ධස්ථාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_school[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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



<!-- ===========================කතෝලික දේවස්ථාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>


<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">කතෝලික දේවස්ථාන</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from catholic_churches WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id4=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        $dhamma_school=$row['dhamma_school'];
                        $no_students=$row['no_students'];
                        $no_teachers=$row['no_teachers'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_schoolu[]" value='<?php echo $dhamma_school; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>'>
                        </div>
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year4u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id4[]' value='$id'>"; ?>
                   
                    </div>

                    <?php }?>

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
                    <h4 class="card-title">කතෝලික දේවස්ථාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_school[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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



<!-- ===========================ඉස්ලාම් ආගමික මධ්‍යස්ථාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> ඉස්ලාම් ආගමික මධ්‍යස්ථාන</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from islamic_religious_centers WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id5=$row['id'];
                        $name=$row['name'];
                        $addres=$row['addres'];
                        $contact=$row['contact'];
                        $dhamma_school=$row['dhamma_school'];
                        $no_students=$row['no_students'];
                        $no_teachers=$row['no_teachers'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_schoolu[]" value='<?php echo $dhamma_school; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>'>
                        </div>
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year5u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id5[]' value='$id'>"; ?>
                   
                    </div>

                    <?php }?>

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
                    <h4 class="card-title">ඉස්ලාම් ආගමික මධ්‍යස්ථාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දහම්පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dhamma_school[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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



<!-- ===========================ප්‍රතිසංස්කරණය කල යුතු ආගමික ස්ථාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රතිසංස්කරණය කල යුතු ආගමික ස්ථාන</h4>

  <?php
    $q3 =$conn->query("SELECT * from religious_places_renovated WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id6=$row['id'];
      $name=$row['name'];
      $reason=$row['reason'];
  ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nameu[]" value='<?php echo $name; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ප්‍රතිසංස්කරණ අවශ්‍යතාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="reasonu[]" value='<?php echo $reason; ?>'>
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
                    <h4 class="card-title">ප්‍රතිසංස්කරණය කල යුතු ආගමික ස්ථාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආගමික ස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ප්‍රතිසංස්කරණ අවශ්‍යතාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="reason[]" >
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



<!-- ===========================ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටි සංස්කෘතික කලායතන තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='7'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටි සංස්කෘතික කලායතන තොරතුරු</h4>

                    <?php
    $q3 =$conn->query("SELECT * from cultural_arts_institute WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $name=$row['name'];
      $addres=$row['addres'];
      $contact=$row['contact'];
      $caurses=$row['caurses'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සංස්කෘතික මධ්‍යස්ථානයේ නම</label>

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
                          <input type="text" class="form-control" name="contact[]" value='<?php echo $contact; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පැවැත්වෙන පාඨමාලාවන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="caursesu[]" value='<?php echo $caurses; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year7u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id7[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update7" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

<?php } else { ?>

              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> ප්‍රා.ලේ.කොට්ඨාසය තුල පිහිටි සංස්කෘතික කලායතන තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සංස්කෘතික මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="name[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පැවැත්වෙන පාඨමාලාවන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="caurses[]" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year7[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit7" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } }?>




<!-- ===========================ප්‍රා.ලේ.කොට්ඨාසය තුල සිටින විශේෂිත කලාකරුවන් පිළිබද================================== -->
<?php 
$type=$_GET['type'];
if($type=='8'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාසය තුල සිටින විශේෂිත කලාකරුවන් පිළිබද</h4>

  <?php
    $q3 =$conn->query("SELECT * from specific_artists WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $name=$row['name'];
      $addres=$row['addres'];
      $contact=$row['contact'];
      $division=$row['division'];
  ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කලාකරුවගේ නම</label>

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

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="divisionu[]" value='<?php echo $division; ?>' >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year8u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id8[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update8" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාසය තුල සිටින විශේෂිත කලාකරුවන් පිළිබද තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කලාකරුවගේ නම</label>

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

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="division[]" >
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year8[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit8" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } }?>

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