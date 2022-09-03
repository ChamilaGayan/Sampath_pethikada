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
// total_population
if(isset($_POST['submit1']))
{ 
  $female=$_POST['female'];
  $male=$_POST['male'];
  $year1=$_POST['year1'];
  
  $sql="INSERT into total_population (female,male,ds,userid,year,gnda) 
        VALUES ('".$female."','".$male."','".$ds."','".$uid."','".$year1."','".$gnda."')";
        $insert = $conn->query($sql);

        if($insert)
        {
          echo "<script>alert('Success!.');</script>";
          echo "<script type='text/javascript'>location.href='population.php?type=1&&year=$year1';</script>";
        }
}


// adult_population_education
if(isset($_POST['submit2']))
{ 
  $female_notedu=$_POST['female_notedu'];
  $male_notedu=$_POST['male_notedu'];
  $female_one_five=$_POST['female_one_five'];
  $male_one_five=$_POST['male_one_five'];
  $female_six_ten=$_POST['female_six_ten'];
  $male_six_ten=$_POST['male_six_ten'];
  $female_ol=$_POST['female_ol'];
  $male_ol=$_POST['male_ol'];
  $female_al=$_POST['female_al'];
  $male_al=$_POST['male_al'];
  $female_degree=$_POST['female_degree'];
  $male_degree=$_POST['male_degree'];
  $year2=$_POST['year2'];

  $sql2="INSERT into adult_population_education (ds,userid,year,female_notedu,male_notedu,female_one_five,male_one_five,female_six_ten,male_six_ten,female_ol,male_ol,female_al,male_al,female_degree,male_degree,gnda) 
  VALUES ('".$ds."','".$uid."','".$year2."','".$female_notedu."','".$male_notedu."','".$female_one_five."','".$male_one_five."','".$female_six_ten."','".$male_six_ten."','".$female_ol."','".$male_ol."','".$female_al."','".$male_al."','".$female_degree."','".$male_degree."','".$gnda."')";
  $insert = $conn->query($sql2);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=2&&year=$year2';</script>";
  }
}


// population_religion
if(isset($_POST['submit3']))
{ 
  $female_buddhist=$_POST['female_buddhist'];
  $male_buddhist=$_POST['male_buddhist'];
  $female_tamil=$_POST['female_tamil'];
  $male_tamil=$_POST['male_tamil'];
  $female_muslim=$_POST['female_muslim'];
  $male_muslim=$_POST['male_muslim'];
  $female_rome=$_POST['female_rome'];
  $male_rome=$_POST['male_rome'];
  $female_cristian=$_POST['female_cristian'];
  $male_cristian=$_POST['male_cristian'];
  $female_other=$_POST['female_other'];
  $male_other=$_POST['male_other'];
  $year3=$_POST['year3'];

  $sql3="INSERT into population_religion (ds,userid,year,female_buddhist,male_buddhist,female_tamil,male_tamil,female_muslim,male_muslim,female_rome,male_rome,female_cristian,male_cristian,female_other,male_other,gnda) 
  VALUES ('".$ds."','".$uid."','".$year3."','".$female_buddhist."','".$male_buddhist."','".$female_tamil."','".$male_tamil."','".$female_muslim."','".$male_muslim."','".$female_rome."','".$male_rome."','".$female_cristian."','".$male_cristian."','".$female_other."','".$male_other."','".$gnda."')";
  $insert = $conn->query($sql3);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=3&&year=$year3';</script>";
  }
}


// population_ds
if(isset($_POST['submit4']))
{ 
  $female_town=$_POST['female_town'];
  $male_town=$_POST['male_town'];
  $female_rural=$_POST['female_rural'];
  $male_rural=$_POST['male_rural'];
  $female_estates=$_POST['female_estates'];
  $male_estates=$_POST['male_estates'];
  $land_density=$_POST['land_density'];
  $population_density=$_POST['population_density'];
  $year4=$_POST['year4'];

  $sql4="INSERT into population_ds (ds,userid,year,female_town,male_town,female_rural,male_rural,female_estates,male_estates,land_density,population_density,gnda) 
  VALUES ('".$ds."','".$uid."','".$year4."','".$female_town."','".$male_town."','".$female_rural."','".$male_rural."','".$female_estates."','".$male_estates."','".$land_density."','".$population_density."','".$gnda."')";
  $insert = $conn->query($sql4);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=4&&year=$year4';</script>";
  }
}


// population_electoral_roll
if(isset($_POST['submit5']))
{ 
  $female_vote=$_POST['female_vote'];
  $male_vote=$_POST['male_vote'];
  $year5=$_POST['year5'];

  $sql5="INSERT into population_electoral_roll (ds,userid,year,female_vote,male_vote,gnda) 
  VALUES ('".$ds."','".$uid."','".$year5."','".$female_vote."','".$male_vote."','".$gnda."')";
  $insert = $conn->query($sql5);
  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=5&&year=$year5';</script>";
  }
}


