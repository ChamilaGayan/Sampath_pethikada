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

//government_aid_recipients
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $tuberculosis = $_POST['tuberculosis'][$key];
    $cancer = $_POST['cancer'][$key];
    $thalassemia = $_POST['thalassemia'][$key];
    $leprosy = $_POST['leprosy'][$key];
    $kidney = $_POST['kidney'][$key];
    $public_assistance = $_POST['public_assistance'][$key];
    $adult_beneficiary = $_POST['adult_beneficiary'][$key];
    $disabilities_people = $_POST['disabilities_people'][$key];
    $female_basic = $_POST['female_basic'][$key];
   
    $sql="INSERT into government_aid_recipients (ds,userid,`year`,gnda,tuberculosis,cancer,thalassemia,leprosy,kidney,public_assistance,adult_beneficiary,disabilities_people,female_basic) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$tuberculosis."','".$cancer."','".$thalassemia."','".$leprosy."','".$kidney."','".$public_assistance."','".$adult_beneficiary."','".$disabilities_people."','".$female_basic."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=1&&year=$year1';</script>";
    }
}


//disabilities_people
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $visually_impaired = $_POST['visually_impaired'][$key];
    $hearing_impaired = $_POST['hearing_impaired'][$key];
    $speech_impaired = $_POST['speech_impaired'][$key];
    $because_mental = $_POST['because_mental'][$key];
    $movement_disorders = $_POST['movement_disorders'][$key];
    $other = $_POST['other'][$key];
    
    $sql="INSERT into disabilities_people (ds,userid,`year`,gnda,visually_impaired,hearing_impaired,speech_impaired,because_mental,movement_disorders,other) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$visually_impaired."','".$hearing_impaired."','".$speech_impaired."','".$because_mental."','".$movement_disorders."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=2&&year=$year2';</script>";
    }
}


//physical_mental_discomfort
if(isset($_POST['submit3']))
{ 
  foreach($_POST['year3'] as $key => $year3){
    $preschool = $_POST['preschool'][$key];
    $schools = $_POST['schools'][$key];
    $degree = $_POST['degree'][$key];
    $professional = $_POST['professional'][$key];  
    $other = $_POST['other'][$key];
    $not_involved_education = $_POST['not_involved_education'][$key];
  
    $sql="INSERT into physical_mental_discomfort (ds,userid,`year`,gnda,preschool,schools,degree,professional,other,not_involved_education) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$preschool."','".$schools."','".$degree."','".$professional."','".$other."','".$not_involved_education."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=3&&year=$year3';</script>";
    }
}


//physical_mental_discomfort_b
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    $public_sector = $_POST['public_sector'][$key];
    $semi_state = $_POST['semi_state'][$key];
    $private = $_POST['private'][$key];
    $self_employment = $_POST['self_employment'][$key];
    $agriculture = $_POST['agriculture'][$key];
    $abroad = $_POST['abroad'][$key];
    $no_work = $_POST['no_work'][$key];
   
    $sql="INSERT into physical_mental_discomfort_b (ds,userid,`year`,gnda,public_sector,semi_state,`private`,self_employment,agriculture,abroad,no_work) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$public_sector."','".$semi_state."','".$private."','".$self_employment."','".$agriculture."','".$abroad."','".$no_work."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=4&&year=$year4';</script>";
    }
}


