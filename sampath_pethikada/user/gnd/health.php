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

//rural_service_centers
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $no_hospitals = $_POST['no_hospitals'][$key];
    $moh = $_POST['moh'][$key];
    $health_inspectors = $_POST['health_inspectors'][$key];
    $hofficers = $_POST['hofficers'][$key];
    $family_health_services = $_POST['family_health_services'][$key];
    $fofficers = $_POST['fofficers'][$key];
   
    $sql="INSERT into rural_service_centers (ds,userid,`year`,gnda,no_hospitals,moh,health_inspectors,hofficers,family_health_services,fofficers) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$no_hospitals."','".$moh."','".$health_inspectors."','".$hofficers."','".$family_health_services."','".$fofficers."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=1&&year=$year1';</script>";
    }
}


//gov_hospitals
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $hospital_name = $_POST['hospital_name'][$key];
    $no_patients = $_POST['no_patients'][$key];
    $ward = $_POST['ward'][$key];
    $bed = $_POST['bed'][$key];
    $doctors = $_POST['doctors'][$key];
    
   
    $sql="INSERT into gov_hospitals (ds,userid,`year`,gnda,hospital_name,no_patients,ward,bed,doctors) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$hospital_name."','".$no_patients."','".$ward."','".$bed."','".$doctors."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=2&&year=$year2';</script>";
    }
}


//quarantine_staff
if(isset($_POST['submit3']))
{ 
  foreach($_POST['year3'] as $key => $year3){
    $specialist_doctor = $_POST['specialist_doctor'][$key];
    $medical_officer = $_POST['medical_officer'][$key];
    $dentist = $_POST['dentist'][$key];
    $assistant_medical_officer = $_POST['assistant_medical_officer'][$key];  
    $nursing_officer = $_POST['nursing_officer'][$key];
    $family_health_officer = $_POST['family_health_officer'][$key];
    $laboratory_technician = $_POST['laboratory_technician'][$key];
    $other_technician = $_POST['other_technician'][$key];  
    $pharmacist = $_POST['pharmacist'][$key];
    $drug_compound = $_POST['drug_compound'][$key];
    $establishment_staff = $_POST['establishment_staff'][$key];
    $caretaker = $_POST['caretaker'][$key];
    $general_hygiene = $_POST['general_hygiene'][$key];
    $other_employees = $_POST['other_employees'][$key];
    $other = $_POST['other'][$key];
    $approved_staff = $_POST['approved_staff'][$key];
    $deficit_number = $_POST['deficit_number'][$key];
    
   
    $sql="INSERT into quarantine_staff (ds,userid,`year`,gnda,specialist_doctor,medical_officer,dentist,assistant_medical_officer,nursing_officer,family_health_officer,laboratory_technician,other_technician,pharmacist,drug_compound,establishment_staff,caretaker,general_hygiene,other_employees,other,approved_staff,deficit_number) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$specialist_doctor."','".$medical_officer."','".$dentist."','".$assistant_medical_officer."','".$nursing_officer."','".$family_health_officer."','".$laboratory_technician."','".$other_technician."','".$pharmacist."','".$drug_compound."','".$establishment_staff."','".$caretaker."','".$general_hygiene."','".$other_employees."','".$other."','".$approved_staff."','".$deficit_number."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=3&&year=$year3';</script>";
    }
}


//ayurvedic
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    $ayurvedic_center = $_POST['ayurvedic_center'][$key];
    $ayurvedic_doctors = $_POST['ayurvedic_doctors'][$key];
    $other_staff = $_POST['other_staff'][$key];
    $patients_treated = $_POST['patients_treated'][$key];
    $wards = $_POST['wards'][$key];
    $bed = $_POST['bed'][$key];
   
    $sql="INSERT into ayurvedic (ds,userid,`year`,gnda,ayurvedic_center,ayurvedic_doctors,other_staff,patients_treated,wards,bed) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$ayurvedic_center."','".$ayurvedic_doctors."','".$other_staff."','".$patients_treated."','".$wards."','".$bed."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=4&&year=$year4';</script>";
    }
}



//rural_private_medical
if(isset($_POST['submit5']))
{ 
  foreach($_POST['year5'] as $key => $year5){
    $local_sinhala = $_POST['local_sinhala'][$key];
    $ayurvedic_doctors = $_POST['ayurvedic_doctors'][$key];
    $western_medicine = $_POST['western_medicine'][$key];
    $other = $_POST['other'][$key];
    
   
    $sql="INSERT into rural_private_medical (ds,userid,`year`,gnda,local_sinhala,ayurvedic_doctors,western_medicine,other) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$gnd."','".$local_sinhala."','".$ayurvedic_doctors."','".$western_medicine."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=5&&year=$year5';</script>";
    }
}