// population_ethnicity
if(isset($_POST['submit6']))
{ 
  $female_sinhala=$_POST['female_sinhala'];
  $male_sinhala=$_POST['male_sinhala'];
  $female_sltamil=$_POST['female_sltamil'];
  $male_sltamil=$_POST['male_sltamil'];
  $female_intamil=$_POST['female_intamil'];
  $male_intamil=$_POST['male_intamil'];
  $female_yonaka=$_POST['female_yonaka'];
  $male_yonaka=$_POST['male_yonaka'];
  $female_brg=$_POST['female_brg'];
  $male_brg=$_POST['male_brg'];
  $female_otherpo=$_POST['female_otherpo'];
  $male_otherpo=$_POST['male_otherpo'];
  $year6=$_POST['year6'];

  $sql6="INSERT into population_ethnicity (ds,userid,year,female_sinhala,male_sinhala,female_sltamil,male_sltamil,female_intamil,male_intamil,female_yonaka,male_yonaka,female_brg,male_brg,female_otherpo,male_otherpo,gnda) 
  VALUES ('".$ds."','".$uid."','".$year6."','".$female_sinhala."','".$male_sinhala."','".$female_sltamil."','".$male_sltamil."','".$female_intamil."','".$male_intamil."','".$female_yonaka."','".$male_yonaka."','".$female_brg."','".$male_brg."','".$female_otherpo."','".$male_otherpo."','".$gnda."')";
  $insert = $conn->query($sql6);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=6&&year=$year6';</script>";
  }
}


// population_age
if(isset($_POST['submit7']))
{ 
  $female_zero_five=$_POST['female_zero_five'];
  $male_zero_five=$_POST['male_zero_five'];
  $female_six_fourteen=$_POST['female_six_fourteen'];
  $male_six_fourteen=$_POST['male_six_fourteen'];
  $female_fifteen_eighteen=$_POST['female_fifteen_eighteen'];
  $male_fifteen_eighteen=$_POST['male_fifteen_eighteen'];
  $female_nineteen_thirtyfive=$_POST['female_nineteen_thirtyfive'];
  $male_nineteen_thirtyfive=$_POST['male_nineteen_thirtyfive'];
  $female_thirtysix_sixty=$_POST['female_thirtysix_sixty'];
  $male_thirtysix_sixty=$_POST['male_thirtysix_sixty'];
  $female_sixty=$_POST['female_sixty'];
  $male_sixty=$_POST['male_sixty'];
  $year7=$_POST['year7'];

  $sql7="INSERT into population_age (ds,userid,year,female_zero_five,male_zero_five,female_six_fourteen,male_six_fourteen,female_fifteen_eighteen,male_fifteen_eighteen,female_nineteen_thirtyfive,male_nineteen_thirtyfive,female_thirtysix_sixty,male_thirtysix_sixty,female_sixty,male_sixty,gnda) 
  VALUES ('".$ds."','".$uid."','".$year7."','".$female_zero_five."','".$male_zero_five."','".$female_six_fourteen."','".$male_six_fourteen."','".$female_fifteen_eighteen."','".$male_fifteen_eighteen."','".$female_nineteen_thirtyfive."','".$male_nineteen_thirtyfive."','".$female_thirtysix_sixty."','".$male_thirtysix_sixty."','".$female_sixty."','".$male_sixty."','".$gnda."')";
  $insert = $conn->query($sql7);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=7&&year=$year7';</script>";
  }
}


// abroad_population
if(isset($_POST['submit8']))
{ 
  $female_job=$_POST['female_job'];
  $male_job=$_POST['male_job'];
  $female_edu=$_POST['female_edu'];
  $male_edu=$_POST['male_edu'];
  $female_otherfor=$_POST['female_otherfor'];
  $male_otherfor=$_POST['male_otherfor'];
  $year8=$_POST['year8'];

  $sql8="INSERT into abroad_population (ds,userid,year,female_job,male_job,female_edu,male_edu,female_otherfor,male_otherfor,gnda) 
  VALUES ('".$ds."','".$uid."','".$year8."','".$female_job."','".$male_job."','".$female_edu."','".$male_edu."','".$female_otherfor."','".$male_otherfor."','".$gnda."')";
  $insert = $conn->query($sql8);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=8&&year=$year8';</script>";
  }
}


// retired_population
if(isset($_POST['submit9']))
{ 
  $female_retirees=$_POST['female_retirees'];
  $male_retirees=$_POST['male_retirees'];
  $year9=$_POST['year9'];

  $sql9="INSERT into retired_population (ds,userid,year,female_retirees,male_retirees,gnda) 
  VALUES ('".$ds."','".$uid."','".$year9."','".$female_retirees."','".$male_retirees."','".$gnda."')";
  $insert = $conn->query($sql9);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=9&&year=$year9';</script>";
  }
}


// dependency_rate
if(isset($_POST['submit10']))
{ 
  $child=$_POST['child'];
  $aging=$_POST['aging'];
  $year10=$_POST['year10'];

  $sql10="INSERT into dependency_rate (ds,userid,year,child,aging,gnda) 
  VALUES ('".$ds."','".$uid."','".$year10."','".$child."','".$aging."','".$gnda."')";
  $insert = $conn->query($sql10);

  if($insert)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=10&&year=$year10';</script>";
  }
}
// ========================insert data==========================

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>

// ========================update data==========================

// total_population
if(isset($_POST['update1']))
{ 
  $femaleu=$_POST['femaleu'];
  $maleu=$_POST['maleu'];
  $year1u=$_POST['year1u'];

  $sql = "update total_population set female='$femaleu',male='$maleu' WHERE userid='$uid' AND year='$year1u'";
  $update = $conn->query($sql);

        if($update)
        {
          echo "<script>alert('Success!.');</script>";
          echo "<script type='text/javascript'>location.href='population.php?type=1&&year=$year1u';</script>";
        }
}