//orphanages
if(isset($_POST['submit5']))
{ 
  foreach($_POST['year5'] as $key => $year5){
    $orphanages = $_POST['orphanages'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $client = $_POST['client'][$key];
    $requirements = $_POST['requirements'][$key];
    
    $sql="INSERT into orphanages (ds,userid,`year`,gnda,orphanages,addres,contact,client,requirements) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$gnd."','".$orphanages."','".$addres."','".$contact."','".$client."','".$requirements."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=5&&year=$year5';</script>";
    }
}


//samurdhi_assistance
if(isset($_POST['submit6']))
{
  foreach($_POST['year6'] as $key => $year6){
    $families = $_POST['families'][$key];
    $supported_families = $_POST['supported_families'][$key];
    $four_hundred_twenty = $_POST['four_hundred_twenty'][$key];
    $one_thousand_five_hundred = $_POST['one_thousand_five_hundred'][$key];
    $two_thousand_five_hundred = $_POST['two_thousand_five_hundred'][$key];
    $three_thousand_five_hundred = $_POST['three_thousand_five_hundred'][$key];
   
    $sql="INSERT into samurdhi_assistance (ds,userid,`year`,gnda,families,supported_families,four_hundred_twenty,one_thousand_five_hundred,two_thousand_five_hundred,three_thousand_five_hundred) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$gnd."','".$families."','".$supported_families."','".$four_hundred_twenty."','".$one_thousand_five_hundred."','".$two_thousand_five_hundred."','".$three_thousand_five_hundred."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=6&&year=$year6';</script>";
    }
}


// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================

//government_aid_recipients
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $tuberculosisu = $_POST['tuberculosisu'][$key];
    $canceru = $_POST['canceru'][$key];
    $thalassemiau = $_POST['thalassemiau'][$key];
    $leprosyu = $_POST['leprosyu'][$key];
    $kidneyu = $_POST['kidneyu'][$key];
    $public_assistanceu = $_POST['public_assistanceu'][$key];
    $adult_beneficiaryu = $_POST['adult_beneficiaryu'][$key];
    $disabilities_peopleu = $_POST['disabilities_peopleu'][$key];
    $female_basicu = $_POST['female_basicu'][$key];
   
    $sql = "update government_aid_recipients set tuberculosis='$tuberculosisu',cancer='$canceru',thalassemia='$thalassemiau',leprosy='$leprosyu',kidney='$kidneyu',public_assistance='$public_assistanceu',adult_beneficiary='$adult_beneficiaryu',disabilities_people='$disabilities_peopleu',female_basic='$female_basicu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=1&&year=$year1u';</script>";
    }
}


//disabilities_people
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $visually_impairedu = $_POST['visually_impairedu'][$key];
    $hearing_impairedu = $_POST['hearing_impairedu'][$key];
    $speech_impairedu = $_POST['speech_impairedu'][$key];
    $because_mentalu = $_POST['because_mentalu'][$key];
    $movement_disordersu = $_POST['movement_disordersu'][$key];
    $otheru = $_POST['otheru'][$key];
   
    $sql = "update disabilities_people set visually_impaired='$visually_impairedu',hearing_impaired='$hearing_impairedu',speech_impaired='$speech_impairedu',because_mental='$because_mentalu',movement_disorders='$movement_disordersu',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=2&&year=$year2u';</script>";
    }
}


//physical_mental_discomfort
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $preschoolu = $_POST['preschoolu'][$key];
    $schoolsu = $_POST['schoolsu'][$key];
    $degreeu = $_POST['degreeu'][$key];
    $professionalu = $_POST['professionalu'][$key];  
    $otheru = $_POST['otheru'][$key];
    $not_involved_educationu = $_POST['not_involved_educationu'][$key];
   
    $sql = "update physical_mental_discomfort set preschool='$preschoolu',schools='$schoolsu',degree='$degreeu',professional='$professionalu',other='$otheru',not_involved_education='$not_involved_educationu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=3&&year=$year3u';</script>";
    }
}


//physical_mental_discomfort_b
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $public_sectoru = $_POST['public_sectoru'][$key];
    $semi_stateu = $_POST['semi_stateu'][$key];
    $privateu = $_POST['privateu'][$key];
    $self_employmentu = $_POST['self_employmentu'][$key];
    $agricultureu = $_POST['agricultureu'][$key];
    $abroadu = $_POST['abroadu'][$key];
    $no_worku = $_POST['no_worku'][$key];
   
    $sql = "update physical_mental_discomfort_b set public_sector='$public_sectoru',semi_state='$semi_stateu',private='$privateu',self_employment='$self_employmentu',agriculture='$agricultureu',abroad='$abroadu',no_work='$no_worku' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=4&&year=$year4u';</script>";
    }
}