//covid_patient
if(isset($_POST['submit6']))
{ 
  foreach($_POST['year6'] as $key => $year6){
    $patient_female = $_POST['patient_female'][$key];
    $patient_male = $_POST['patient_male'][$key];
    
   
    $sql="INSERT into covid_patient (ds,userid,`year`,gnda,patient_female,patient_male) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$gnd."','".$patient_female."','".$patient_male."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=6&&year=$year6';</script>";
    }
}



//live_births
if(isset($_POST['submit7']))
{ 
  foreach($_POST['year7'] as $key => $year7){
    $live_births = $_POST['live_births'][$key];
    $inanimate_births = $_POST['inanimate_births'][$key];
    $low_birth_weight = $_POST['low_birth_weight'][$key];
    
    $sql="INSERT into live_births (ds,userid,`year`,gnda,live_births,inanimate_births,low_birth_weight) 
    VALUES ('".$ds."','".$uid."','".$year7."','".$gnd."','".$live_births."','".$inanimate_births."','".$low_birth_weight."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=7&&year=$year7';</script>";
    }
}


//maternal_death
if(isset($_POST['submit8']))
{ 
  foreach($_POST['year8'] as $key => $year8){
    $medical_officer = $_POST['medical_officer'][$key];
    $maternal_death = $_POST['maternal_death'][$key];
   
    $sql="INSERT into maternal_death (ds,userid,`year`,gnda,medical_officer,maternal_death) 
    VALUES ('".$ds."','".$uid."','".$year8."','".$gnd."','".$medical_officer."','".$maternal_death."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=8&&year=$year8';</script>";
    }
}

//rabies
if(isset($_POST['submit9']))
{ 
  foreach($_POST['year9'] as $key => $year9){
    $rabies_vaccine = $_POST['rabies_vaccine'][$key];
    $rabies_death = $_POST['rabies_death'][$key];
    
   
    $sql="INSERT into rabies (ds,userid,`year`,gnda,rabies_vaccine,rabies_death) 
    VALUES ('".$ds."','".$uid."','".$year9."','".$gnd."','".$rabies_vaccine."','".$rabies_death."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=9&&year=$year9';</script>";
    }
}


//dengue
if(isset($_POST['submit10']))
{ 
  foreach($_POST['year10'] as $key => $year10){
    $malaria = $_POST['malaria'][$key];
    $dengue = $_POST['dengue'][$key];
    $leprosy = $_POST['leprosy'][$key];
    $barawa = $_POST['barawa'][$key];
    $tuberculosis = $_POST['tuberculosis'][$key];
   
    $sql="INSERT into dengue (ds,userid,`year`,gnda,malaria,dengue,leprosy,barawa,tuberculosis) 
    VALUES ('".$ds."','".$uid."','".$year10."','".$gnd."','".$malaria."','".$dengue."','".$leprosy."','".$barawa."','".$tuberculosis."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=10&&year=$year10';</script>";
    }
}



//patient_reg_clinics
if(isset($_POST['submit11']))
{ 
  foreach($_POST['year11'] as $key => $year11){
    $diabetes = $_POST['diabetes'][$key];
    $high_blood_pressure = $_POST['high_blood_pressure'][$key];
    $cholesterol = $_POST['cholesterol'][$key];
    $kidney_disease = $_POST['kidney_disease'][$key];
    $cancer = $_POST['cancer'][$key];
    $other = $_POST['other'][$key];
   
    $sql="INSERT into patient_reg_clinics (ds,userid,`year`,gnda,diabetes,high_blood_pressure,cholesterol,kidney_disease,cancer,other) 
    VALUES ('".$ds."','".$uid."','".$year11."','".$gnd."','".$diabetes."','".$high_blood_pressure."','".$cholesterol."','".$kidney_disease."','".$cancer."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=11&&year=$year11';</script>";
    }
}



//social_diseases
if(isset($_POST['submit12']))
{ 
  foreach($_POST['year12'] as $key => $year12){
    $patient_tested = $_POST['patient_tested'][$key];
    $patient_absolute = $_POST['patient_absolute'][$key];
    
   
    $sql="INSERT into social_diseases (ds,userid,`year`,gnda,patient_tested,patient_absolute) 
    VALUES ('".$ds."','".$uid."','".$year12."','".$gnd."','".$patient_tested."','".$patient_absolute."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=12&&year=$year12';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================


//rural_service_centers
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $no_hospitalsu = $_POST['no_hospitalsu'][$key];
    $mohu = $_POST['mohu'][$key];
    $health_inspectorsu = $_POST['health_inspectorsu'][$key];
    $hofficersu = $_POST['hofficersu'][$key];
    $family_health_servicesu = $_POST['family_health_servicesu'][$key];
    $fofficersu = $_POST['fofficersu'][$key];
   
    $sql = "update rural_service_centers set no_hospitals='$no_hospitalsu',moh='$mohu',health_inspectors='$health_inspectorsu',hofficers='$hofficersu',family_health_services='$family_health_servicesu',fofficers='$fofficersu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=1&&year=$year1u';</script>";
    }
}



//gov_hospitals
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $hospital_nameu = $_POST['hospital_nameu'][$key];
    $no_patientsu = $_POST['no_patientsu'][$key];
    $wardu = $_POST['wardu'][$key];
    $bedu = $_POST['bedu'][$key];
    $doctorsu = $_POST['doctorsu'][$key];
    
    $sql = "update gov_hospitals set hospital_name='$hospital_nameu',no_patients='$no_patientsu',ward='$wardu',bed='$bedu',doctors='$doctorsu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=2&&year=$year2u';</script>";
    }
}


//quarantine_staff
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $specialist_doctoru = $_POST['specialist_doctoru'][$key];
    $medical_officeru = $_POST['medical_officeru'][$key];
    $dentistu = $_POST['dentistu'][$key];
    $assistant_medical_officeru = $_POST['assistant_medical_officeru'][$key];  
    $nursing_officeru = $_POST['nursing_officeru'][$key];
    $family_health_officeru = $_POST['family_health_officeru'][$key];
    $laboratory_technicianu = $_POST['laboratory_technicianu'][$key];
    $other_technicianu = $_POST['other_technicianu'][$key];  
    $pharmacistu = $_POST['pharmacistu'][$key];
    $drug_compoundu = $_POST['drug_compoundu'][$key];
    $establishment_staffu = $_POST['establishment_staffu'][$key];
    $caretakeru = $_POST['caretakeru'][$key];
    $general_hygieneu = $_POST['general_hygieneu'][$key];
    $other_employeesu = $_POST['other_employeesu'][$key];
    $otheru = $_POST['otheru'][$key];
    $approved_staffu = $_POST['approved_staffu'][$key];
    $deficit_numberu = $_POST['deficit_numberu'][$key];
   
    $sql = "update quarantine_staff set specialist_doctor='$specialist_doctoru',medical_officer='$medical_officeru',dentist='$dentistu',assistant_medical_officer='$assistant_medical_officeru',nursing_officer='$nursing_officeru',family_health_officer='$family_health_officeru',laboratory_technician='$laboratory_technicianu',other_technician='$other_technicianu',pharmacist='$pharmacistu',drug_compound='$drug_compoundu',establishment_staff='$establishment_staffu',caretaker='$caretakeru',general_hygiene='$general_hygieneu',other_employees='$other_employeesu',other='$otheru',approved_staff='$approved_staffu',deficit_number='$deficit_numberu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=3&&year=$year3u';</script>";
    }
}


//ayurvedic
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $ayurvedic_centeru = $_POST['ayurvedic_centeru'][$key];
    $ayurvedic_doctorsu = $_POST['ayurvedic_doctorsu'][$key];
    $other_staffu = $_POST['other_staffu'][$key];
    $patients_treatedu = $_POST['patients_treatedu'][$key];
    $wardsu = $_POST['wardsu'][$key];
    $bedu = $_POST['bedu'][$key];
    
    $sql = "update ayurvedic set ayurvedic_center='$ayurvedic_centeru',ayurvedic_doctors='$ayurvedic_doctorsu',other_staff='$other_staffu',patients_treated='$patients_treatedu',wards='$wardsu',bed='$bedu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=4&&year=$year4u';</script>";
    }
}