// adult_population_education
if(isset($_POST['update2']))
{ 
  $female_noteduu=$_POST['female_noteduu'];
  $male_noteduu=$_POST['male_noteduu'];
  $female_one_fiveu=$_POST['female_one_fiveu'];
  $male_one_fiveu=$_POST['male_one_fiveu'];
  $female_six_tenu=$_POST['female_six_tenu'];
  $male_six_tenu=$_POST['male_six_tenu'];
  $female_olu=$_POST['female_olu'];
  $male_olu=$_POST['male_olu'];
  $female_alu=$_POST['female_alu'];
  $male_alu=$_POST['male_alu'];
  $female_degreeu=$_POST['female_degreeu'];
  $male_degreeu=$_POST['male_degreeu'];
  $year2u=$_POST['year2u'];

  $sql = "update adult_population_education set female_notedu='$female_noteduu',male_notedu='$male_noteduu',female_one_five='$female_one_fiveu',male_one_five='$male_one_fiveu',female_six_ten='$female_six_tenu',male_six_ten='$male_six_tenu',female_ol='$female_olu',male_ol='$male_olu',female_al='$female_alu',male_al='$male_alu',female_degree='$female_degreeu',male_degree='$male_degreeu' WHERE userid='$uid' AND year='$year2u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=2&&year=$year2u';</script>";
  }
}


// population_religion
if(isset($_POST['update3']))
{ 
  $female_buddhistu=$_POST['female_buddhistu'];
  $male_buddhistu=$_POST['male_buddhistu'];
  $female_tamilu=$_POST['female_tamilu'];
  $male_tamilu=$_POST['male_tamilu'];
  $female_muslimu=$_POST['female_muslimu'];
  $male_muslimu=$_POST['male_muslimu'];
  $female_romeu=$_POST['female_romeu'];
  $male_romeu=$_POST['male_romeu'];
  $female_cristianu=$_POST['female_cristianu'];
  $male_cristianu=$_POST['male_cristianu'];
  $female_otheru=$_POST['female_otheru'];
  $male_otheru=$_POST['male_otheru'];
  $year3u=$_POST['year3u'];

  $sql = "update population_religion set female_buddhist='$female_buddhistu',male_buddhist='$male_buddhistu',female_tamil='$female_tamilu',male_tamil='$male_tamilu',female_muslim='$female_muslimu',male_muslim='$male_muslimu',female_rome='$female_romeu',male_rome='$male_romeu',female_cristian='$female_cristianu',male_cristian='$male_cristianu',female_other='$female_otheru',male_other='$male_otheru' WHERE userid='$uid' AND year='$year3u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=3&&year=$year3u';</script>";
  }
}


// population_ds
if(isset($_POST['update4']))
{ 
  $female_townu=$_POST['female_townu'];
  $male_townu=$_POST['male_townu'];
  $female_ruralu=$_POST['female_ruralu'];
  $male_ruralu=$_POST['male_ruralu'];
  $female_estatesu=$_POST['female_estatesu'];
  $male_estatesu=$_POST['male_estatesu'];
  $land_densityu=$_POST['land_densityu'];
  $population_densityu=$_POST['population_densityu'];
  $year4u=$_POST['year4u'];

  $sql = "update population_ds set female_town='$female_townu',male_town='$male_townu',female_rural='$female_ruralu',male_rural='$male_ruralu',female_estates='$female_estatesu',male_estates='$male_estatesu',land_density='$land_densityu',population_density='$population_densityu' WHERE userid='$uid' AND year='$year4u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=4&&year=$year4u';</script>";
  }
}


// population_electoral_roll
if(isset($_POST['update5']))
{ 
  $female_voteu=$_POST['female_voteu'];
  $male_voteu=$_POST['male_voteu'];
  $year5u=$_POST['year5u'];

  $sql = "update population_electoral_roll set female_vote='$female_voteu',male_vote='$male_voteu' WHERE userid='$uid' AND year='$year5u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=5&&year=$year5u';</script>";
  }
}


// population_ethnicity
if(isset($_POST['update6']))
{ 
  $female_sinhalau=$_POST['female_sinhalau'];
  $male_sinhalau=$_POST['male_sinhalau'];
  $female_sltamilu=$_POST['female_sltamilu'];
  $male_sltamilu=$_POST['male_sltamilu'];
  $female_intamilu=$_POST['female_intamilu'];
  $male_intamilu=$_POST['male_intamilu'];
  $female_yonakau=$_POST['female_yonakau'];
  $male_yonakau=$_POST['male_yonakau'];
  $female_brgu=$_POST['female_brgu'];
  $male_brgu=$_POST['male_brgu'];
  $female_otherpou=$_POST['female_otherpou'];
  $male_otherpou=$_POST['male_otherpou'];
  $year6u=$_POST['year6u'];

  $sql = "update population_ethnicity set female_sinhala='$female_sinhalau',male_sinhala='$male_sinhalau',female_sltamil='$female_sltamilu',male_sltamil='$male_sltamilu',female_intamil='$female_intamilu',male_intamil='$male_intamilu',female_yonaka='$female_yonakau',male_yonaka='$male_yonakau',female_brg='$female_brgu',male_brg='$male_brgu',female_otherpo='$female_otherpou',male_otherpo='$male_otherpou' WHERE userid='$uid' AND year='$year6u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=6&&year=$year6u';</script>";
  }
}


