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
// school_information 
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $school_name = $_POST['school_name'][$key];
    $national_schools = $_POST['national_schools'][$key];
    $provincial_council_schools = $_POST['provincial_council_schools'][$key];
    $oneab = $_POST['oneab'][$key];
    $onec = $_POST['onec'][$key];
    $two = $_POST['two'][$key];
    $three = $_POST['three'][$key];
    $private_schools = $_POST['private_schools'][$key];
    $sinhala = $_POST['sinhala'][$key];
    $tamil = $_POST['tamil'][$key];
    $english = $_POST['english'][$key];
    $no_students = $_POST['no_students'][$key];
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into school_information (ds,userid,`year`,school_name,national_schools,provincial_council_schools,oneab,onec,two,three,private_schools,sinhala,tamil,english,no_students,no_teachers,gnda) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$school_name."','".$national_schools."','".$provincial_council_schools."','".$oneab."','".$onec."','".$two."','".$three."','".$private_schools."','".$sinhala."','".$tamil."','".$english."','".$no_students."','".$no_teachers."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=1&&year=$year1';</script>";
    }
}



// teachers_edu_level
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $school_name = $_POST['school_name'][$key];
    $graduate = $_POST['graduate'][$key];
    $training = $_POST['training'][$key];
    $untrained = $_POST['untrained'][$key];
    $other = $_POST['other'][$key];

    $sql="INSERT into teachers_edu_level (ds,userid,`year`,school_name,graduate,training,untrained,other,gnda) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$school_name."','".$graduate."','".$training."','".$untrained."','".$other."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=2&&year=$year2';</script>";
    }
}




// teachers_medium_instruction
if(isset($_POST['submit3']))
{ 
  foreach($_POST['year3'] as $key => $year3){
  
    $school_name = $_POST['school_name'][$key];
    $sinhala = $_POST['sinhala'][$key];
    $tamil = $_POST['tamil'][$key];
    $sinhala_english = $_POST['sinhala_english'][$key];
    $english_tamil = $_POST['english_tamil'][$key];

    $sql="INSERT into teachers_medium_instruction (ds,userid,`year`,school_name,sinhala,tamil,sinhala_english,english_tamil,gnda) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$school_name."','".$sinhala."','".$tamil."','".$sinhala_english."','".$english_tamil."','".$gnda."')";
    $insert = $conn->query($sql);
    }
   
    if($insert)
    {  
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=3&&year=$year3';</script>";
    }
}


// students_medium_instruction
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    
    $school_name = $_POST['school_name'][$key];
    $sinhala_female = $_POST['sinhala_female'][$key];
    $sinhala_male = $_POST['sinhala_male'][$key];
    $tamil_female = $_POST['tamil_female'][$key];
    $tamil_male = $_POST['tamil_male'][$key];
    $english_female = $_POST['english_female'][$key];
    $english_male = $_POST['english_male'][$key];

    $sql="INSERT into students_medium_instruction (ds,userid,`year`,school_name,sinhala_female,sinhala_male,tamil_female,tamil_male,english_female,english_male,gnda) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$school_name."','".$sinhala_female."','".$sinhala_male."','".$tamil_female."','".$tamil_male."','".$english_female."','".$english_male."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=4&&year=$year4';</script>";
    }
}


// students_grades_studied
if(isset($_POST['submit5']))
{ 
  foreach($_POST['year5'] as $key => $year5){
   
    $school_name = $_POST['school_name'][$key];
    $one_five = $_POST['one_five'][$key];
    $six_ten = $_POST['six_ten'][$key];
    $ol = $_POST['ol'][$key];
    $al = $_POST['al'][$key];
    $special_education_units = $_POST['special_education_units'][$key];

    $sql="INSERT into students_grades_studied (ds,userid,`year`,school_name,one_five,six_ten,ol,al,special_education_units,gnda) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$school_name."','".$one_five."','".$six_ten."','".$ol."','".$al."','".$special_education_units."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=5&&year=$year5';</script>";
    }
}



// pirivena
if(isset($_POST['submit6']))
{ 
  foreach($_POST['year6'] as $key => $year6){
    $pirivena_name = $_POST['pirivena_name'][$key];
    $no_students = $_POST['no_students'][$key]; 
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into pirivena (ds,userid,`year`,pirivena_name,no_students,no_teachers,gnda) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$pirivena_name."','".$no_students."','".$no_teachers."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=6&&year=$year6';</script>";
    }
}