//rural_private_medical
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id = $_POST['id5'][$key];
    $local_sinhalau = $_POST['local_sinhalau'][$key];
    $ayurvedic_doctorsu = $_POST['ayurvedic_doctorsu'][$key];
    $western_medicineu = $_POST['western_medicineu'][$key];
    $otheru = $_POST['otheru'][$key];
   
    $sql = "update rural_private_medical set local_sinhala='$local_sinhalau',ayurvedic_doctors='$ayurvedic_doctorsu',western_medicine='$western_medicineu',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=5&&year=$year5u';</script>";
    }
}



//covid_patient
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id = $_POST['id6'][$key];
    $patient_femaleu = $_POST['patient_femaleu'][$key];
    $patient_maleu = $_POST['patient_maleu'][$key];
   
    $sql = "update covid_patient set patient_female='$patient_femaleu',patient_male='$patient_maleu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=6&&year=$year6u';</script>";
    }
}



//live_births
if(isset($_POST['update7']))
{ 
  foreach($_POST['year7u'] as $key => $year7u){
    $id = $_POST['id7'][$key];
    $live_birthsu = $_POST['live_birthsu'][$key];
    $inanimate_birthsu = $_POST['inanimate_birthsu'][$key];
    $low_birth_weightu = $_POST['low_birth_weightu'][$key];
   
    $sql = "update live_births set live_births='$live_birthsu',inanimate_births='$inanimate_birthsu',low_birth_weight='$low_birth_weightu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=7&&year=$year7u';</script>";
    }
}