//orphanages
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id = $_POST['id5'][$key];
    $orphanagesu = $_POST['orphanagesu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $clientu = $_POST['clientu'][$key];
    $requirementsu = $_POST['requirementsu'][$key];
   
    $sql = "update orphanages set orphanages='$orphanagesu',addres='$addresu',contact='$contactu',client='$clientu',requirements='$requirementsu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=5&&year=$year5u';</script>";
    }
}


//samurdhi_assistance
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id = $_POST['id6'][$key];
    $familiesu = $_POST['familiesu'][$key];
    $supported_familiesu = $_POST['supported_familiesu'][$key];
    $four_hundred_twentyu = $_POST['four_hundred_twentyu'][$key];
    $one_thousand_five_hundredu = $_POST['one_thousand_five_hundredu'][$key];
    $two_thousand_five_hundredu = $_POST['two_thousand_five_hundredu'][$key];
    $three_thousand_five_hundredu = $_POST['three_thousand_five_hundredu'][$key];
   
    $sql = "update samurdhi_assistance set families='$familiesu',supported_families='$supported_familiesu',four_hundred_twenty='$four_hundred_twentyu',one_thousand_five_hundred='$one_thousand_five_hundredu',two_thousand_five_hundred='$two_thousand_five_hundredu',three_thousand_five_hundred='$three_thousand_five_hundredu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='social_service.php?type=6&&year=$year6u';</script>";
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
                  <i class="mdi mdi-voice"></i>
                </span> සමාජ සේවා/සමෘද්ධි තොරතුරු

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
                            <center><a class="dropdown-item" href="social_service.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="social_service.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="social_service.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="social_service.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="social_service.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="social_service.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="social_service.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="social_service.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="social_service.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="social_service.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="social_service.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="social_service.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='social_service.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>රජයේ ආධාර ලාභීන් සහ සමාජයේ අවධානයට ලක් විය යුතු පුද්ගලයින්</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ආබාධිත පුද්ගලයින් පිළිබද තොරතුරු</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ශාරීරික හා මානසික අපහසුතා සහිත පුද්ගලයින්</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වයස අවු. 15-60 අතර ශාරීරික හා මානසික ආබාධ සහිත පුද්ගලයන්</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ළමා නිවාස/වැඩිහිටි නිවාස/දිවා සුරැකුම් මධ්‍යස්ථාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='social_service.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>සමෘද්ධි ආධාර ලබන පවුල් සංඛ්‍යාව</a>"; ?> 

                </div>
            </div> 

        </div>

        </form>