// preschool
if(isset($_POST['submit7']))
{ 
  foreach($_POST['year7'] as $key => $year7){
    
    $preschool_name = $_POST['preschool_name'][$key];
    $regno = $_POST['regno'][$key];
    $no_students = $_POST['no_students'][$key];

    $sql="INSERT into preschool (ds,userid,`year`,preschool_name,regno,no_students,gnda) 
    VALUES ('".$ds."','".$uid."','".$year7."','".$preschool_name."','".$regno."','".$no_students."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=7&&year=$year7';</script>";
    }
}



// vocational_center
if(isset($_POST['submit8']))
{ 
  foreach($_POST['year8'] as $key => $year8){
    $center_name = $_POST['center_name'][$key];
    $addres = $_POST['addres'][$key];
    $tpno = $_POST['tpno'][$key];
    $course_name = $_POST['course_name'][$key];
    $no_students = $_POST['no_students'][$key];
    $no_teachers = $_POST['no_teachers'][$key];

    $sql="INSERT into vocational_center (ds,userid,`year`,center_name,addres,tpno,course_name,no_students,no_teachers,gnda) 
    VALUES ('".$ds."','".$uid."','".$year8."','".$center_name."','".$addres."','".$tpno."','".$course_name."','".$no_students."','".$no_teachers."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=8&&year=$year8';</script>";
    }
}


// library
if(isset($_POST['submit9']))
{ 
  foreach($_POST['year9'] as $key => $year9){
   
    $addres = $_POST['addres'][$key];
    $tpno = $_POST['tpno'][$key];

    $sql="INSERT into library (ds,userid,`year`,addres,tpno,gnda) 
    VALUES ('".$ds."','".$uid."','".$year9."','".$addres."','".$tpno."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=9&&year=$year9';</script>";
    }
}


// other_educational_institutions
if(isset($_POST['submit10']))
{ 
  foreach($_POST['year10'] as $key => $year10){
  
    $institute_name = $_POST['institute_name'][$key];
    $addres = $_POST['addres'][$key];
    $tpno = $_POST['tpno'][$key];

    $sql="INSERT into other_educational_institutions (ds,userid,`year`,institute_name,addres,tpno,gnda) 
    VALUES ('".$ds."','".$uid."','".$year10."','".$institute_name."','".$addres."','".$tpno."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=10&&year=$year10';</script>";
    }
}


// passed_examination
if(isset($_POST['submit11']))
{ 
  foreach($_POST['year11'] as $key => $year11){
    $gradefive_exame_appearances = $_POST['gradefive_exame_appearances'][$key];
    $cutoffmarks_applicants = $_POST['cutoffmarks_applicants'][$key];
    $ol_appearances = $_POST['ol_appearances'][$key];
    $al_qualified = $_POST['al_qualified'][$key];
    $al_appearances = $_POST['al_appearances'][$key];

    $sql="INSERT into passed_examination (ds,userid,`year`,gradefive_exame_appearances,cutoffmarks_applicants,ol_appearances,al_qualified,al_appearances,gnda) 
    VALUES ('".$ds."','".$uid."','".$year11."','".$gradefive_exame_appearances."','".$cutoffmarks_applicants."','".$ol_appearances."','".$al_qualified."','".$al_appearances."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=11&&year=$year11';</script>";
    }
}


// admission_universities
if(isset($_POST['submit12']))
{ 
  foreach($_POST['year12'] as $key => $year12){
    $university = $_POST['university'][$key];
    $twothousand_nineteen_female = $_POST['twothousand_nineteen_female'][$key];
    $twothousand_nineteen_male = $_POST['twothousand_nineteen_male'][$key];
    $twothousand_twenty_female = $_POST['twothousand_twenty_female'][$key];
    $twothousand_twenty_male = $_POST['twothousand_twenty_male'][$key];
    $twothousand_twentyone_female = $_POST['twothousand_twentyone_female'][$key];
    $twothousand_twentyone_male = $_POST['twothousand_twentyone_male'][$key];

    $sql="INSERT into admission_universities (ds,userid,`year`,university,twothousand_nineteen_female,twothousand_nineteen_male,twothousand_twenty_female,twothousand_twenty_male,twothousand_twentyone_female,twothousand_twentyone_male,gnda) 
    VALUES ('".$ds."','".$uid."','".$year12."','".$university."','".$twothousand_nineteen_female."','".$twothousand_nineteen_male."','".$twothousand_twenty_female."','".$twothousand_twenty_male."','".$twothousand_twentyone_female."','".$twothousand_twentyone_male."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=12&&year=$year12';</script>";
    }
}


// special_educational_institutions
if(isset($_POST['submit13']))
{ 
  foreach($_POST['year13'] as $key => $year13){
    $government = $_POST['government'][$key];
    $nogov_student = $_POST['nogov_student'][$key];
    $semi_government = $_POST['semi_government'][$key];
    $nosemi_student = $_POST['nosemi_student'][$key];
    $private = $_POST['private'][$key];
    $nopriv_student = $_POST['nopriv_student'][$key];

    $sql="INSERT into special_educational_institutions (ds,userid,`year`,government,nogov_student,semi_government,nosemi_student,`private`,nopriv_student,gnda) 
    VALUES ('".$ds."','".$uid."','".$year13."','".$government."','".$nogov_student."','".$semi_government."','".$nosemi_student."','".$private."','".$nopriv_student."','".$gnda."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=13&&year=$year13';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================


// school_information 
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id1 = $_POST['id1'][$key];
   
    $school_nameu = $_POST['school_nameu'][$key];
    $national_schoolsu = $_POST['national_schoolsu'][$key];
    $provincial_council_schoolsu = $_POST['provincial_council_schoolsu'][$key];
    $oneabu = $_POST['oneabu'][$key];
    $onecu = $_POST['onecu'][$key];
    $twou = $_POST['twou'][$key];
    $threeu = $_POST['threeu'][$key];
    $private_schoolsu = $_POST['private_schoolsu'][$key];
    $sinhalau = $_POST['sinhalau'][$key];
    $tamilu = $_POST['tamilu'][$key];
    $englishu = $_POST['englishu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];  
    $no_teachersu = $_POST['no_teachersu'][$key];

    $sql1 = "update school_information set school_name='$school_nameu',national_schools='$national_schoolsu',provincial_council_schools='$provincial_council_schoolsu',oneab='$oneabu',onec='$onecu',two='$twou',three='$threeu',private_schools='$private_schoolsu',sinhala='$sinhalau',tamil='$tamilu',english='$englishu',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id1'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=1&&year=$year1u';</script>";
    }
}


// teachers_edu_level
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id2 = $_POST['id2'][$key];
   
    $school_nameu = $_POST['school_nameu'][$key];
    $graduateu = $_POST['graduateu'][$key];
    $trainingu = $_POST['trainingu'][$key];
    $untrainedu = $_POST['untrainedu'][$key];
    $otheru = $_POST['otheru'][$key];

    $sql1 = "update teachers_edu_level set school_name='$school_nameu',graduate='$graduateu',training='$trainingu',untrained='$untrainedu',other='$otheru' where id='$id2'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=2&&year=$year2u';</script>";
    }
}


// teachers_medium_instruction
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id3 = $_POST['id3'][$key];
   
    $school_nameu = $_POST['school_nameu'][$key];
    $sinhalau = $_POST['sinhalau'][$key];
    $tamilu = $_POST['tamilu'][$key];
    $sinhala_englishu = $_POST['sinhala_englishu'][$key];
    $english_tamilu = $_POST['english_tamilu'][$key];

    $sql1 = "update teachers_medium_instruction set school_name='$school_nameu',sinhala='$sinhalau',tamil='$tamilu',sinhala_english='$sinhala_englishu',english_tamil='$english_tamilu' where id='$id3'";
    $update = $conn->query($sql1);
    }
   
    if($update)
    {  
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=3&&year=$year3u';</script>";
    }
}


// students_medium_instruction
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id4 = $_POST['id4'][$key];
    
    $school_nameu = $_POST['school_nameu'][$key];
    $sinhala_femaleu = $_POST['sinhala_femaleu'][$key];
    $sinhala_maleu = $_POST['sinhala_maleu'][$key];
    $tamil_femaleu = $_POST['tamil_femaleu'][$key];
    $tamil_maleu = $_POST['tamil_maleu'][$key];
    $english_femaleu = $_POST['english_femaleu'][$key];
    $english_maleu = $_POST['english_maleu'][$key];

    $sql1 = "update students_medium_instruction set school_name='$school_nameu',sinhala_female='$sinhala_femaleu',sinhala_male='$sinhala_maleu',tamil_female='$tamil_femaleu',tamil_male='$tamil_maleu',english_female='$english_femaleu',english_male='$english_maleu' where id='$id4'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=4&&year=$year4u';</script>";
    }
}



// students_grades_studied
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id5 = $_POST['id5'][$key];
    
    $school_nameu = $_POST['school_nameu'][$key];
    $one_fiveu = $_POST['one_fiveu'][$key];
    $six_tenu = $_POST['six_tenu'][$key];
    $olu = $_POST['olu'][$key];
    $alu = $_POST['alu'][$key];
    $special_education_unitsu = $_POST['special_education_unitsu'][$key];

    $sql1 = "update students_grades_studied set school_name='$school_nameu',one_five='$one_fiveu',six_ten='$six_tenu',ol='$olu',al='$alu',special_education_units='$special_education_unitsu' where id='$id5'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=5&&year=$year5u';</script>";
    }
}