// population_age
if(isset($_POST['update7']))
{ 
  $female_zero_fiveu=$_POST['female_zero_fiveu'];
  $male_zero_fiveu=$_POST['male_zero_fiveu'];
  $female_six_fourteenu=$_POST['female_six_fourteenu'];
  $male_six_fourteenu=$_POST['male_six_fourteenu'];
  $female_fifteen_eighteenu=$_POST['female_fifteen_eighteenu'];
  $male_fifteen_eighteenu=$_POST['male_fifteen_eighteenu'];
  $female_nineteen_thirtyfiveu=$_POST['female_nineteen_thirtyfiveu'];
  $male_nineteen_thirtyfiveu=$_POST['male_nineteen_thirtyfiveu'];
  $female_thirtysix_sixtyu=$_POST['female_thirtysix_sixtyu'];
  $male_thirtysix_sixtyu=$_POST['male_thirtysix_sixtyu'];
  $female_sixtyu=$_POST['female_sixtyu'];
  $male_sixtyu=$_POST['male_sixtyu'];
  $year7u=$_POST['year7u'];

  $sql = "update population_age set female_zero_five='$female_zero_fiveu',male_zero_five='$male_zero_fiveu',female_six_fourteen='$female_six_fourteenu',male_six_fourteen='$male_six_fourteenu',female_fifteen_eighteen='$female_fifteen_eighteenu',male_fifteen_eighteen='$male_fifteen_eighteenu',female_nineteen_thirtyfive='$female_nineteen_thirtyfiveu',male_nineteen_thirtyfive='$male_nineteen_thirtyfiveu',female_thirtysix_sixty='$female_thirtysix_sixtyu',male_thirtysix_sixty='$male_thirtysix_sixtyu',female_sixty='$female_sixtyu',male_sixty='$male_sixtyu' WHERE userid='$uid' AND year='$year7u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=7&&year=$year7u';</script>";
  }
}


// abroad_population
if(isset($_POST['update8']))
{ 
  $female_jobu=$_POST['female_jobu'];
  $male_jobu=$_POST['male_jobu'];
  $female_eduu=$_POST['female_eduu'];
  $male_eduu=$_POST['male_eduu'];
  $female_otherforu=$_POST['female_otherforu'];
  $male_otherforu=$_POST['male_otherforu'];
  $year8u=$_POST['year8u'];

  $sql = "update abroad_population set female_job='$female_jobu',male_job='$male_jobu',female_edu='$female_eduu',male_edu='$male_eduu',female_otherfor='$female_otherforu',male_otherfor='$male_otherforu' WHERE userid='$uid' AND year='$year8u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=8&&year=$year8u';</script>";
  }
}


// retired_population
if(isset($_POST['update9']))
{ 
  $female_retireesu=$_POST['female_retireesu'];
  $male_retireesu=$_POST['male_retireesu'];
  $year9u=$_POST['year9u'];

  $sql = "update retired_population set female_retirees='$female_retireesu',male_retirees='$male_retireesu' WHERE userid='$uid' AND year='$year9u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=9&&year=$year9u';</script>";
  }
}


// dependency_rate
if(isset($_POST['update10']))
{ 
  $childu=$_POST['childu'];
  $agingu=$_POST['agingu'];
  $year10u=$_POST['year10u'];

  $sql = "update dependency_rate set child='$childu',aging='$agingu' WHERE userid='$uid' AND year='$year10u'";
  $update = $conn->query($sql);

  if($update)
  {
    echo "<script>alert('Success!.');</script>";
    echo "<script type='text/javascript'>location.href='population.php?type=10&&year=$year10u';</script>";
  }
}
// ========================update data==========================

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
      <?php  include 'include/navbar.php'; ?>
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
                  <i class="mdi mdi-account-multiple"></i>
                </span> ජනගහනය

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
                            <center><a class="dropdown-item" href="population.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="population.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="population.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="population.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="population.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="population.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="population.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="population.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="population.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="population.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="population.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="population.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='population.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>මුලු ජනගහනය </a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=4&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>අංශය අනුව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=6&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ජන වර්ගය අනුව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=3&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ආගම අනුව ජනගහනය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=2&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>අධ්‍යාපන මට්ටම අනුව වැඩිහිටි ජනගහනය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=7&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වයස් කාණ්ඩය අනුව ජනගහනය</a>"; ?> 
        
                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=5&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ඡන්ද හිමි නාමලේඛනය අනුව</a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විදේශගත ජනගහනය</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විශ්‍රාමික ජනගහනය</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='population.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>යැපීම් අනුපාතය</a>"; ?> 

                </div>
            </div>

        </div>

        </form>
            