//maternal_death
if(isset($_POST['update8']))
{ 
  foreach($_POST['year8u'] as $key => $year8u){
    $id = $_POST['id8'][$key];
    $medical_officeru = $_POST['medical_officeru'][$key];
    $maternal_deathu = $_POST['maternal_deathu'][$key];
   
    $sql = "update maternal_death set medical_officer='$medical_officeru',maternal_death='$maternal_deathu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=8&&year=$year8u';</script>";
    }
}


//rabies
if(isset($_POST['update9']))
{ 
  foreach($_POST['year9u'] as $key => $year9u){
    $id = $_POST['id9'][$key];
    $rabies_vaccineu = $_POST['rabies_vaccineu'][$key];
    $rabies_deathu = $_POST['rabies_deathu'][$key];
   
    $sql = "update rabies set rabies_vaccine='$rabies_vaccineu',rabies_death='$rabies_deathu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=9&&year=$year9u';</script>";
    }
}


//dengue
if(isset($_POST['update10']))
{ 
  foreach($_POST['year10u'] as $key => $year10u){
    $id = $_POST['id10'][$key];
    $malariau = $_POST['malariau'][$key];
    $dengueu = $_POST['dengueu'][$key];
    $leprosyu = $_POST['leprosyu'][$key];
    $barawau = $_POST['barawau'][$key];
    $tuberculosisu = $_POST['tuberculosisu'][$key];
    
    $sql = "update dengue set malaria='$malariau',dengue='$dengueu',leprosy='$leprosyu',barawa='$barawau',tuberculosis='$tuberculosisu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=10&&year=$year10u';</script>";
    }
}



//patient_reg_clinics
if(isset($_POST['update11']))
{ 
  foreach($_POST['year11u'] as $key => $year11u){
    $id = $_POST['id11'][$key];
    $diabetesu = $_POST['diabetesu'][$key];
    $high_blood_pressureu = $_POST['high_blood_pressureu'][$key];
    $cholesterolu = $_POST['cholesterolu'][$key];
    $kidney_diseaseu = $_POST['kidney_diseaseu'][$key];
    $canceru = $_POST['canceru'][$key];
    $otheru = $_POST['otheru'][$key];
   
    $sql = "update patient_reg_clinics set diabetes='$diabetesu',high_blood_pressure='$high_blood_pressureu',cholesterol='$cholesterolu',kidney_disease='$kidney_diseaseu',cancer='$canceru',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=11&&year=$year11u';</script>";
    }
}