// pirivena
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id6 = $_POST['id6'][$key];
   
    $pirivena_nameu = $_POST['pirivena_nameu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];
    $no_teachersu = $_POST['no_teachersu'][$key];

    $sql1 = "update pirivena set pirivena_name='$pirivena_nameu',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id6'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=6&&year=$year6u';</script>";
    }
}



// preschool
if(isset($_POST['update7']))
{ 
  foreach($_POST['year7u'] as $key => $year7u){
    $id7 = $_POST['id7'][$key];
    
    $preschool_nameu = $_POST['preschool_nameu'][$key];
    $regnou = $_POST['regnou'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];

    $sql1 = "update preschool set preschool_name='$preschool_nameu',regno='$regnou',no_students='$no_studentsu' where id='$id7'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=7&&year=$year7u';</script>";
    }
}



// vocational_center
if(isset($_POST['update8']))
{ 
  foreach($_POST['year8u'] as $key => $year8u){
    $id8 = $_POST['id8'][$key];
    
    $center_nameu = $_POST['center_nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $tpnou = $_POST['tpnou'][$key];
    $course_nameu = $_POST['course_nameu'][$key];
    $no_studentsu = $_POST['no_studentsu'][$key];
    $no_teachersu = $_POST['no_teachersu'][$key];

    $sql1 = "update vocational_center set center_name='$center_nameu',addres='$addresu',tpno='$tpnou',course_name='$course_nameu',no_students='$no_studentsu',no_teachers='$no_teachersu' where id='$id8'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=8&&year=$year8u';</script>";
    }
}



// library
if(isset($_POST['update9']))
{ 
  foreach($_POST['year9u'] as $key => $year9u){
    $id9 = $_POST['id9'][$key];
    
    $addresu = $_POST['addresu'][$key];
    $tpnou = $_POST['tpnou'][$key];

    $sql1 = "update library set addres='$addresu',tpno='$tpnou' where id='$id9'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=9&&year=$year9u';</script>";
    }
}



// other_educational_institutions
if(isset($_POST['update10']))
{ 
  foreach($_POST['year10u'] as $key => $year10u){
    $id10 = $_POST['id10'][$key];
    
    $institute_nameu = $_POST['institute_nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $tpnou = $_POST['tpnou'][$key];

    $sql1 = "update other_educational_institutions set institute_name='$institute_nameu',addres='$addresu',tpno='$tpnou' where id='$id10'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=10&&year=$year10u';</script>";
    }
}



// passed_examination
if(isset($_POST['update11']))
{ 
  foreach($_POST['year11u'] as $key => $year11u){
    $id11 = $_POST['id11'][$key];
    $gradefive_exame_appearancesu = $_POST['gradefive_exame_appearancesu'][$key];
    $cutoffmarks_applicantsu = $_POST['cutoffmarks_applicantsu'][$key];
    $ol_appearancesu = $_POST['ol_appearancesu'][$key];
    $al_qualifiedu = $_POST['al_qualifiedu'][$key];
    $al_appearancesu = $_POST['al_appearancesu'][$key];

    $sql1 = "update passed_examination set gradefive_exame_appearances='$gradefive_exame_appearancesu',cutoffmarks_applicants='$cutoffmarks_applicantsu',ol_appearances='$ol_appearancesu',al_qualified='$al_qualifiedu',al_appearances='$al_appearancesu' where id='$id11'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=11&&year=$year11u';</script>";
    }
}



// admission_universities
if(isset($_POST['update12']))
{ 
  foreach($_POST['year12u'] as $key => $year12u){
    $id12 = $_POST['id12'][$key];
    $universityu = $_POST['universityu'][$key];
    $twothousand_nineteen_femaleu = $_POST['twothousand_nineteen_femaleu'][$key];
    $twothousand_nineteen_maleu = $_POST['twothousand_nineteen_maleu'][$key];
    $twothousand_twenty_femaleu = $_POST['twothousand_twenty_femaleu'][$key];
    $twothousand_twenty_maleu = $_POST['twothousand_twenty_maleu'][$key];
    $twothousand_twentyone_femaleu = $_POST['twothousand_twentyone_femaleu'][$key];
    $twothousand_twentyone_maleu = $_POST['twothousand_twentyone_maleu'][$key];

    $sql1 = "update admission_universities set university='$universityu',twothousand_nineteen_female='$twothousand_nineteen_femaleu',twothousand_nineteen_male='$twothousand_nineteen_maleu',twothousand_twenty_female='$twothousand_twenty_femaleu',twothousand_twenty_male='$twothousand_twenty_maleu',twothousand_twentyone_female='$twothousand_twentyone_femaleu',twothousand_twentyone_male='$twothousand_twentyone_maleu' where id='$id12'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=12&&year=$year12u';</script>";
    }
}

// special_educational_institutions
if(isset($_POST['update13']))
{ 
  foreach($_POST['year13u'] as $key => $year13u){
    $id13 = $_POST['id13'][$key];
    $governmentu = $_POST['governmentu'][$key];
    $nogov_studentu = $_POST['nogov_studentu'][$key];
    $semi_governmentu = $_POST['semi_governmentu'][$key];
    $nosemi_studentu = $_POST['nosemi_studentu'][$key];
    $privateu = $_POST['privateu'][$key];
    $nopriv_studentu = $_POST['nopriv_studentu'][$key];

    $sql1 = "update special_educational_institutions set government='$governmentu',nogov_student='$nogov_studentu',semi_government='$semi_governmentu',nosemi_student='$nosemi_studentu',private='$privateu',nopriv_student='$nopriv_studentu' where id='$id13'";
    $update = $conn->query($sql1);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='education.php?type=13&&year=$year13u';</script>";
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
                  <i class="mdi mdi-school"></i>
                </span> අධ්‍යාපන

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
                            <center><a class="dropdown-item" href="education.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="education.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="education.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="education.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="education.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="education.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="education.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="education.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="education.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="education.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="education.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="education.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='education.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>පාසල් තොරතුරු</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>අධ්‍යාපන මට්ටම අනුව ගුරුවරු සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ඉගැන්වීමේ මාධ්‍ය අනුව ගුරුවරු සංඛ්‍යාව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ඉගැන්වීමේ මාධ්‍ය අනුව සිසුන් සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>අධ්‍යාපනය ලබන ශ්‍රේණි අනුව සිසුන් සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>පිරිවෙන් තොරතුරු</a>"; ?> 

                  
                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>පෙර පාසල් තොරතුරු</a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>වෘත්තීය මධ්‍යස්ථාන තොරතුරු</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>පුස්තකාල පහසුක්ම් සම්බන්ධ තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>වෙනත් අධ්‍යාපන ආයතන/උපකාරක පන්ති</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=11&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>විභාගය සමත් වූ අයදුම් කරුවන් සංඛ්‍යාව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='education.php?type=12&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>විශ්ව විද්‍යාල වලට සිසුන් ඇතුලත් කිරීම්</a>"; ?> 

                </div>
            </div>

        </div>


        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo "<a href='education.php?type=13&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>විශේෂ අධ්‍යාපන ආයතන</a>"; ?> 
            </div>
          </div>
        </div>

        </form>
            


<!-- ===========================පාසල් තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){

  ?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">පාසල් තොරතුරු</h4>


<?php 

  $q3 =$conn->query("SELECT * from school_information WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    // $gnd=$row['gnd'];
    $school_name=$row['school_name'];
    $national_schools=$row['national_schools'];
    $provincial_council_schools=$row['provincial_council_schools'];
    $oneab=$row['oneab'];
    $onec=$row['onec'];
    $two=$row['two'];
    $three=$row['three'];
    $private_schools=$row['private_schools'];
    $sinhala=$row['sinhala'];
    $tamil=$row['tamil'];
    $english=$row['english'];
    $no_students=$row['no_students'];
    $no_teachers=$row['no_teachers'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                      

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_nameu[]" value='<?php echo $school_name; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජාතික පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="national_schoolsu[]" value='<?php echo $national_schools; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පළාත් සභා පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="provincial_council_schoolsu[]" value='<?php echo $provincial_council_schools; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">1 AB</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="oneabu[]" value='<?php echo $oneab; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">1 C</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="onecu[]" value='<?php echo $onec; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2 ශ්‍රේණිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twou[]" value='<?php echo $two; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">3 ශ්‍රේණිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="threeu[]" value='<?php echo $three; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_schoolsu[]" value='<?php echo $private_schools; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිංහල</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhalau[]" value='<?php echo $sinhala; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දෙමළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamilu[]" value='<?php echo $tamil; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඉංග්‍රීසි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="englishu[]" value='<?php echo $english; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>'>
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
                    <h4 class="card-title">පාසල් තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                       

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජාතික පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="national_schools[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පළාත් සභා පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="provincial_council_schools[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">1 AB</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="oneab[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">1 C</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="onec[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2 ශ්‍රේණිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="two[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">3 ශ්‍රේණිය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three[]" >
                        </div>

                      </div>

                     <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික පාසල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_schools[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිංහල</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දෙමළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamil[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඉංග්‍රීසි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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


              
<!-- ===========================අධ්‍යාපන මට්ටම අනුව ගුරුවරු සංඛ්‍යාව================================== -->
<?php
$type=$_GET['type'];
if($type=='2'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අධ්‍යාපන මට්ටම අනුව ගුරුවරු සංඛ්‍යාව</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from teachers_edu_level WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $school_name=$row['school_name'];
                        $graduate=$row['graduate'];
                        $training=$row['training'];
                        $untrained=$row['untrained'];
                        $other=$row['other'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_nameu[]" value='<?php echo $school_name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උපාධිධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="graduateu[]" value='<?php echo $graduate; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුහුණු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="trainingu[]" value='<?php echo $training; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නුපුහුණු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="untrainedu[]" value='<?php echo $untrained; ?>'>
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
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අධ්‍යාපන මට්ටම අනුව ගුරුවරු සංඛ්‍යාව</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උපාධිධාරී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="graduate[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුහුණු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="training[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නුපුහුණු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="untrained[]" >
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



<!-- ===========================ඉගැන්වීමේ මාධ්‍ය අනුව ගුරුවරු සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ඉගැන්වීමේ මාධ්‍ය අනුව ගුරුවරු සංඛ්‍යාව</h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from teachers_medium_instruction WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                       
                        $school_name=$row['school_name'];
                        $sinhala=$row['sinhala'];
                        $tamil=$row['tamil'];
                        $sinhala_english=$row['sinhala_english'];
                        $english_tamil=$row['english_tamil'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_nameu[]" value='<?php echo $school_name; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිංහල මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhalau[]" value='<?php echo $sinhala; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෙමළ මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamilu[]" value='<?php echo $tamil; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිංහල හා ඉංග්‍රීසි මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala_englishu[]" value='<?php echo $sinhala_english; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඉංග්‍රීසි හා දෙමළ මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english_tamilu[]" value='<?php echo $english_tamil; ?>'>
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
                    <h4 class="card-title">ඉගැන්වීමේ මාධ්‍ය අනුව ගුරුවරු සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිංහල මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෙමළ මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamil[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිංහල හා ඉංග්‍රීසි මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala_english[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඉංග්‍රීසි හා දෙමළ මාධ්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english_tamil[]" >
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





<!-- ===========================ඉගැන්වීමේ මාධ්‍ය අනුව සිසුන් සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ඉගැන්වීමේ මාධ්‍ය අනුව සිසුන් සංඛ්‍යාව</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from students_medium_instruction WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $school_name=$row['school_name'];
                          $sinhala_female=$row['sinhala_female'];
                          $sinhala_male=$row['sinhala_male'];
                          $tamil_female=$row['tamil_female'];
                          $tamil_male=$row['tamil_male'];
                          $english_female=$row['english_female'];
                          $english_male=$row['english_male'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_nameu[]" value='<?php echo $school_name; ?>'>
                        </div>

                      </div>
 
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිංහල මාධ්‍ය(ගැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala_femaleu[]" value='<?php echo $sinhala_female; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිංහල මාධ්‍ය(පි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala_maleu[]" value='<?php echo $sinhala_male; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දෙමළ මාධ්‍ය(ගැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamil_femaleu[]" value='<?php echo $tamil_female; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෙමළ මාධ්‍ය(පි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamil_maleu[]" value='<?php echo $tamil_male; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඉංග්‍රීසි මාධ්‍ය(ගැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english_femaleu[]" value='<?php echo $english_female; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඉංග්‍රීසි මාධ්‍ය(පි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english_maleu[]" value='<?php echo $english_male; ?>'>
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
                    <h4 class="card-title">ඉගැන්වීමේ මාධ්‍ය අනුව සිසුන් සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිංහල මාධ්‍ය(ගැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala_female[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිංහල මාධ්‍ය(පි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="sinhala_male[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දෙමළ මාධ්‍ය(ගැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamil_female[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෙමළ මාධ්‍ය(පි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tamil_male[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඉංග්‍රීසි මාධ්‍ය(ගැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english_female[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඉංග්‍රීසි මාධ්‍ය(පි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="english_male[]" >
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



<!-- ===========================අධ්‍යාපනය ලබන ශ්‍රේණි අනුව සිසුන් සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අධ්‍යාපනය ලබන ශ්‍රේණි අනුව සිසුන් සංඛ්‍යාව</h4>

  <?php
    $q3 =$conn->query("SELECT * from students_grades_studied WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $school_name=$row['school_name'];
      $one_five=$row['one_five'];
      $six_ten=$row['six_ten'];
      $ol=$row['ol'];
      $al=$row['al'];
      $special_education_units=$row['special_education_units'];
  ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_nameu[]" value='<?php echo $school_name; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">1-5 ශ්‍රේණි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_fiveu[]" value='<?php echo $one_five; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">6-10 ශ්‍රේණි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="six_tenu[]" value='<?php echo $six_ten; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සාමාන්‍ය පෙළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="olu[]" value='<?php echo $ol; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උසස් පෙළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="alu[]" value='<?php echo $al; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විශේෂ අධ්‍යාපන ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="special_education_unitsu[]" value='<?php echo $special_education_units; ?>' >
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
                    <h4 class="card-title">අධ්‍යාපනය ලබන ශ්‍රේණි අනුව සිසුන් සංඛ්‍යාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පාසලේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="school_name[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">1-5 ශ්‍රේණි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_five[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">6-10 ශ්‍රේණි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="six_ten[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සාමාන්‍ය පෙළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ol[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">උසස් පෙළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="al[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විශේෂ අධ්‍යාපන ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="special_education_units[]" >
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



<!-- ===========================පිරිවෙන් තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">පිරිවෙන් තොරතුරු</h4>

  <?php
    $q3 =$conn->query("SELECT * from pirivena WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $pirivena_name=$row['pirivena_name'];
      $no_students=$row['no_students'];
      $no_teachers=$row['no_teachers'];
  ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පිරිවෙනේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pirivena_nameu[]" value='<?php echo $pirivena_name; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>' >
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
                    <h4 class="card-title">පිරිවෙන් තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පිරිවෙනේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pirivena_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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




<!-- ===========================පෙර පාසල් තොරතුරු ================================== -->
<?php 
$type=$_GET['type'];
if($type=='7'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">පෙර පාසල් තොරතුරු </h4>

                    <?php
    $q3 =$conn->query("SELECT * from preschool WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $preschool_name=$row['preschool_name'];
      $regno=$row['regno'];
      $no_students=$row['no_students'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="preschool_nameu[]" value='<?php echo $preschool_name; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලියාපදිංචි අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="regnou[]" value='<?php echo $regno; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ළමුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
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
                    <h4 class="card-title">පෙර පාසල් තොරතුරු </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="preschool_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලියාපදිංචි අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="regno[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ළමුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
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




<!-- ===========================වෘත්තීය මධ්‍යස්තාන තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='8'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වෘත්තීය මධ්‍යස්ථාන තොරතුරු</h4>

                    <?php
    $q3 =$conn->query("SELECT * from vocational_center WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $center_name=$row['center_name'];
      $addres=$row['addres'];
      $tpno=$row['tpno'];
      $course_name=$row['course_name'];
      $no_students=$row['no_students'];
      $no_teachers=$row['no_teachers'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="center_nameu[]" value='<?php echo $center_name; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දුරකථන අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tpnou[]" value='<?php echo $tpno; ?>' >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පාඨමාලාවේ නම</label>

                        <div class="col-sm-4">
                           <input type="text" class="form-control" name="course_nameu[]" value='<?php echo $course_name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_studentsu[]" value='<?php echo $no_students; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachersu[]" value='<?php echo $no_teachers; ?>'>
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
                    <h4 class="card-title">වෘත්තීය මධ්‍යස්ථාන තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මධ්‍යස්ථානයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="center_name[]" >
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>


                      </div>
                      <div class="form-group row">
                        
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දුරකථන අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tpno[]" >
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පාඨමාලාවේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="course_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_students[]" >
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගුරුවරු සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_teachers[]" >
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



<!-- ===========================පුස්තකාල පහසුක්ම් සම්බන්ධ තොරතුරු================================== -->
<?php 
$type=$_GET['type'];
if($type=='9'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">පුස්තකාල පහසුක්ම් සම්බන්ධ තොරතුරු</h4>

                    <?php
    $q3 =$conn->query("SELECT * from library WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $addres=$row['addres'];
      $tpno=$row['tpno'];
      ?>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දුරකථන අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tpnou[]" value='<?php echo $tpno; ?>'>
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
                    <h4 class="card-title">පුස්තකාල පහසුක්ම් සම්බන්ධ තොරතුරු</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                       

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දුරකථන අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tpno[]" >
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


              
<!-- ===========================වෙනත් අධ්‍යාපන ආයතන/උපකාරක පන්ති ================================== -->
<?php 
$type=$_GET['type'];
if($type=='10'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වෙනත් අධ්‍යාපන ආයතන/උපකාරක පන්ති </h4>

                    <?php
    $q3 =$conn->query("SELECT * from other_educational_institutions WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $institute_name=$row['institute_name'];
      $addres=$row['addres'];
      $tpno=$row['tpno'];
      ?>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                       
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අධ්‍යාපන ආයතනයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="institute_nameu[]" value='<?php echo $institute_name; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දුරකථන අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tpnou[]" value='<?php echo $tpno; ?>'>
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
                    <h4 class="card-title">වෙනත් අධ්‍යාපන ආයතන/උපකාරක පන්ති </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අධ්‍යාපන ආයතනයේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="institute_name[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addres[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දුරකථන අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tpno[]" >
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




<!-- ===========================විභාගය සමත් වූ අයදුම් කරුවන් සංඛ්‍යාව ================================== -->
<?php 
$type=$_GET['type'];
if($type=='11'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විභාගය සමත් වූ අයදුම් කරුවන් සංඛ්‍යාව </h4>

                    <?php
    $q3 =$conn->query("SELECT * from passed_examination WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $gradefive_exame_appearances=$row['gradefive_exame_appearances'];
      $cutoffmarks_applicants=$row['cutoffmarks_applicants'];
      $ol_appearances=$row['ol_appearances'];
      $al_qualified=$row['al_qualified'];
      $al_appearances=$row['al_appearances'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">5 ශ්‍රේණි විභාගයට පෙනී සිටි සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="gradefive_exame_appearancesu[]" value='<?php echo $gradefive_exame_appearances; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">කඩඉම් ලකුණු ලැබූ සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="cutoffmarks_applicantsu[]" value='<?php echo $cutoffmarks_applicants; ?>'>
                        </div>

                      </div>

                     <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">සා.පෙළ පෙනී සිටි සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="ol_appearancesu[]" value='<?php echo $ol_appearances; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">උ.පෙළ සදහා සුදුසුකම් ලැබූ සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="al_qualifiedu[]" value='<?php echo $al_qualified; ?>'>
                        </div>
                          
                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">උ.පෙළ පෙනී සිටි සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="al_appearancesu[]" value='<?php echo $al_appearances; ?>'>
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
                    <h4 class="card-title">විභාගය සමත් වූ අයදුම් කරුවන් සංඛ්‍යාව </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">5 ශ්‍රේණි විභාගයට පෙනී සිටි සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="gradefive_exame_appearances[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">කඩඉම් ලකුණු ලැබූ සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="cutoffmarks_applicants[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">සා.පෙළ පෙනී සිටි සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="ol_appearances[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">උ.පෙළ සදහා සුදුසුකම් ලැබූ සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="al_qualified[]" >
                        </div>
                          
                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">උ.පෙළ පෙනී සිටි සංඛ්‍යාව</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="al_appearances[]" >
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



<!-- ===========================විශ්ව විද්‍යාල වලට සිසුන් ඇතුලත් කිරීම් ================================== -->
<?php 
$type=$_GET['type'];
if($type=='12'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විශ්ව විද්‍යාල වලට සිසුන් ඇතුලත් කිරීම් </h4>

                    <?php
    $q3 =$conn->query("SELECT * from admission_universities WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $university=$row['university'];
      $twothousand_nineteen_female=$row['twothousand_nineteen_female'];
      $twothousand_nineteen_male=$row['twothousand_nineteen_male'];
      $twothousand_twenty_female=$row['twothousand_twenty_female'];
      $twothousand_twenty_male=$row['twothousand_twenty_male'];
      $twothousand_twentyone_female=$row['twothousand_twentyone_female'];
      $twothousand_twentyone_male=$row['twothousand_twentyone_male'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">විශ්ව විද්‍යාලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="universityu[]" value='<?php echo $university; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">2018-2019 ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_nineteen_femaleu[]" value='<?php echo $twothousand_nineteen_female; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2018-2019 පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_nineteen_maleu[]" value='<?php echo $twothousand_nineteen_male; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">2019-2020 ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twenty_femaleu[]" value='<?php echo $twothousand_twenty_female; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2019-2020 පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twenty_maleu[]" value='<?php echo $twothousand_twenty_male; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">2020-2021 ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twentyone_femaleu[]" value='<?php echo $twothousand_twentyone_female; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2020-2021 පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twentyone_maleu[]" value='<?php echo $twothousand_twentyone_male; ?>'>
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
                    <h4 class="card-title">විශ්ව විද්‍යාල වලට සිසුන් ඇතුලත් කිරීම් </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">විශ්ව විද්‍යාලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="university[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">2018-2019 ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_nineteen_female[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2018-2019 පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_nineteen_male[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">2019-2020 ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twenty_female[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2019-2020 පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twenty_male[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">2020-2021 ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twentyone_female[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">2020-2021 පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="twothousand_twentyone_male[]" >
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





<!-- ===========================විශේෂ අධ්‍යාපන ආයතන ================================== -->
<?php 
$type=$_GET['type'];
if($type=='13'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විශේෂ අධ්‍යාපන ආයතන </h4>

                    <?php
    $q3 =$conn->query("SELECT * from special_educational_institutions WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $government=$row['government'];
      $nogov_student=$row['nogov_student'];
      $semi_government=$row['semi_government'];
      $nosemi_student=$row['nosemi_student'];
      $private=$row['private'];
      $nopriv_student=$row['nopriv_student'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රජයේ ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="governmentu[]" value='<?php echo $government; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nogov_studentu[]" value='<?php echo $nogov_student; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_governmentu[]" value='<?php echo $semi_government; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nosemi_studentu[]" value='<?php echo $nosemi_student; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පුද්ගලික ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="privateu[]" value='<?php echo $private; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nopriv_studentu[]" value='<?php echo $nopriv_student; ?>'>
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year13u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id13[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update13" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විශේෂ අධ්‍යාපන ආයතන </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රජයේ ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="government[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nogov_student[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අර්ධ රාජ්‍ය ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="semi_government[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nosemi_student[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පුද්ගලික ආයතන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සිසුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nopriv_student[]" >
                        </div>

                      </div>
                      <?php echo "<input type='hidden' id='custId' name='year13[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit13" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

              </form>
              <?php } } ?>

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