<!-- ===========================රජයේ ආධාර ලාභීන් සහ සමාජයේ අවධානයට ලක් විය යුතු පුද්ගලයින් ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){

  ?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රජයේ ආධාර ලාභීන් සහ සමාජයේ අවධානයට ලක් විය යුතු පුද්ගලයින් </h4>


<?php
  $q3 =$conn->query("SELECT * from government_aid_recipients WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $tuberculosis=$row['tuberculosis'];
    $cancer=$row['cancer'];
    $thalassemia=$row['thalassemia'];
    $leprosy=$row['leprosy']; 
    $kidney=$row['kidney']; 
    $public_assistance=$row['public_assistance'];
    $adult_beneficiary=$row['adult_beneficiary'];
    $disabilities_people=$row['disabilities_people'];
    $female_basic=$row['female_basic']; 
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ක්ෂය රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tuberculosisu[]" value='<?php echo $tuberculosis; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පිළිකා රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="canceru[]" value='<?php echo $cancer; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">තැලසීමියා රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="thalassemiau[]" value='<?php echo $thalassemia; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලාදුරු රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="leprosyu[]" value='<?php echo $leprosy; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වකුගඩු ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="kidneyu[]" value='<?php echo $kidney; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මහජන ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="public_assistanceu[]" value='<?php echo $public_assistance; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වැඩිහිටි දීමනාලාභී පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="adult_beneficiaryu[]" value='<?php echo $adult_beneficiary; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආබාධිත පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="disabilities_peopleu[]" value='<?php echo $disabilities_people; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කාන්තා මූලික පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_basicu[]" value='<?php echo $female_basic; ?>'>
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
                    <h4 class="card-title">රජයේ ආධාර ලාභීන් සහ සමාජයේ අවධානයට ලක් විය යුතු පුද්ගලයින්</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ක්ෂය රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tuberculosis[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පිළිකා රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cancer[]" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">තැලසීමියා රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="thalassemia[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලාදුරු රෝග ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="leprosy[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වකුගඩු ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="kidney[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මහජන ආධාර</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="public_assistance[]" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වැඩිහිටි දීමනාලාභී පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="adult_beneficiary[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආබාධිත පුද්ගලයන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="disabilities_people[]" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කාන්තා මූලික පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_basic[]" >
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


              
<!-- ===========================ආබාධිත පුද්ගලයින් පිලිබද තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ආබාධිත පුද්ගලයින් පිළිබද තොරතුරු</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from disabilities_people WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $visually_impaired=$row['visually_impaired'];
                        $hearing_impaired=$row['hearing_impaired'];
                        $speech_impaired=$row['speech_impaired'];
                        $because_mental=$row['because_mental'];
                        $movement_disorders=$row['movement_disorders'];
                        $other=$row['other'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දෘෂ්‍යාබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="visually_impairedu[]" value='<?php echo $visually_impaired; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ශ්‍රව්‍යාබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hearing_impairedu[]" value='<?php echo $hearing_impaired; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කථන ආබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="speech_impairedu[]" value='<?php echo $speech_impaired; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මන්ද මානසික ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="because_mentalu[]" value='<?php echo $because_mental; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">චලක ආබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="movement_disordersu[]" value='<?php echo $movement_disorders; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
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
                    <h4 class="card-title">ආබාධිත පුද්ගලයින් පිළිබද තොරතුරු</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දෘෂ්‍යාබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="visually_impaired[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ශ්‍රව්‍යාබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hearing_impaired[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කථන ආබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="speech_impaired[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මන්ද මානසික ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="because_mental[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">චලක ආබාධිත ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="movement_disorders[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
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



<!-- ===========================ශාරීරික හා මානසික අපහසුතා සහිත පුද්ගලයින්================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ශාරීරික හා මානසික අපහසුතා සහිත පුද්ගලයින්</h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from physical_mental_discomfort WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $preschool=$row['preschool'];
                        $schools=$row['schools'];
                        $degree=$row['degree'];
                        $professional=$row['professional'];
                        $other=$row['other'];
                        $not_involved_education=$row['not_involved_education'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෙර පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="preschoolu[]" value='<?php echo $preschool; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="schoolsu[]" value='<?php echo $schools; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උපාධි හා ඊට ඉහල</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="degreeu[]" value='<?php echo $degree; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෘත්තීය/තාක්ෂණික</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="professionalu[]" value='<?php echo $professional; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත් අධ්‍යාපන ක්‍රියාකාරකම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අධ්‍යාපන කටයුතු වල නොයෙදේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="not_involved_educationu[]" value='<?php echo $not_involved_education; ?>'>
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
                    <h4 class="card-title">ශාරීරික හා මානසික අපහසුතා සහිත පුද්ගලයින්</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෙර පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="preschool[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="schools[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උපාධි හා ඊට ඉහල</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="degree[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෘත්තීය/තාක්ෂණික</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="professional[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත් අධ්‍යාපන ක්‍රියාකාරකම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අධ්‍යාපන කටයුතු වල නොයෙදේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="not_involved_education[]" >
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



<!-- ===========================වයස අවු. 15-60 අතර ශාරීරික හා මානසික ආබාධ සහිත පුද්ගලයන්================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වයස අවු. 15-60 අතර ශාරීරික හා මානසික ආබාධ සහිත පුද්ගලයන්</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from physical_mental_discomfort_b WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $public_sector=$row['public_sector'];
                          $semi_state=$row['semi_state'];
                          $private=$row['private'];
                          $self_employment=$row['self_employment'];
                          $agriculture=$row['agriculture'];
                          $abroad=$row['abroad'];
                          $no_work=$row['no_work'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රාජ්‍ය අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="public_sectoru[]" value='<?php echo $public_sector; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_stateu[]" value='<?php echo $semi_state; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="privateu[]" value='<?php echo $private; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ස්වයං රැකියා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self_employmentu[]" value='<?php echo $self_employment; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂිකාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agricultureu[]" value='<?php echo $agriculture; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදෙස්ගත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="abroadu[]" value='<?php echo $abroad; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රැකියා නොකරන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_worku[]" value='<?php echo $no_work; ?>'>
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
                    <h4 class="card-title">වයස අවු. 15-60 අතර ශාරීරික හා මානසික ආබාධ සහිත පුද්ගලයන්</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රාජ්‍ය අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="public_sector[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_state[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ස්වයං රැකියා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="self_employment[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කෘෂිකාර්මික අංශය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="agriculture[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදෙස්ගත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="abroad[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රැකියා නොකරන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_work[]" >
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




<!-- ===========================ළමා නිවාස/වැඩිහිටි නිවාස/දිවා සුරැකුම් මධ්‍යස්තාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ළමා නිවාස/වැඩිහිටි නිවාස/දිවා සුරැකුම් මධ්‍යස්ථාන</h4>

                    <?php
    $q3 =$conn->query("SELECT * from orphanages WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $orphanages=$row['orphanages'];
      $addres=$row['addres'];
      $contact=$row['contact'];
      $client=$row['client'];
      $requirements=$row['requirements'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්ථානය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="orphanagesu[]" value='<?php echo $orphanages; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                          <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                          </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සේවාලාභී පුද්ගලයන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="clientu[]" value='<?php echo $client; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවශ්‍යතා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="requirementsu[]" value='<?php echo $requirements; ?>'>
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
                    <h4 class="card-title">ළමා නිවාස/වැඩිහිටි නිවාස/දිවා සුරැකුම් මධ්‍යස්ථාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්ථානය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="orphanages[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක.අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contact[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සේවාලාභී පුද්ගලයින් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="client[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අවශ්‍යතා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="requirements[]" >
                        </div>

                      </div>

              </div>
                      
                      <?php echo "<input type='hidden' id='custId' name='year5[]' value='$year'>"; ?>
                   
                    </div>
 
                </div>
              </div>
              
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit5" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } }?>




<!-- ===========================සමෘද්ධි ආධාර ලබන පවුල් සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සමෘද්ධි ආධාර ලබන පවුල් සංඛ්‍යාව</h4>

                    <?php
    $q3 =$conn->query("SELECT * from samurdhi_assistance WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $families=$row['families'];
      $supported_families=$row['supported_families'];
      $four_hundred_twenty=$row['four_hundred_twenty'];
      $one_thousand_five_hundred=$row['one_thousand_five_hundred'];
      $two_thousand_five_hundred=$row['two_thousand_five_hundred'];
      $three_thousand_five_hundred=$row['three_thousand_five_hundred'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වසමේ පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="familiesu[]" value='<?php echo $families; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආධාරලාභී පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="supported_familiesu[]" value='<?php echo $supported_families; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආධාර බෙදා ඇති ආකාරය අනුව රු.420</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="four_hundred_twentyu[]" value='<?php echo $four_hundred_twenty; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රු.1500</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_thousand_five_hundredu[]" value='<?php echo $one_thousand_five_hundred; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රු.2500</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="two_thousand_five_hundredu[]" value='<?php echo $two_thousand_five_hundred; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රු.3500</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_thousand_five_hundredu[]" value='<?php echo $three_thousand_five_hundred; ?>'>
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
                    <h4 class="card-title">සමෘද්ධි ආධාර ලබන පවුල් සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වසමේ පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="families[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආධාරලාභී පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="supported_families[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආධාර බෙදා දී ඇති ආකාරය අනුව රු.420</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="four_hundred_twenty[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රු.1500</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_thousand_five_hundred[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රු.2500</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="two_thousand_five_hundred[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රු.3500</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_thousand_five_hundred[]" >
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