<!-- ===========================total_population================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){

$q1 =$conn->query("SELECT * from total_population WHERE userid='$uid' AND year='$year_update'");
if($q1 !== false && $q1->num_rows > 0){
while($row=$q1->fetch_assoc()){

    $fml=$row['female'];
    $ml=$row['male'];
}
?>
<!-- Submit -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මුලු ජනගහනය</h4>
                    <form action="" name="1" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="femaleu" placeholder="ස්ත්‍රී" value='<?php echo $fml; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="maleu" placeholder="පුරුෂ" value='<?php echo $ml; ?>'>
                        </div>
                        <?php echo "<input type='hidden' id='custId' name='year1u' value='$year'>"; ?>
                      </div>

                   <center> <button type="submit" class="btn btn-gradient-info me-2" name="update1" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                     
                    </form>
                  </div>
                </div>
              </div>


              <?php }else { ?>
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මුලු ජනගහනය</h4>
                    <form action="" name="11" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female" placeholder="ස්ත්‍රී" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male" placeholder="පුරුෂ" >
                        </div>
                        <?php echo "<input type='hidden' id='custId' name='year1' value='$year'>"; ?>
                      </div>

                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit1" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                     
                    </form>
                  </div>
                </div>
              </div>


<?php }} ?>
<!-- ======================================================================================= -->



<!-- ============================adult_population_education================================= -->

<?php 
if($type=='2'){

  $q2 =$conn->query("SELECT * from adult_population_education WHERE userid='$uid' AND year='$year_update'");
if($q2 !== false && $q2->num_rows > 0){
while($row=$q2->fetch_assoc()){

  $female_notedur=$row['female_notedu'];
  $male_notedur=$row['male_notedu'];
  $female_one_fiver=$row['female_one_five'];
  $male_one_fiver=$row['male_one_five'];
  $female_six_tenr=$row['female_six_ten'];
  $male_six_tenr=$row['male_six_ten'];
  $female_olr=$row['female_ol'];
  $male_olr=$row['male_ol'];
  $female_alr=$row['female_al'];
  $male_alr=$row['male_al'];
  $female_degreer=$row['female_degree'];
  $male_degreer=$row['male_degree'];
}
?>
<!-- Submit -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අධ්‍යාපන මට්ටම අනුව වැඩිහිටි ජනගහනය</h4>
                    <form action="" name="22" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පාසල් අධ්‍යාපනය නොලැබූ</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_noteduu" placeholder="ස්ත්‍රී" value='<?php echo $female_notedur; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_noteduu" placeholder="පුරුෂ" value='<?php echo $male_notedur; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">1-5 ශ්‍රේණි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_one_fiveu" placeholder="ස්ත්‍රී" value='<?php echo $female_one_fiver; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_one_fiveu" placeholder="පුරුෂ" value='<?php echo $male_one_fiver; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">6-10 ශ්‍රේණි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_six_tenu" placeholder="ස්ත්‍රී" value='<?php echo $female_six_tenr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_six_tenu" placeholder="පුරුෂ" value='<?php echo $male_six_tenr; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">සා/පෙල දක්වා  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_olu" placeholder="ස්ත්‍රී" value='<?php echo $female_olr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_olu" placeholder="පුරුෂ" value='<?php echo $male_olr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">උ/පෙල දක්වා  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_alu" placeholder="ස්ත්‍රී" value='<?php echo $female_alr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_alu" placeholder="පුරුෂ" value='<?php echo $male_alr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">උපාධි/පශ්චාත් උපාධි/වෘත්තීය පුහුණු   </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_degreeu" placeholder="ස්ත්‍රී" value='<?php echo $female_degreer; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_degreeu" placeholder="පුරුෂ" value='<?php echo $male_degreer; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year2u' value='$year'>"; ?>


                      <center>   <button type="submit" class="btn btn-gradient-info me-2" name="update2" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }else{ ?>

<!-- Update -->
  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අධ්‍යාපන මට්ටම අනුව වැඩිහිටි ජනගහනය</h4>
                    <form action="" name="2" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පාසල් අධ්‍යාපනය නොලැබූ</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_notedu" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_notedu" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">1-5 ශ්‍රේණි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_one_five" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_one_five" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">6-10 ශ්‍රේණි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_six_ten" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_six_ten" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">සා/පෙල දක්වා  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_ol" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_ol" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">උ/පෙල දක්වා  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_al" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_al" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">උපාධි/පශ්චාත් උපාධි/වෘත්තීය පුහුණු   </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_degree" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_degree" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year2' value='$year'>"; ?>


                      <center>   <button type="submit" class="btn btn-gradient-primary me-2" name="submit2" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>



<?php } }?>
<!-- ============================================================================= -->