//social_diseases
if(isset($_POST['update12']))
{ 
  foreach($_POST['year12u'] as $key => $year12u){
    $id = $_POST['id12'][$key];
    $patient_testedu = $_POST['patient_testedu'][$key];
    $patient_absoluteu = $_POST['patient_absoluteu'][$key];
   
    $sql = "update social_diseases set patient_tested='$patient_testedu',patient_absolute='$patient_absoluteu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='health.php?type=12&&year=$year12u';</script>";
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
                  <i class="mdi mdi-stethoscope"></i>
                </span> සෞඛ්‍ය

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
                            <center><a class="dropdown-item" href="health.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="health.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="health.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="health.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="health.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="health.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="health.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="health.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="health.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="health.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="health.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="health.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='health.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය සෞඛ්‍ය සේවා මධ්‍යස්ථාන</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල්</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල් වල රෝග නිරෝධායන කාර්යය මණ්ඩලය</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ආයුර්වේද වෛද්‍ය පහසුකම්</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය පුද්ගලික වෛද්‍ය සේවා මධ්‍යස්ථාන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස තුල වාර්තා වූ කොවිඩ් රෝගීන්</a>"; ?> 

                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>රජයේ රෝහල් වල සිදුවූ සජීවී,අජීවී,අඩු බර දරු උපත් සංඛ්‍යාව </a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස අනුව මාතෘ මරණ</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ජලභීතිකා රෝගය පිළිබද තොරතුරු </a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>මැලේරියා,ඩෙංගු,ලාදුරු,බරවා හා ක්ෂය රෝගීන්  </a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=11&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>සායනවල ලියාපදිංචි බෝ නොවන රෝගීන්</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='health.php?type=12&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>සමාජ රෝග</a>"; ?> 

                </div>
            </div>

        </div>

        </form>
            


<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය සෞඛ්‍ය සේවා මධ්‍යස්තාන ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){

  ?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය සෞඛ්‍ය සේවා මධ්‍යස්ථාන </h4>


<?php 

  $q3 =$conn->query("SELECT * from rural_service_centers WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $no_hospitals=$row['no_hospitals'];
    $moh=$row['moh'];
    $health_inspectors=$row['health_inspectors'];
    $hofficers=$row['hofficers']; 
    $family_health_services=$row['family_health_services']; 
    $fofficers=$row['fofficers'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රෝහල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_hospitalsu[]" value='<?php echo $no_hospitals; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mohu[]" value='<?php echo $moh; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මහජන සෞඛ්‍ය පරීක්ෂක කොට්ඨාස ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="health_inspectorsu[]" value='<?php echo $health_inspectors; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නිලධාරීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hofficersu[]" value='<?php echo $hofficers; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පවුල් සෞඛ්‍ය සේවිකා කොට්ඨාස ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="family_health_servicesu[]" value='<?php echo $family_health_services; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නිලධාරීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="fofficersu[]" value='<?php echo $fofficers; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය සෞඛ්‍ය සේවා මධ්‍යස්තාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රෝහල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_hospitals[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="moh[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මහජන සෞඛ්‍ය පරීක්ෂක කොට්ඨාස ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="health_inspectors[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නිලධාරීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hofficers[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පවුල් සෞඛ්‍ය සේවිකා ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="family_health_services[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නිලධාරීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="fofficers[]" >
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


              
<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල්================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල්</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from gov_hospitals WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $hospital_name=$row['hospital_name'];
                        $no_patients=$row['no_patients'];
                        $ward=$row['ward'];
                        $bed=$row['bed'];
                        $doctors=$row['doctors'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රෝහලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hospital_nameu[]" value='<?php echo $hospital_name; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ප්‍රතිකාර ලැබූ රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_patientsu[]" value='<?php echo $no_patients; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වාට්ටු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="wardu[]" value='<?php echo $ward; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඇදන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bedu[]" value='<?php echo $bed; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෛද්‍යවරුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="doctorsu[]" value='<?php echo $doctors; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල්</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රෝහලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="hospital_name[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ප්‍රතිකාර ලැබූ රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_patients[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වාට්ටු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ward[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඇදන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bed[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෛද්‍යවරුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="doctors[]" >
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



<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල් වල රෝග නිරෝධායන කාර්යය මණ්ඩලය================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල් වල රෝග නිරෝධායන කාර්යය මණ්ඩලය</h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from quarantine_staff WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $specialist_doctor=$row['specialist_doctor'];
                        $medical_officer=$row['medical_officer'];
                        $dentist=$row['dentist'];
                        $assistant_medical_officer=$row['assistant_medical_officer'];
                        $nursing_officer=$row['nursing_officer'];
                        $family_health_officer=$row['family_health_officer'];
                        $laboratory_technician=$row['laboratory_technician'];
                        $other_technician=$row['other_technician'];
                        $pharmacist=$row['pharmacist'];
                        $drug_compound=$row['drug_compound'];
                        $establishment_staff=$row['establishment_staff'];
                        $caretaker=$row['caretaker'];
                        $general_hygiene=$row['general_hygiene'];
                        $other_employees=$row['other_employees'];
                        $other=$row['other'];
                        $approved_staff=$row['approved_staff'];
                        $deficit_number=$row['deficit_number'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">විශේෂ වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="specialist_doctoru[]" value='<?php echo $specialist_doctor; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="medical_officeru[]" value='<?php echo $medical_officer; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දන්ත වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dentistu[]" value='<?php echo $dentist; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සහකාර/ලියාපදිංචි වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="assistant_medical_officeru[]" value='<?php echo $assistant_medical_officer; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">හෙද/හෙදි නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nursing_officeru[]" value='<?php echo $nursing_officer; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රෝහල් පවුල් සෞඛ්‍ය සේවා නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="family_health_officeru[]" value='<?php echo $family_health_officer; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රසායනාගාර කාර්මික ශිල්පී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="laboratory_technicianu[]" value='<?php echo $laboratory_technician; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත් කාර්මික ශිල්පීන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_technicianu[]" value='<?php echo $other_technician; ?>'>
                        </div>

                      </div>

                     
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඖෂධවේදී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pharmacistu[]" value='<?php echo $pharmacist; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඖෂධ සං‍යෝජක</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="drug_compoundu[]" value='<?php echo $drug_compound; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයතන කාර්යය මණ්ඩලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="establishment_staffu[]" value='<?php echo $establishment_staff; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">උපස්තායක/උපස්තායිකා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="caretakeru[]" value='<?php echo $caretaker; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">  
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සාමාන්‍ය සනීපාරක්ෂක කම්කරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="general_hygieneu[]" value='<?php echo $general_hygiene; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අනෙකුත් සුළු සේවක</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_employeesu[]" value='<?php echo $other_employees; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අනුමත කාර්යය මණ්ඩලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="approved_staffu[]" value='<?php echo $approved_staff; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">හිග සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="deficit_numberu[]" value='<?php echo $deficit_number; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් රජයේ රෝහල් වල රෝග නිරෝධායන කාර්යය මණ්ඩලය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">විශේෂ වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="specialist_doctor[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="medical_officer[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දන්ත වෛද්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dentist[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සහකාර/ලියාපදිංචි වෛද්‍ය නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="assistant_medical_officer[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">හෙද/හෙදි නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nursing_officer[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රෝහල් පවුල් සෞඛ්‍ය සේවා නිලධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="family_health_officer[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රසායනාගාර කාර්මික ශිල්පීන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="laboratory_technician[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත් කාර්මික ශිල්පීන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_technician[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඖෂධවේදී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pharmacist[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඖෂධ සං‍යෝජක</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="drug_compound[]" >
                        </div>

                      </div>
                     
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයතන කාර්යය මණ්ඩලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="establishment_staff[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">උපස්තායක/උපස්තායිකා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="caretaker[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සාමාන්‍ය සනීපාරක්ෂක කම්කරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="general_hygiene[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අනෙකුත් සුළු සේවක</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_employees[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අනුමත කාර්යය මණ්ඩලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="approved_staff[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">හිග සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="deficit_number[]" >
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





<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ආයුර්වේද වෛද්‍ය පහසුකම්================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ආයුර්වේද වෛද්‍ය පහසුකම්</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from ayurvedic WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $ayurvedic_center=$row['ayurvedic_center'];
                          $ayurvedic_doctors=$row['ayurvedic_doctors'];
                          $other_staff=$row['other_staff'];
                          $patients_treated=$row['patients_treated'];
                          $wards=$row['wards'];
                          $bed=$row['bed'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයුර්වේද මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ayurvedic_centeru[]" value='<?php echo $ayurvedic_center; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආයුර්වේද වෛද්‍යවරුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ayurvedic_doctorsu[]" value='<?php echo $ayurvedic_doctors; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අනෙකුත් කාර්යය මණ්ඩලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_staffu[]" value='<?php echo $other_staff; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ප්‍රතිකාර ලැබූ රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patients_treatedu[]" value='<?php echo $patients_treated; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වාට්ටු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="wardsu[]" value='<?php echo $wards; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඇදන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bedu[]" value='<?php echo $bed; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ආයුර්වේද වෛද්‍ය පහසුකම්</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයුර්වේද මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ayurvedic_center[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආයුර්වේද වෛද්‍යවරුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ayurvedic_doctors[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අනෙකුත් කාර්යය මණ්ඩලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_staff[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ප්‍රතිකාර ලැබූ රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patients_treated[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වාට්ටු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="wards[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඇදන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="bed[]" >
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




<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය පුද්ගලික වෛද්‍ය සේවා මධ්‍යස්තාන================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය පුද්ගලික වෛද්‍ය සේවා මධ්‍යස්ථාන</h4>

                    <?php
    $q3 =$conn->query("SELECT * from rural_private_medical WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $local_sinhala=$row['local_sinhala'];
      $ayurvedic_doctors=$row['ayurvedic_doctors'];
      $western_medicine=$row['western_medicine'];
      $other=$row['other'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලියාපදිංචි වෛද්‍ය සේවා - දේශීය(සිංහල)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="local_sinhalau[]" value='<?php echo $local_sinhala; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයුර්වේද වෛද්‍ය</label>

                          <div class="col-sm-4">
                          <input type="text" class="form-control" name="ayurvedic_doctorsu[]" value='<?php echo $ayurvedic_doctors; ?>'>
                          </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බටහිර වෛද්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="western_medicineu[]" value='<?php echo $western_medicine; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් ග්‍රාමීය පුද්ගලික වෛද්‍ය සේවා මධ්‍යස්ථාන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලියාපදිංචි වෛද්‍ය සේවා - දේශීය(සිංහල)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="local_sinhala[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආයුර්වේද වෛද්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ayurvedic_doctors[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බටහිර වෛද්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="western_medicine[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
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




<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස තුල වාර්තා වූ කොවිඩ් රෝගීන්================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස තුල වාර්තා වූ කොවිඩ් රෝගීන්</h4>

                    <?php
    $q3 =$conn->query("SELECT * from covid_patient WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $patient_female=$row['patient_female'];
      $patient_male=$row['patient_male'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වාර්තා වූ රෝගීන් - ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_femaleu[]" value='<?php echo $patient_female; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_maleu[]" value='<?php echo $patient_male; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස තුල වාර්තා වූ කොවිඩ් රෝගීන්</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වාර්තා වූ රෝගීන් - ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_female[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_male[]" >
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



<!-- ===========================රජයේ රෝහල් වල සිදුවූ සජීවී,අජීවී,අඩු බර දරු උපත් සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='7'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">රජයේ රෝහල් වල සිදුවූ සජීවී,අජීවී,අඩු බර දරු උපත් සංඛ්‍යාව</h4>

                    <?php
    $q3 =$conn->query("SELECT * from live_births WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $live_births=$row['live_births'];
      $inanimate_births=$row['inanimate_births'];
      $low_birth_weight=$row['low_birth_weight'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සජීවී උපත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="live_birthsu[]" value='<?php echo $live_births; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අජීවී උපත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="inanimate_birthsu[]" value='<?php echo $inanimate_births; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අඩු බර දරු උපත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="low_birth_weightu[]" value='<?php echo $low_birth_weight; ?>'>
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
                    <h4 class="card-title">රජයේ රෝහල් වල සිදුවූ සජීවී,අජීවී,අඩු බර දරු උපත් සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සජීවී උපත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="live_births[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අජීවී උපත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="inanimate_births[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අඩු බර දරු උපත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="low_birth_weight[]" >
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




<!-- =========================== සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස අනුව මාතෘ මරණ ================================== -->
<?php 
$type=$_GET['type'];
if($type=='8'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස අනුව මාතෘ මරණ </h4>

                    <?php
    $q3 =$conn->query("SELECT * from maternal_death WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $medical_officer=$row['medical_officer'];
      $maternal_death=$row['maternal_death'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාසය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="medical_officeru[]" value='<?php echo $medical_officer; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මාතෘ මරණ සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="maternal_deathu[]" value='<?php echo $maternal_death; ?>'>
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
                    <h4 class="card-title"> සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාස අනුව මාතෘ මරණ </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සෞඛ්‍ය වෛද්‍ය නිලධාරී කොට්ඨාසය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="medical_officer[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මාතෘ මරණ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="maternal_death[]" >
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





<!-- ===========================ජලභීතිකා රෝගය පිළිබද තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='9'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ජලභීතිකා රෝගය පිළිබද තොරතුරු</h4>

                    <?php
    $q3 =$conn->query("SELECT * from rabies WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $rabies_vaccine=$row['rabies_vaccine'];
      $rabies_death=$row['rabies_death'];
      ?>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජලභීතිකා එන්නත ලබාගත් පුද්ගලයින් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rabies_vaccineu[]" value='<?php echo $rabies_vaccine; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ජලභීතිකා මිය ගිය රෝගින් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rabies_deathu[]" value='<?php echo $rabies_death; ?>'>
                        </div>

                      </div>
                      
                    
                      <?php echo "<input type='hidden' id='custId' name='year9u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id9[]' value='$id'>"; ?>
                    </div>

<?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update9" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>
<?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ජලභීතිකා රෝගය පිළිබද තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">          

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජලභීතිකා එන්නත ලබාගත් පුද්ගලයින් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rabies_vaccine[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ජලභීතිකා මිය ගිය රෝගීන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rabies_death[]" >
                        </div>

                      </div>          
                    
                      <?php echo "<input type='hidden' id='custId' name='year9[]' value='$year'>"; ?>
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit9" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } }?>



              
<!-- ===========================මැලේරියා,ඩෙංගු,ලාදුරු,බරවා හා ක්ෂය රෝගීන් ================================== -->
<?php 
$type=$_GET['type'];
if($type=='10'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මැලේරියා,ඩෙංගු,ලාදුරු,බරවා හා ක්ෂය රෝගීන් </h4>

                    <?php
    $q3 =$conn->query("SELECT * from dengue WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $malaria=$row['malaria'];
      $dengue=$row['dengue'];
      $leprosy=$row['leprosy'];
      $barawa=$row['barawa'];
      $tuberculosis=$row['tuberculosis'];
      ?>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
       
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මැලේරියා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="malariau[]" value='<?php echo $malaria; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඩෙංගු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dengueu[]" value='<?php echo $dengue; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලාදුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="leprosyu[]" value='<?php echo $leprosy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බරවා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="barawau[]" value='<?php echo $barawa; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ක්ෂයරෝගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tuberculosisu[]" value='<?php echo $tuberculosis; ?>'>
                        </div>

                       
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year10u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id10[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update10" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

<?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මැලේරියා,ඩෙංගු,ලාදුරු,බරවා හා ක්ෂය රෝගීන් </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මැලේරියා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="malaria[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඩෙංගු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dengue[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලාදුරු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="leprosy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බරවා</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="barawa[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ක්ෂයරෝගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tuberculosis[]" >
                        </div>                 

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year10[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit10" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } } ?>



<!-- =========================== සායනවල ලියාපදිංචි බෝ නොවන රෝගීන්  ================================== -->
<?php 
$type=$_GET['type'];
if($type=='11'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> සායනවල ලියාපදිංචි බෝ නොවන රෝගීන්  </h4>

                    <?php
    $q3 =$conn->query("SELECT * from patient_reg_clinics WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $diabetes=$row['diabetes'];
      $high_blood_pressure=$row['high_blood_pressure'];
      $cholesterol=$row['cholesterol'];
      $kidney_disease=$row['kidney_disease'];
      $cancer=$row['cancer'];
      $other=$row['other'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">දියවැඩියාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="diabetesu[]" value='<?php echo $diabetes; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">අධික රුධිර පීඩනය</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="high_blood_pressureu[]" value='<?php echo $high_blood_pressure; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">කොලොස්ටරෝල්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="cholesterolu[]" value='<?php echo $cholesterol; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">වකුගඩු රෝග</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="kidney_diseaseu[]" value='<?php echo $kidney_disease; ?>'>
                        </div>

                      </div>
                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පිළිකා</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="canceru[]" value='<?php echo $cancer; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">වෙනත් රෝග</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
                        </div>

                      </div>

                    
                      <?php echo "<input type='hidden' id='custId' name='year11u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id11[]' value='$id'>"; ?>
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update11" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

<?php } else { ?>

              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> සායනවල ලියාපදිංචි බෝ නොවන රෝගීන්  </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">දියවැඩියාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="diabetes[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">අධික රුධිර පීඩනය</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="high_blood_pressure[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">කොලොස්ටරෝල්</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="cholesterol[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">වකුගඩු රෝග</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="kidney_disease[]" >
                        </div>

                      </div>
                     

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පිළිකා</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="cancer[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">වෙනත් රෝග</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                      </div>
                    
                      <?php echo "<input type='hidden' id='custId' name='year11[]' value='$year'>"; ?>
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit11" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } } ?>





<!-- ===========================සමාජ රෝග ================================== -->
<?php 
$type=$_GET['type'];
if($type=='12'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සමාජ රෝග </h4>

                    <?php
    $q3 =$conn->query("SELECT * from social_diseases WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $patient_tested=$row['patient_tested'];
      $patient_absolute=$row['patient_absolute'];

      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පරීක්ෂා කරන ලද රෝගීන්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_testedu[]" value='<?php echo $patient_tested; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නියත රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_absoluteu[]" value='<?php echo $patient_absolute; ?>'>
                        </div>

                      </div>
              
                      <?php echo "<input type='hidden' id='custId' name='year12u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id12[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update12" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සමාජ රෝග </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පරීක්ෂා කරන ලද රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_tested[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නියත රෝගීන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="patient_absolute[]" >
                        </div>

                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year12[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit12" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

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