<!-- =============================population_religion================================ -->
<?php 
if($type=='3'){
  $q3 =$conn->query("SELECT * from population_religion WHERE userid='$uid' AND year='$year_update'");
if($q3 !== false && $q3->num_rows > 0){
while($row=$q3->fetch_assoc()){

  $female_buddhistr=$row['female_buddhist'];
  $male_buddhistr=$row['male_buddhist'];
  $female_tamilr=$row['female_tamil'];
  $male_tamilr=$row['male_tamil'];
  $female_muslimr=$row['female_muslim'];
  $male_muslimr=$row['male_muslim'];
  $female_romer=$row['female_rome'];
  $male_romer=$row['male_rome'];
  $female_cristianr=$row['female_cristian'];
  $male_cristianr=$row['male_cristian'];
  $female_otherr=$row['female_other'];
  $male_otherr=$row['male_other'];
}
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ආගම අනුව</h4>
                    <form action="" name="33" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">බෞද්ධ</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_buddhistu" placeholder="ස්ත්‍රී" value='<?php echo $female_buddhistr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_buddhistu" placeholder="පුරුෂ" value='<?php echo $male_buddhistr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">හින්දු </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_tamilu" placeholder="ස්ත්‍රී" value='<?php echo $female_tamilr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_tamilu" placeholder="පුරුෂ" value='<?php echo $male_tamilr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ඉස්ලාම් </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_muslimu" placeholder="ස්ත්‍රී" value='<?php echo $female_muslimr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_muslimu" placeholder="පුරුෂ" value='<?php echo $male_muslimr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">රෝමානු කතෝලික </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_romeu" placeholder="ස්ත්‍රී" value='<?php echo $female_romer; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_romeu" placeholder="පුරුෂ" value='<?php echo $male_romer; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ක්‍රිස්තියානි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_cristianu" placeholder="ස්ත්‍රී" value='<?php echo $female_cristianr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_cristianu" placeholder="පුරුෂ" value='<?php echo $male_cristianr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_otheru" placeholder="ස්ත්‍රී" value='<?php echo $female_otherr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_otheru" placeholder="පුරුෂ" value='<?php echo $male_otherr; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year3u' value='$year'>"; ?>


                      <center>   <button type="submit" class="btn btn-gradient-info me-2" name="update3" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } else{ ?>
<!-- Submit -->
  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ආගම අනුව</h4>
                    <form action="" name="3" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">බෞද්ධ</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_buddhist" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_buddhist" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">හින්දු </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_tamil" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_tamil" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ඉස්ලාම් </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_muslim" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_muslim" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">රෝමානු කතෝලික </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_rome" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_rome" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ක්‍රිස්තියානි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_cristian" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_cristian" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_other" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_other" placeholder="පුරුෂ">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year3' value='$year'>"; ?>


                      <center>   <button type="submit" class="btn btn-gradient-primary me-2" name="submit3" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>
<!-- ============================================================================= -->



<!-- ============================population_ds================================= -->
<?php 
if($type=='4'){

  $q4 =$conn->query("SELECT * from population_ds WHERE userid='$uid' AND year='$year_update'");
if($q4 !== false && $q4->num_rows > 0){
while($row=$q4->fetch_assoc()){

  $female_townr=$row['female_town'];
  $male_townr=$row['male_town'];
  $female_ruralr=$row['female_rural'];
  $male_ruralr=$row['male_rural'];
  $female_estatesr=$row['female_estates'];
  $male_estatesr=$row['male_estates'];
  $land_densityr=$row['land_density'];
  $population_densityr=$row['population_density'];
}
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අංශය අනුව</h4>
                    <form action="" name="44" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label ">නාගරික</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_townu" placeholder="ස්ත්‍රී" value='<?php echo $female_townr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_townu" placeholder="පුරුෂ" value='<?php echo $male_townr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ග්‍රාමීය </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_ruralu" placeholder="ස්ත්‍රී" value='<?php echo $female_ruralr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_ruralu" placeholder="පුරුෂ" value='<?php echo $male_ruralr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වතු </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_estatesu" placeholder="ස්ත්‍රී" value='<?php echo $female_estatesr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_estatesu" placeholder="පුරුෂ" value='<?php echo $male_estatesr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භූමි ඝනත්වය </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="land_densityu" placeholder="හෙක්." value='<?php echo $land_densityr; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජන ඝනත්වය</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="population_densityu" placeholder="හෙක්." value='<?php echo $population_densityr; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year4u' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update4" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>
<!-- Submit -->
              <?php }else{ ?>
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අංශය අනුව</h4>
                    <form action="" name="4" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label ">නාගරික</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_town" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_town" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ග්‍රාමීය </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_rural" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_rural" placeholder="පුරුෂ" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වතු </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_estates" placeholder="ස්ත්‍රී" >
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_estates" placeholder="පුරුෂ" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භූමි ඝනත්වය </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="land_density" placeholder="හෙක්.">
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජන ඝනත්වය</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="population_density" placeholder="හෙක්.">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year4' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit4" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
<!-- ============================================================================= -->



<!-- ==============================population_electoral_roll=============================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){

  $q5 =$conn->query("SELECT * from population_electoral_roll WHERE userid='$uid' AND year='$year_update'");
if($q5 !== false && $q5->num_rows > 0){
while($row=$q5->fetch_assoc()){

  $female_voter=$row['female_vote'];
  $male_voter=$row['male_vote'];
}
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ඡන්ද හිමි නාමලේඛනය අනුව</h4>
                    <form action="" name="55" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඡන්ද හිමි සංඛ්‍යාව </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_voteu" placeholder="ස්ත්‍රී" value='<?php echo  $female_voter; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_voteu" placeholder="පුරුෂ" value='<?php echo $male_voter; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5u' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update5" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

              <!-- Submit -->
              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ඡන්ද හිමි නාමලේඛනය අනුව</h4>
                    <form action="" name="5" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඡන්ද හිමි සංඛ්‍යාව </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_vote" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_vote" placeholder="පුරුෂ">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year5' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit5" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>
<!-- ============================================================================= -->



<!-- =============================population_ethnicity================================ -->
<?php 
if($type=='6'){
  $q6 =$conn->query("SELECT * from population_ethnicity WHERE userid='$uid' AND year='$year_update'");
if($q6 !== false && $q6->num_rows > 0){
while($row=$q6->fetch_assoc()){

  $female_sinhalar=$row['female_sinhala'];
  $male_sinhalar=$row['male_sinhala'];
  $female_sltamilr=$row['female_sltamil'];
  $male_sltamilr=$row['male_sltamil'];
  $female_intamilr=$row['female_intamil'];
  $male_intamilr=$row['male_intamil'];
  $female_yonakar=$row['female_yonaka'];
  $male_yonakar=$row['male_yonaka'];
  $female_brgr=$row['female_brg'];
  $male_brgr=$row['male_brg'];
  $female_otherpor=$row['female_otherpo'];
  $male_otherpor=$row['male_otherpo'];
}
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ජනවර්ගය අනුව</h4>
                    <form action="" name="66" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">සිංහල </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_sinhalau" placeholder="ස්ත්‍රී" value='<?php echo $female_sinhalar; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_sinhalau" placeholder="පුරුෂ" value='<?php echo $male_sinhalar; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ශ්‍රිලංකා දෙමළ  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_sltamilu" placeholder="ස්ත්‍රී" value='<?php echo $female_sltamilr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_sltamilu" placeholder="පුරුෂ" value='<?php echo $male_sltamilr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ඉන්දියානු දෙමළ  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_intamilu" placeholder="ස්ත්‍රී" value='<?php echo $female_intamilr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_intamilu" placeholder="පුරුෂ" value='<?php echo $male_intamilr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ශ්‍රිලංකා යෝනක  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_yonakau" placeholder="ස්ත්‍රී" value='<?php echo $female_yonakar; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_yonakau" placeholder="පුරුෂ" value='<?php echo $male_yonakar; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">බර්ගර්  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_brgu" placeholder="ස්ත්‍රී" value='<?php echo $female_brgr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_brgu" placeholder="පුරුෂ" value='<?php echo $male_brgr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_otherpou" placeholder="ස්ත්‍රී" value='<?php echo $female_otherpor; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_otherpou" placeholder="පුරුෂ" value='<?php echo $male_otherpor; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year6u' value='$year'>"; ?>


                      <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update6" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<!-- Submit -->
              <?php }else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ජනවර්ගය අනුව</h4>
                    <form action="" name="6" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">සිංහල </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_sinhala" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_sinhala" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ශ්‍රිලංකා දෙමළ  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_sltamil" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_sltamil" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ඉන්දියානු දෙමළ  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_intamil" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_intamil" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ශ්‍රිලංකා යෝනක  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_yonaka" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_yonaka" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">බර්ගර්  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_brg" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_brg" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_otherpo" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_otherpo" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year6' value='$year'>"; ?>


                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit6" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>
<?php }} ?>
<!-- ============================================================================= -->



<!-- ==========================population_age=================================== -->
<?php 
if($type=='7'){

  $q7 =$conn->query("SELECT * from population_age WHERE userid='$uid' AND year='$year_update'");
  if($q7 !== false && $q7->num_rows > 0){
  while($row=$q7->fetch_assoc()){
  
    $female_zero_fiver=$row['female_zero_five'];
    $male_zero_fiver=$row['male_zero_five'];
    $female_six_fourteenr=$row['female_six_fourteen'];
    $male_six_fourteenr=$row['male_six_fourteen'];
    $female_fifteen_eighteenr=$row['female_fifteen_eighteen'];
    $male_fifteen_eighteenr=$row['male_fifteen_eighteen'];
    $female_nineteen_thirtyfiver=$row['female_nineteen_thirtyfive'];
    $male_nineteen_thirtyfiver=$row['male_nineteen_thirtyfive'];
    $female_thirtysix_sixtyr=$row['female_thirtysix_sixty'];
    $male_thirtysix_sixtyr=$row['male_thirtysix_sixty'];
    $female_sixtyr=$row['female_sixty'];
    $male_sixtyr=$row['male_sixty'];
  }
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වයස් කාණ්ඩය අනුව ජනගහනය </h4>
                    <form action="" name="77" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 0-5  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_zero_fiveu" placeholder="ස්ත්‍රී" value='<?php echo $female_zero_fiver; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_zero_fiveu" placeholder="පුරුෂ" value='<?php echo $male_zero_fiver; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 6-14</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_six_fourteenu" placeholder="ස්ත්‍රී" value='<?php echo $female_six_fourteenr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_six_fourteenu" placeholder="පුරුෂ" value='<?php echo $male_six_fourteenr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 15-18  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_fifteen_eighteenu" placeholder="ස්ත්‍රී" value='<?php echo $female_fifteen_eighteenr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_fifteen_eighteenu" placeholder="පුරුෂ" value='<?php echo $male_fifteen_eighteenr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 19-35</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_nineteen_thirtyfiveu" placeholder="ස්ත්‍රී" value='<?php echo $female_nineteen_thirtyfiver; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_nineteen_thirtyfiveu" placeholder="පුරුෂ" value='<?php echo $male_nineteen_thirtyfiver; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 36-60</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_thirtysix_sixtyu" placeholder="ස්ත්‍රී" value='<?php echo $female_thirtysix_sixtyr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_thirtysix_sixtyu" placeholder="පුරුෂ" value='<?php echo $male_thirtysix_sixtyr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 60ට වැඩි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_sixtyu" placeholder="ස්ත්‍රී" value='<?php echo $female_sixtyr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_sixtyu" placeholder="පුරුෂ" value='<?php echo $male_sixtyr; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year7u' value='$year'>"; ?>


                      <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update7" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<!-- Submit -->
              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වයස් කාණ්ඩය අනුව ජනගහනය </h4>
                    <form action="" name="7" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 0-5  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_zero_five" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_zero_five" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 6-14</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_six_fourteen" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_six_fourteen" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 15-18  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_fifteen_eighteen" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_fifteen_eighteen" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 19-35</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_nineteen_thirtyfive" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_nineteen_thirtyfive" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 36-60</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_thirtysix_sixty" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_thirtysix_sixty" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 60ට වැඩි </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_sixty" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_sixty" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year7' value='$year'>"; ?>


                      <center>   <button type="submit" class="btn btn-gradient-primary me-2" name="submit7" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php }} ?>
<!-- ============================================================================= -->



<!-- =============================abroad_population================================ -->
<?php 
if($type=='8'){

  $q8 =$conn->query("SELECT * from abroad_population WHERE userid='$uid' AND year='$year_update'");
  if($q8 !== false && $q8->num_rows > 0){
  while($row=$q8->fetch_assoc()){
  
    $female_jobr=$row['female_job'];
    $male_jobr=$row['male_job'];
    $female_edur=$row['female_edu'];
    $male_edur=$row['male_edu'];
    $female_otherforr=$row['female_otherfor'];
    $male_otherforr=$row['male_otherfor'];
  
  }
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත ජනගහනය</h4>
                    <form action="" name="8" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">රැකියා </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_jobu" placeholder="ස්ත්‍රී" value='<?php echo $female_jobr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_jobu" placeholder="පුරුෂ" value='<?php echo $male_jobr; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අධ්‍යාපන </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_eduu" placeholder="ස්ත්‍රී" value='<?php echo $female_edur; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_eduu" placeholder="පුරුෂ" value='<?php echo $male_edur; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_otherforu" placeholder="ස්ත්‍රී" value='<?php echo $female_otherforr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_otherforu" placeholder="පුරුෂ" value='<?php echo $male_otherforr; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year8u' value='$year'>"; ?>

                      <center>   <button type="submit" class="btn btn-gradient-info me-2" name="update8" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

              <!-- Submit -->
              <?php } else { ?>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත ජනගහනය</h4>
                    <form action="" name="8" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">රැකියා </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_job" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_job" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අධ්‍යාපන </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_edu" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_edu" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_otherfor" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_otherfor" placeholder="පුරුෂ">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year8' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit8" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } }?>
<!-- ============================================================================= -->



<!-- ============================retired_population================================= -->
<?php 
if($type=='9'){
  $q9 =$conn->query("SELECT * from retired_population WHERE userid='$uid' AND year='$year_update'");
  if($q9 !== false && $q9->num_rows > 0){
  while($row=$q9->fetch_assoc()){
  
    $female_retireesr=$row['female_retirees'];
    $male_retireesr=$row['male_retirees'];
  
  }
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විශ්‍රාමික ජනගහනය</h4>
                    <form action="" name="9" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">විශ්‍රාමිකයින් සංඛ්‍යාව  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_retireesu" placeholder="ස්ත්‍රී" value='<?php echo $female_retireesr; ?>'>
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_retireesu" placeholder="පුරුෂ" value='<?php echo $male_retireesr; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year9u' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update9" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

              <!-- Submit -->
              <?php } else {?>
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විශ්‍රාමික ජනගහනය</h4>
                    <form action="" name="9" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">විශ්‍රාමිකයින් සංඛ්‍යාව  </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="female_retirees" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="male_retirees" placeholder="පුරුෂ">
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year9' value='$year'>"; ?>

                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit9" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>
<?php }} ?>
<!-- ============================================================================= -->



<!-- =============================dependency_rate================================ -->
<?php 
if($type=='10'){
  $q10 =$conn->query("SELECT * from dependency_rate WHERE userid='$uid' AND year='$year_update'");
  if($q10 !== false && $q10->num_rows > 0){
  while($row=$q10->fetch_assoc()){
  
    $childr=$row['child'];
    $agingr=$row['aging'];
  
  }
?>
<!-- Update -->
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">යැපීම් අනුපාතය</h4>
                    <form action="" name="11" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළමා </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="childu" placeholder="ළමා" value='<?php echo $childr; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වයස්ගත </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="agingu" placeholder="වයස්ගත" value='<?php echo $agingr; ?>'>
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year10u' value='$year'>"; ?>
                      <center>   <button type="submit" class="btn btn-gradient-info me-2" name="update10" onClick="return confirm('Do you want to update this form?')">Update</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

<!-- Submit -->
              <?php } else { ?>
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">යැපීම් අනුපාතය</h4>
                    <form action="" name="11" method="post" class="signin-form" enctype="multipart/form-data"> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළමා </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="child" placeholder="ළමා">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වයස්ගත </label>

                        <div class="col-sm-4">
                          <input type="number" class="form-control" name="aging" placeholder="වයස්ගත">
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year10' value='$year'>"; ?>
                      <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit10" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  
                      
                    </form>
                  </div>
                </div>
              </div>

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