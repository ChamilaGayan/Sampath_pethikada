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


//extent_cultivated_land
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $extent_cultivated_land = $_POST['extent_cultivated_land'][$key];
    $great_irrigation = $_POST['great_irrigation'][$key];
    $minor_irrigation = $_POST['minor_irrigation'][$key];
    $rain_water = $_POST['rain_water'][$key];
    
   
    $sql="INSERT into extent_cultivated_land (ds,userid,`year`,gnda,extent_cultivated_land,great_irrigation,minor_irrigation,rain_water) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$extent_cultivated_land."','".$great_irrigation."','".$minor_irrigation."','".$rain_water."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=1&&year=$year1';</script>";
    }
}


//yield_sown
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $under_irrigation_a = $_POST['under_irrigation_a'][$key];
    $rain_water_a = $_POST['rain_water_a'][$key];
    $under_irrigation_b = $_POST['under_irrigation_b'][$key];
    $rain_water_b = $_POST['rain_water_b'][$key];
    
   
    $sql="INSERT into yield_sown (ds,userid,`year`,gnda,under_irrigation_a,rain_water_a,under_irrigation_b,rain_water_b) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$under_irrigation_a."','".$rain_water_a."','".$under_irrigation_b."','".$rain_water_b."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=2&&year=$year2';</script>";
    }
}


//animal_statistics
if(isset($_POST['submit3']))
{ 
  foreach($_POST['year3'] as $key => $year3){
    $cow = $_POST['cow'][$key];
    $buffaloe = $_POST['buffaloe'][$key];
    $goat = $_POST['goat'][$key];
    $pig = $_POST['pig'][$key];
    $chicken = $_POST['chicken'][$key];
    $duck = $_POST['duck'][$key];
    $turkey = $_POST['turkey'][$key];
    
   
    $sql="INSERT into animal_statistics (ds,userid,`year`,gnda,cow,buffaloe,goat,pig,chicken,duck,turkey) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$cow."','".$buffaloe."','".$goat."','".$pig."','".$chicken."','".$duck."','".$turkey."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=3&&year=$year3';</script>";
    }
}


//milk_egg
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    $no_cow = $_POST['no_cow'][$key];
    $milk_ltr_a = $_POST['milk_ltr_a'][$key];
    $no_buffaloe = $_POST['no_buffaloe'][$key];
    $milk_ltr_b = $_POST['milk_ltr_b'][$key];
    $egg_chicken = $_POST['egg_chicken'][$key];
    $product_egg = $_POST['product_egg'][$key];
    
   
    $sql="INSERT into milk_egg (ds,userid,`year`,gnda,no_cow,milk_ltr_a,no_buffaloe,milk_ltr_b,egg_chicken,product_egg) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$no_cow."','".$milk_ltr_a."','".$no_buffaloe."','".$milk_ltr_b."','".$egg_chicken."','".$product_egg."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=4&&year=$year4';</script>";
    }
}


//land_ownership
if(isset($_POST['submit5']))
{ 
  foreach($_POST['year5'] as $key => $year5){
    $total_land = $_POST['total_land'][$key];
    $gov_land = $_POST['gov_land'][$key];
    $private_land = $_POST['private_land'][$key];
    $other_land = $_POST['other_land'][$key];
    $reserve_forests = $_POST['reserve_forests'][$key];
    $water_reserve = $_POST['water_reserve'][$key];
    $lands_submerged = $_POST['lands_submerged'][$key];
    $other = $_POST['other'][$key];
    $lands_owned_lrc = $_POST['lands_owned_lrc'][$key];
    
   
    $sql="INSERT into land_ownership (ds,userid,`year`,gnda,total_land,gov_land,private_land,other_land,reserve_forests,water_reserve,lands_submerged,other,lands_owned_lrc) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$gnd."','".$total_land."','".$gov_land."','".$private_land."','".$other_land."','".$reserve_forests."','".$water_reserve."','".$lands_submerged."','".$other."','".$lands_owned_lrc."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=5&&year=$year5';</script>";
    }
}


//land_ownership_lots
if(isset($_POST['submit6']))
{ 
  foreach($_POST['year6'] as $key => $year6){
    $three_quarters_familiy = $_POST['three_quarters_familiy'][$key];
    $three_quarters_half_familiy = $_POST['three_quarters_half_familiy'][$key];
    $half_one_familiy = $_POST['half_one_familiy'][$key];
    $one_five_familiy = $_POST['one_five_familiy'][$key];
    $five_ten_familiy = $_POST['five_ten_familiy'][$key];
    $ten_familiy = $_POST['ten_familiy'][$key];
    $no_land_familiy = $_POST['no_land_familiy'][$key];
    
   
    $sql="INSERT into land_ownership_lots (ds,userid,`year`,gnda,three_quarters_familiy,three_quarters_half_familiy,half_one_familiy,one_five_familiy,five_ten_familiy,ten_familiy,no_land_familiy) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$gnd."','".$three_quarters_familiy."','".$three_quarters_half_familiy."','".$half_one_familiy."','".$one_five_familiy."','".$five_ten_familiy."','".$ten_familiy."','".$no_land_familiy."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=6&&year=$year6';</script>";
    }
}


//land_ownership_mud
if(isset($_POST['submit7']))
{ 
  foreach($_POST['year7'] as $key => $year7){
    $three_quarters_familiy = $_POST['three_quarters_familiy'][$key];
    $three_quarters_half_familiy = $_POST['three_quarters_half_familiy'][$key];
    $half_one_familiy = $_POST['half_one_familiy'][$key];
    $one_five_familiy = $_POST['one_five_familiy'][$key];
    $five_familiy = $_POST['five_familiy'][$key];
    $no_land_familiy = $_POST['no_land_familiy'][$key];
    
   
    $sql="INSERT into land_ownership_mud (ds,userid,`year`,gnda,three_quarters_familiy,three_quarters_half_familiy,half_one_familiy,one_five_familiy,five_familiy,no_land_familiy) 
    VALUES ('".$ds."','".$uid."','".$year7."','".$gnd."','".$three_quarters_familiy."','".$three_quarters_half_familiy."','".$half_one_familiy."','".$one_five_familiy."','".$five_familiy."','".$no_land_familiy."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=7&&year=$year7';</script>";
    }
}


//agricultural_land
if(isset($_POST['submit8']))
{ 
  foreach($_POST['year8'] as $key => $year8){
    $total_land = $_POST['total_land'][$key];
    $gov_land = $_POST['gov_land'][$key];
    $paddy_land = $_POST['paddy_land'][$key];
    $tea = $_POST['tea'][$key];
    $coconut = $_POST['coconut'][$key];
    $rubber = $_POST['rubber'][$key];
    $peper = $_POST['peper'][$key];
    $cashews = $_POST['cashews'][$key];
    $mixed_cultivation = $_POST['mixed_cultivation'][$key];
   
    $sql="INSERT into agricultural_land (ds,userid,`year`,gnda,total_land,gov_land,paddy_land,tea,coconut,rubber,peper,cashews,mixed_cultivation) 
    VALUES ('".$ds."','".$uid."','".$year8."','".$gnd."','".$total_land."','".$gov_land."','".$paddy_land."','".$tea."','".$coconut."','".$rubber."','".$peper."','".$cashews."','".$mixed_cultivation."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=8&&year=$year8';</script>";
    }
}


//cultivation_paddy
if(isset($_POST['submit9']))
{ 
  foreach($_POST['year9'] as $key => $year9){
    $crops = $_POST['crops'][$key];
    $area_yala = $_POST['area_yala'][$key];
    $area_maha = $_POST['area_maha'][$key];
    $harvest_yala = $_POST['harvest_yala'][$key];
    $harvest_maha = $_POST['harvest_maha'][$key];
    
    $sql="INSERT into cultivation_paddy (ds,userid,`year`,gnda,crops,area_yala,area_maha,harvest_yala,harvest_maha) 
    VALUES ('".$ds."','".$uid."','".$year9."','".$gnd."','".$crops."','".$area_yala."','".$area_maha."','".$harvest_yala."','".$harvest_maha."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=9&&year=$year9';</script>";
    }
}


//cultivation_vegetables
if(isset($_POST['submit10']))
{ 
  foreach($_POST['year10'] as $key => $year10){
    $crops = $_POST['crops'][$key];
    $area_yala = $_POST['area_yala'][$key];
    $area_maha = $_POST['area_maha'][$key];
    $harvest_yala = $_POST['harvest_yala'][$key];
    $harvest_maha = $_POST['harvest_maha'][$key];
    
    $sql="INSERT into cultivation_vegetables (ds,userid,`year`,gnda,crops,area_yala,area_maha,harvest_yala,harvest_maha) 
    VALUES ('".$ds."','".$uid."','".$year10."','".$gnd."','".$crops."','".$area_yala."','".$area_maha."','".$harvest_yala."','".$harvest_maha."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=10&&year=$year10';</script>";
    }
}     


//cultivation_fruit
if(isset($_POST['submit11']))
{ 
  foreach($_POST['year11'] as $key => $year11){
    $fruit = $_POST['fruit'][$key];
    $area = $_POST['area'][$key];
    $harvest = $_POST['harvest'][$key];
    
    $sql="INSERT into cultivation_fruit (ds,userid,`year`,gnda,fruit,area,harvest) 
    VALUES ('".$ds."','".$uid."','".$year11."','".$gnd."','".$fruit."','".$area."','".$harvest."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=11&&year=$year11';</script>";
    }
}


//cultivation_spices
if(isset($_POST['submit12']))
{ 
  foreach($_POST['year12'] as $key => $year1){
    $crops = $_POST['crops'][$key];
    $area = $_POST['area'][$key];
    $harvest = $_POST['harvest'][$key];
    
    $sql="INSERT into cultivation_spices (ds,userid,`year`,gnda,crops,area,harvest) 
    VALUES ('".$ds."','".$uid."','".$year12."','".$gnd."','".$crops."','".$area."','".$harvest."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=12&&year=$year12';</script>";
    }
}


//organic_fertilizer
if(isset($_POST['submit13']))
{ 
  foreach($_POST['year13'] as $key => $year13){
    $production_company = $_POST['production_company'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $annual_production = $_POST['annual_production'][$key];
    
    $sql="INSERT into organic_fertilizer (ds,userid,`year`,gnda,production_company,addres,contact,annual_production) 
    VALUES ('".$ds."','".$uid."','".$year13."','".$gnd."','".$production_company."','".$addres."','".$contact."','".$annual_production."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=13&&year=$year13';</script>";
    }
}

//agricultural_reservoirs
if(isset($_POST['submit14']))
{ 
  foreach($_POST['year14'] as $key => $year14){
    $water_capacity = $_POST['water_capacity'][$key];
    $holding_area = $_POST['holding_area'][$key];
    $surface_size = $_POST['surface_size'][$key];
    
    $sql="INSERT into agricultural_reservoirs (ds,userid,`year`,gnda,water_capacity,holding_area,surface_size) 
    VALUES ('".$ds."','".$uid."','".$year14."','".$gnd."','".$water_capacity."','".$holding_area."','".$surface_size."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=14&&year=$year14';</script>";
    }
}


// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================

//extent_cultivated_land
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $extent_cultivated_landu = $_POST['extent_cultivated_landu'][$key];
    $great_irrigationu = $_POST['great_irrigationu'][$key];
    $minor_irrigationu = $_POST['minor_irrigationu'][$key];
    $rain_wateru = $_POST['rain_wateru'][$key];
    
    $sql = "update extent_cultivated_land set extent_cultivated_land='$extent_cultivated_landu',great_irrigation='$great_irrigationu',minor_irrigation='$minor_irrigationu',rain_water='$rain_wateru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=1&&year=$year1u';</script>";
    }
}


//yield_sown
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $under_irrigation_au = $_POST['under_irrigation_au'][$key];
    $rain_water_au = $_POST['rain_water_au'][$key];
    $under_irrigation_bu = $_POST['under_irrigation_bu'][$key];
    $rain_water_bu = $_POST['rain_water_bu'][$key];
    
    $sql = "update yield_sown set under_irrigation_a='$under_irrigation_au',rain_water_a='$rain_water_au',under_irrigation_b='$under_irrigation_bu',rain_water_b='$rain_water_bu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=2&&year=$year2u';</script>";
    }
}


//animal_statistics
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $cowu = $_POST['cowu'][$key];
    $buffaloeu = $_POST['buffaloeu'][$key];
    $goatu = $_POST['goatu'][$key];
    $pigu = $_POST['pigu'][$key];
    $chickenu = $_POST['chickenu'][$key];
    $ducku = $_POST['ducku'][$key];
    $turkeyu = $_POST['turkeyu'][$key];
   
    $sql = "update animal_statistics set cow='$cowu',buffaloe='$buffaloeu',goat='$goatu',pig='$pigu',chicken='$chickenu',duck='$ducku',turkey='$turkeyu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=3&&year=$year3u';</script>";
    }
}


//milk_egg
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $no_cowu = $_POST['no_cowu'][$key];
    $milk_ltr_au = $_POST['milk_ltr_au'][$key];
    $no_buffaloeu = $_POST['no_buffaloeu'][$key];
    $milk_ltr_bu = $_POST['milk_ltr_bu'][$key];
    $egg_chickenu = $_POST['egg_chickenu'][$key];
    $product_eggu = $_POST['product_eggu'][$key];
   
    $sql = "update milk_egg set no_cow='$no_cowu',milk_ltr_a='$milk_ltr_au',no_buffaloe='$no_buffaloeu',milk_ltr_b='$milk_ltr_bu',egg_chicken='$egg_chickenu',product_egg='$product_eggu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=4&&year=$year4u';</script>";
    }
}


//land_ownership
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id = $_POST['id5'][$key];
    $total_landu = $_POST['total_landu'][$key];
    $gov_landu = $_POST['gov_landu'][$key];
    $private_landu = $_POST['private_landu'][$key];
    $other_landu = $_POST['other_landu'][$key];
    $reserve_forestsu = $_POST['reserve_forestsu'][$key];
    $water_reserveu = $_POST['water_reserveu'][$key];
    $lands_submergedu = $_POST['lands_submergedu'][$key];
    $otheru = $_POST['otheru'][$key];
    $lands_owned_lrcu = $_POST['lands_owned_lrcu'][$key];
    
    $sql = "update land_ownership set total_land='$total_landu',gov_land='$gov_landu',private_land='$private_landu',other_land='$other_landu',reserve_forests='$reserve_forestsu',water_reserve='$water_reserveu',lands_submerged='$lands_submergedu',other='$otheru',lands_owned_lrc='$lands_owned_lrcu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=5&&year=$year5u';</script>";
    }
}


//land_ownership_lots
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id = $_POST['id6'][$key];
    $three_quarters_familiyu = $_POST['three_quarters_familiyu'][$key];
    $three_quarters_half_familiyu = $_POST['three_quarters_half_familiyu'][$key];
    $half_one_familiyu = $_POST['half_one_familiyu'][$key];
    $one_five_familiyu = $_POST['one_five_familiyu'][$key];
    $five_ten_familiyu = $_POST['five_ten_familiyu'][$key];
    $ten_familiyu = $_POST['ten_familiyu'][$key];
    $no_land_familiyu = $_POST['no_land_familiyu'][$key];
    
    $sql = "update land_ownership_lots set three_quarters_familiy='$three_quarters_familiyu',three_quarters_half_familiy='$three_quarters_half_familiyu',half_one_familiy='$half_one_familiyu',one_five_familiy='$one_five_familiyu',five_ten_familiy='$five_ten_familiyu',ten_familiy='$ten_familiyu',no_land_familiy='$no_land_familiyu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=6&&year=$year6u';</script>";
    }
}


//land_ownership_mud
if(isset($_POST['update7']))
{ 
  foreach($_POST['year7u'] as $key => $year7u){
    $id = $_POST['id7'][$key];
    $three_quarters_familiyu = $_POST['three_quarters_familiyu'][$key];
    $three_quarters_half_familiyu = $_POST['three_quarters_half_familiyu'][$key];
    $half_one_familiyu = $_POST['half_one_familiyu'][$key];
    $one_five_familiyu = $_POST['one_five_familiyu'][$key];
    $five_familiyu = $_POST['five_familiyu'][$key];
    $no_land_familiyu = $_POST['no_land_familiyu'][$key];
   
    $sql = "update land_ownership_mud set three_quarters_familiy='$three_quarters_familiyu',three_quarters_half_familiy='$three_quarters_half_familiyu',half_one_familiy='$half_one_familiyu',one_five_familiy='$one_five_familiyu',five_familiy='$five_familiyu',no_land_familiy='$no_land_familiyu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=7&&year=$year7u';</script>";
    }
}


//agricultural_land
if(isset($_POST['update8']))
{ 
  foreach($_POST['year8u'] as $key => $year8u){
    $id = $_POST['id8'][$key];
    $total_landu = $_POST['total_landu'][$key];
    $gov_landu = $_POST['gov_landu'][$key];
    $paddy_landu = $_POST['paddy_landu'][$key];
    $teau = $_POST['teau'][$key];
    $coconutu = $_POST['coconutu'][$key];
    $rubberu = $_POST['rubberu'][$key];
    $peperu = $_POST['peperu'][$key];
    $cashewsu = $_POST['cashewsu'][$key];
    $mixed_cultivationu = $_POST['mixed_cultivationu'][$key];
   
    $sql = "update agricultural_land set total_land='$total_landu',gov_land='$gov_landu',paddy_land='$paddy_landu',tea='$teau',coconut='$coconutu',rubber='$rubberu',peper='$peperu',cashews='$cashewsu',mixed_cultivation='$mixed_cultivationu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=8&&year=$year8u';</script>";
    }
}


//cultivation_paddy
if(isset($_POST['update9']))
{ 
  foreach($_POST['year9u'] as $key => $year9u){
    $id = $_POST['id9'][$key];
    $cropsu = $_POST['cropsu'][$key];
    $area_yalau = $_POST['area_yalau'][$key];
    $area_mahau = $_POST['area_mahau'][$key];
    $harvest_yalau = $_POST['harvest_yalau'][$key];
    $harvest_mahau = $_POST['harvest_mahau'][$key];
   
    $sql = "update cultivation_paddy set crops='$cropsu',area_yala='$area_yalau',area_maha='$area_mahau',harvest_yala='$harvest_yalau',harvest_maha='$harvest_mahau' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=9&&year=$year9u';</script>";
    }
}



//cultivation_vegetables
if(isset($_POST['update10']))
{ 
  foreach($_POST['year10u'] as $key => $year10u){
    $id = $_POST['id10'][$key];
    $cropsu = $_POST['cropsu'][$key];
    $area_yalau = $_POST['area_yalau'][$key];
    $area_mahau = $_POST['area_mahau'][$key];
    $harvest_yalau = $_POST['harvest_yalau'][$key];
    $harvest_mahau = $_POST['harvest_mahau'][$key];
   
    $sql = "update cultivation_vegetables set crops='$cropsu',area_yala='$area_yalau',area_maha='$area_mahau',harvest_yala='$harvest_yalau',harvest_maha='$harvest_mahau' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=10&&year=$year10u';</script>";
    }
}


//cultivation_fruit
if(isset($_POST['update11']))
{ 
  foreach($_POST['year11u'] as $key => $year11u){
    $id = $_POST['id11'][$key];
    $fruitu = $_POST['fruitu'][$key];
    $areau = $_POST['areau'][$key];
    $harvestu = $_POST['harvestu'][$key];
   
    $sql = "update cultivation_fruit set fruit='$fruitu',area='$areau',harvest='$harvestu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=11&&year=$year11u';</script>";
    }
}


//cultivation_spices
if(isset($_POST['update12']))
{ 
  foreach($_POST['year12u'] as $key => $year12u){
    $id = $_POST['id12'][$key];
    $cropsu = $_POST['cropsu'][$key];
    $areau = $_POST['areau'][$key];
    $harvestu = $_POST['harvestu'][$key];
   
    $sql = "update cultivation_spices set crops='$cropsu',area='$areau',harvest='$harvestu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=12&&year=$year12u';</script>";
    }
}


//organic_fertilizer
if(isset($_POST['update13']))
{ 
  foreach($_POST['year13u'] as $key => $year13u){
    $id = $_POST['id13'][$key];
    $production_companyu = $_POST['production_companyu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $annual_productionu = $_POST['annual_productionu'][$key];
    
    $sql = "update organic_fertilizer set production_company='$production_companyu',addres='$addresu',contact='$contactu',annual_production='$annual_productionu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=13&&year=$year13u';</script>";
    }
}


//agricultural_reservoirs
if(isset($_POST['update14']))
{ 
  foreach($_POST['year14u'] as $key => $year14u){
    $id = $_POST['id14'][$key];
    $water_capacityu = $_POST['water_capacityu'][$key];
    $holding_areau = $_POST['holding_areau'][$key];
    $surface_sizeu = $_POST['surface_sizeu'][$key];
   
    $sql = "update agricultural_reservoirs set water_capacity='$water_capacityu',holding_area='$holding_areau',surface_size='$surface_sizeu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='agri.php?type=14&&year=$year14u';</script>";
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
                  <i class="mdi mdi-gate"></i>
                </span> කෘෂිකාර්මික

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
                            <center><a class="dropdown-item" href="agri.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="agri.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="agri.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="agri.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="agri.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="agri.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="agri.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="agri.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="agri.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="agri.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="agri.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="agri.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='agri.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ.කොට්ඨාස මට්ටමින් අස්වද්දන ලද බිම් ප්‍රමාණය</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ කොට්ඨාස මට්ටමින් අස්වැන්න</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් සත්ව සංඛ්‍යාලේඛණ</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කිරි හා බිත්තර නිෂ්පාදනය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ග්‍රාම නිලධාරී වසම් මට්ටමින් ඉඩම් අයිතිය</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>ග්‍රාම නිලධාරී වසම් මට්ටමින් ගොඩ ඉඩම් අයිතිය</a>"; ?> 

                </div>
            </div> 

        </div>

        <div class="row">
           
<div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=7&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ග්‍රාම නිලධාරී වසම් මට්ටමින් මඩ ඉඩම් අයිතිය</a>"; ?> 
 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=8&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කෘෂිකාර්මික ඉඩම් පරිහරණය</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=9&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>වී සහ අතිරේක භෝග වගාව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=10&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>එලවළු හා අල භෝග වගාව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=11&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>පළතුරු වගාව</a>"; ?> 

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='agri.php?type=12&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කුළුබඩු හා වෙනත් භෝග වගාව</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo "<a href='agri.php?type=13&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>කාබනික පොහොර නිපදවන ස්ථාන පිළිබද තොරතුරු</a>"; ?> 
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <?php echo "<a href='agri.php?type=14&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ප්‍රා.ලේ කොට්ඨාසය තුල ඇති කෘෂිකාර්මික ජලාශ</a>"; ?> 
            </div>
          </div>
        </div>

        </form>
            


<!-- ===========================ප්‍රා.ලේ.කොට්ඨාස මට්ටම්මින් අස්වද්දන ලද බිම් ප්‍රමාණය ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටම්මින් අස්වද්දන ලද බිම් ප්‍රමාණය </h4>


<?php 

  $q3 =$conn->query("SELECT * from extent_cultivated_land WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $extent_cultivated_land=$row['extent_cultivated_land'];
    $great_irrigation=$row['great_irrigation'];
    $minor_irrigation=$row['minor_irrigation'];
    $rain_water=$row['rain_water'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="extent_cultivated_landu[]" value='<?php echo $extent_cultivated_land; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මහා වාරිමාර්ග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="great_irrigationu[]" value='<?php echo $great_irrigation; ?>'>
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සුළු වාරිමාර්ග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="minor_irrigationu[]" value='<?php echo $minor_irrigation; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වර්ෂා ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rain_wateru[]" value='<?php echo $rain_water; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාස මට්ටම්මින් අස්වද්දන ලද බිම් ප්‍රමාණය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="extent_cultivated_land[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මහා වාරිමාර්ග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="great_irrigation[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සුළු වාරිමාර්ග</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="minor_irrigation[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වර්ෂා ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rain_water[]" >
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


              
<!-- ===========================ප්‍රා.ලේ කොට්ඨාස මට්ටමින් වපුරන ලද අස්වැන්න================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ කොට්ඨාස මට්ටමින් වපුරන ලද අස්වැන්න</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from yield_sown WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $under_irrigation_a=$row['under_irrigation_a'];
                        $rain_water_a=$row['rain_water_a'];
                        $under_irrigation_b=$row['under_irrigation_b'];
                        $rain_water_b=$row['rain_water_b'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වපුරන ලද බිම් ප්‍රමාණය-වාරිමාර්ග යටතේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="under_irrigation_au[]" value='<?php echo $under_irrigation_a; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වර්ෂා ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rain_water_au[]" value='<?php echo $rain_water_a; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න-වාරිමාර්ග යටතේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="under_irrigation_bu[]" value='<?php echo $under_irrigation_b; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වර්ශා ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rain_water_bu[]" value='<?php echo $rain_water_b; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ කොට්ඨාස මට්ටමින් වපුරන ලද අස්වැන්න</h4>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වපුරන ලද බිම් ප්‍රමාණය-වාරිමාර්ග යටතේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="under_irrigation_a[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වර්ෂා ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rain_water_a[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න-වාරිමාර්ග යටතේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="under_irrigation_b[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වර්ෂා ජලය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rain_water_b[]" >
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





<!-- ===========================ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් සත්ව සංඛ්‍යාලේඛණ================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් සත්ව සංඛ්‍යාලේඛණ</h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from animal_statistics WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $cow=$row['cow'];
                        $buffaloe=$row['buffaloe'];
                        $goat=$row['goat'];
                        $pig=$row['pig'];
                        $chicken=$row['chicken'];
                        $duck=$row['duck'];
                        $turkey=$row['turkey'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">එල හරක් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cowu[]" value='<?php echo $cow; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මී හරක් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="buffaloeu[]" value='<?php echo $buffaloe; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">එළුවන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="goatu[]" value='<?php echo $goat; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඌරන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pigu[]" value='<?php echo $pig; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කුකුලන් සහ කිකිලියන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="chickenu[]" value='<?php echo $chicken; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">තාරාවන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ducku[]" value='<?php echo $duck; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කළුකුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="turkeyu[]" value='<?php echo $turkey; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් සත්ව සංඛ්‍යාලේඛණ</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">එල හරක් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cow[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මී හරක් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="buffaloe[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">එළුවන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="goat[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ඌරන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pig[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කුකුලන් සහ කිකිලියන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="chicken[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">තාරාවන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="duck[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කළුකුන් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="turkey[]" >
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





<!-- ===========================ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කිරි හා බිත්තර නිෂ්පාදනය================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කිරි හා බිත්තර නිෂ්පාදනය</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from milk_egg WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $no_cow=$row['no_cow'];
                          $milk_ltr_a=$row['milk_ltr_a'];
                          $no_buffaloe=$row['no_buffaloe'];
                          $milk_ltr_b=$row['milk_ltr_b'];
                          $egg_chicken=$row['egg_chicken'];
                          $product_egg=$row['product_egg'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">එළකිරි ලබාගන්නා දෙනුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_cowu[]" value='<?php echo $no_cow; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෛනික කිරි නිෂ්පාදනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="milk_ltr_au[]" value='<?php echo $milk_ltr_a; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මී කිරි ලබාගන්නා මී දෙනුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_buffaloeu[]" value='<?php echo $no_buffaloe; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෛනික කිරි නිෂ්පාදනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="milk_ltr_bu[]" value='<?php echo $milk_ltr_b; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බිත්තර දමන කිකිලියන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="egg_chickenu[]" value='<?php echo $egg_chicken; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෛනික බිත්තර නිෂ්පාදනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="product_eggu[]" value='<?php echo $product_egg; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කිරි හා බිත්තර නිෂ්පාදනය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">එලකිරි ලබාගන්නා දෙනුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_cow[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෛනික කිරි නිෂ්පාදනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="milk_ltr_a[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මී කිරි ලබාගන්නා මී දෙනුන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_buffaloe[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෛනික කිරි නිෂ්පාදනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="milk_ltr_b[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">බිත්තර දමන කිකිළියන් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="egg_chicken[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දෛනික බිත්තර නිෂ්පාදනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="product_egg[]" >
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



<!-- ===========================ග්‍රාම නිලධාරී වසම් මට්ටමින් ඉඩම් අයිතිය================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ග්‍රාම නිලධාරී වසම් මට්ටමින් ඉඩම් අයිතිය</h4>

                    <?php
    $q3 =$conn->query("SELECT * from land_ownership WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $total_land=$row['total_land'];
      $gov_land=$row['gov_land'];
      $private_land=$row['private_land'];
      $other_land=$row['other_land'];
      $reserve_forests=$row['reserve_forests'];
      $water_reserve=$row['water_reserve'];
      $lands_submerged=$row['lands_submerged'];
      $other=$row['other'];
      $lands_owned_lrc=$row['lands_owned_lrc'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වසමේ මුලු ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="total_landu[]" value='<?php echo $total_land; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රජයේ ඉඩම් ප්‍රමාණය(අක්කර)</label>

                          <div class="col-sm-4">
                          <input type="text" class="form-control" name="gov_landu[]" value='<?php echo $gov_land; ?>'>
                          </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_landu[]" value='<?php echo $private_land; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත් ආයතන වලට අයත් ඉඩම්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_landu[]" value='<?php echo $other_land; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රක්ෂිත වනාන්තර(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="reserve_forestsu[]" value='<?php echo $reserve_forests; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ජල රක්ෂිත(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="water_reserveu[]" value='<?php echo $water_reserve; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජලාශ වලට යටවූ බිම්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lands_submergedu[]" value='<?php echo $lands_submerged; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>' >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඉඩම් ප්‍රතිසංස්කරණ කොමිසන් සභාව සතු ඉඩම්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lands_owned_lrcu[]" value='<?php echo $lands_owned_lrc; ?>'>
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
                    <h4 class="card-title">ග්‍රාම නිලධාරී වසම් මට්ටමින් ඉඩම් අයිතිය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වසමේ මුළු ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="total_land[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රජයේ ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="gov_land[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පෞද්ගලික ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="private_land[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත් ආයතන වලට අයත් ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other_land[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රක්ෂිත වනාන්තර(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="reserve_forests[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ජල රක්ෂිත(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="water_reserve[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජලාශ වලට යටවූ බිම්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lands_submerged[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වෙනත්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                      </div>
                      
                   
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඉඩම් ප්‍රතිසංස්කරණ කොමිසන් සභාව සතු ඉඩම්(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="lands_owned_lrc[]" >
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




<!-- ===========================ග්‍රාම නිලධාරී වසම් මට්ටමින් ගොඩ ඉඩම් අයිතිය================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ග්‍රාම නිලධාරී වසම් මට්ටමින් ගොඩ ඉඩම් අයිතිය</h4>

  <?php
    $q3 =$conn->query("SELECT * from land_ownership_lots WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $three_quarters_familiy=$row['three_quarters_familiy'];
      $three_quarters_half_familiy=$row['three_quarters_half_familiy'];
      $half_one_familiy=$row['half_one_familiy'];
      $one_five_familiy=$row['one_five_familiy'];
      $five_ten_familiy=$row['five_ten_familiy'];
      $ten_familiy=$row['ten_familiy'];
      $no_land_familiy=$row['no_land_familiy'];
  ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/4 ට අඩු ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_familiyu[]" value='<?php echo $three_quarters_familiy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1/4 සිට 1/2 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_half_familiyu[]" value='<?php echo $three_quarters_half_familiy; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/2 සිට 1 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="half_one_familiyu[]" value='<?php echo $half_one_familiy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1 සිට 5 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_five_familiyu[]" value='<?php echo $one_five_familiy; ?>' >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 5 සිට 10 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="five_ten_familiyu[]" value='<?php echo $five_ten_familiy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 10 ට වැඩි ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ten_familiyu[]" value='<?php echo $ten_familiy; ?>' >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඉඩම් නොමැති පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_land_familiyu[]" value='<?php echo $no_land_familiy; ?>'>
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
                    <h4 class="card-title">ග්‍රාම නිලධාරී වසම් මට්ටමින් ගොඩ ඉඩම් අයිතිය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/4 ට අඩු ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_familiy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1/4 සිට 1/2 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_half_familiy[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/2 සිට 1 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="half_one_familiy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1 සිට 5 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_five_familiy[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 5 සිට 10 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="five_ten_familiy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 10ට වැඩි ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ten_familiy[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඉඩම් නොමැති පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_land_familiy[]" >
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





<!-- ===========================ග්‍රාම නිලධාරී වසම් මට්ටමින් මඩ ඉඩම් අයිතිය================================== -->
<?php 
$type=$_GET['type'];
if($type=='7'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ග්‍රාම නිලධාරී වසම් මට්ටමින් මඩ ඉඩම් අයිතිය</h4>

                    <?php
    $q3 =$conn->query("SELECT * from land_ownership_mud WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $three_quarters_familiy=$row['three_quarters_familiy'];
      $three_quarters_half_familiy=$row['three_quarters_half_familiy'];
      $half_one_familiy=$row['half_one_familiy'];
      $one_five_familiy=$row['one_five_familiy'];
      $five_familiy=$row['five_familiy'];
      $no_land_familiy=$row['no_land_familiy'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/4 ට අඩු ඉඩම් හිමි පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_familiyu[]" value='<?php echo $three_quarters_familiy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1/4 සිට 1/2 දක්වා ඉඩම් හිමි පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_half_familiyu[]" value='<?php echo $three_quarters_half_familiy; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/2 සිට 1 දක්වා ඉඩම් හිමි පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="half_one_familiyu[]" value='<?php echo $half_one_familiy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1 සිට 5 දක්වා ඉඩම් හිමි පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_five_familiyu[]" value='<?php echo $one_five_familiy; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 5ට වැඩි ඉඩම් හිමි පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="five_familiyu[]" value='<?php echo $five_familiy; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මඩ ඉඩම් නොමැති පවුල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_land_familiyu[]" value='<?php echo $no_land_familiy; ?>'>
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
                    <h4 class="card-title">ග්‍රාම නිලධාරී වසම් මට්ටමින් මඩ ඉඩම් අයිතිය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/4 ට අඩු ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_familiy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1/4 සිට 1/2 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="three_quarters_half_familiy[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 1/2 සිට 1 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="half_one_familiy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අක්කර 1 සිට 5 දක්වා ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="one_five_familiy[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අක්කර 5ට වැඩි ඉඩම් හිමි පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="five_familiy[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මඩ ඉඩම් නොමැති පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="no_land_familiy[]" >
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




<!-- ===========================ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කෘෂිකාර්මික ඉඩම් පරිහරණය================================== -->
<?php 
$type=$_GET['type'];
if($type=='8'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කෘෂිකාර්මික ඉඩම් පරිහරණය</h4>

                    <?php
    $q3 =$conn->query("SELECT * from agricultural_land WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $total_land=$row['total_land'];
      $gov_land=$row['gov_land'];
      $paddy_land=$row['paddy_land'];
      $tea=$row['tea'];
      $coconut=$row['coconut'];
      $rubber=$row['rubber'];
      $peper=$row['peper'];
      $cashews=$row['cashews'];
      $mixed_cultivation=$row['mixed_cultivation'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වසමේ මුළු ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="total_landu[]" value='<?php echo $total_land; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රජයේ ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="gov_landu[]" value='<?php echo $gov_land; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වී වගාව(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="paddy_landu[]" value='<?php echo $paddy_land; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">තේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="teau[]" value='<?php echo $tea; ?>' >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පොල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="coconutu[]" value='<?php echo $coconut; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රබර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rubberu[]" value='<?php echo $rubber; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගම්මිරිස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="peperu[]" value='<?php echo $peper; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කජු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cashewsu[]" value='<?php echo $cashews; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මිශ්‍ර වගාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mixed_cultivationu[]" value='<?php echo $mixed_cultivation; ?>'>
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
                    <h4 class="card-title">ප්‍රා.ලේ. කොට්ඨාස මට්ටමින් කෘෂිකාර්මික ඉඩම් පරිහරණය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වසමේ මුළු ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="total_land[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රජයේ ඉඩම් ප්‍රමාණය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="gov_land[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වී වගාව(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="paddy_land[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">තේ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tea[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පොල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="coconut[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">‍රබර්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="rubber[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ගම්මිරිස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="peper[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කජු</label>

                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="cashews[]" >
                          </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මිශ්‍ර වගාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mixed_cultivation[]" >
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





<!-- ===========================වී සහ අතිරේක භෝග වගාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='9'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වී සහ අතිරේක භෝග වගාව</h4>

                    <?php
    $q3 =$conn->query("SELECT * from cultivation_paddy WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $crops=$row['crops'];
      $area_yala=$row['area_yala'];
      $area_maha=$row['area_maha'];
      $harvest_yala=$row['harvest_yala'];
      $harvest_maha=$row['harvest_maha'];
      ?>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භෝගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cropsu[]" value='<?php echo $crops; ?>'>
                        </div>

                       
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-යල(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_yalau[]" value='<?php echo $area_yala; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-මහ(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_mahau[]" value='<?php echo $area_maha; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න-යල(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_yalau[]" value='<?php echo $harvest_yala; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වැන්න-මහ(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_mahau[]" value='<?php echo $harvest_maha; ?>'>
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
                    <h4 class="card-title">වී සහ අතිරේක භෝග වගාව</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භෝගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="crops[]" >
                        </div>

                       
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-යල(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_yala[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-මහ(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_maha[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න-යල(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_yala[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වැන්න-මහ(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_maha[]" >
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



              
<!-- ===========================එලවළු හා අල භෝග වගාව ================================== -->
<?php 
$type=$_GET['type'];
if($type=='10'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">එලවළු හා අල භෝග වගාව </h4>

                    <?php
    $q3 =$conn->query("SELECT * from cultivation_vegetables WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $crops=$row['crops'];
      $area_yala=$row['area_yala'];
      $area_maha=$row['area_maha'];
      $harvest_yala=$row['harvest_yala'];
      $harvest_maha=$row['harvest_maha'];
      ?>
                    
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භෝගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cropsu[]" value='<?php echo $crops; ?>'>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-යල(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_yalau[]" value='<?php echo $area_yala; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-මහ(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_mahau[]" value='<?php echo $area_maha; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න-යල(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_yalau[]" value='<?php echo $harvest_yala; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වැන්න-මහ(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_mahau[]" value='<?php echo $harvest_maha; ?>'>
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
                    <h4 class="card-title">එලවළු හා අල භෝග වගාව </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භෝගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="crops[]" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-යල(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_yala[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය-මහ(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area_maha[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න-යල(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_yala[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වැන්න-මහ(මෙ.ටො.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest_maha[]" >
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





<!-- ===========================පළතුරු වගාව ================================== -->
<?php 
$type=$_GET['type'];
if($type=='11'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">පළතුරු වගාව </h4>

                    <?php
    $q3 =$conn->query("SELECT * from cultivation_fruit WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $fruit=$row['fruit'];
      $area=$row['area'];
      $harvest=$row['harvest'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පළතුරු වර්ගය</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="fruitu[]" value='<?php echo $fruit; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="areau[]" value='<?php echo $area; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">අස්වැන්න(මෙ.ටො.)</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="harvestu[]" value='<?php echo $harvest; ?>'>
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
                    <h4 class="card-title">පළතුරු වගාව </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">පළතුරු වර්ගය</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="fruit[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="area[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">අස්වැන්න(මෙ.ටො.)</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="harvest[]" >
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




<!-- ===========================කුළුබඩු හා වෙනත් භෝග වගාව ================================== -->
<?php 
$type=$_GET['type'];
if($type=='12'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">කුළුබඩු හා වෙනත් භෝග වගාව </h4>

                    <?php
    $q3 =$conn->query("SELECT * from cultivation_spices WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $crops=$row['crops'];
      $area=$row['area'];
      $harvest=$row['harvest'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කුළුබඩු හා වෙනත් භෝග වර්ගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="cropsu[]" value='<?php echo $crops; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="areau[]" value='<?php echo $area; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න(කි.ග්‍රැ.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvestu[]" value='<?php echo $harvest; ?>'>
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
                    <h4 class="card-title">කුළුබඩු හා වෙනත් භෝග වගාව </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කුළුබඩු හා වෙනත් භෝග වර්ගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="crops[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අස්වද්දන ලද බිම් ප්‍රමාණය(හෙක්.)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="area[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අස්වැන්න(කි.ග්‍රැ)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="harvest[]" >
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





<!-- ===========================කාබනික පොහොර නිපදවන ස්ථාන පිළිබද තොරතුරු ================================== -->
<?php 
$type=$_GET['type'];
if($type=='13'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">කාබනික පොහොර නිපදවන ස්ථාන පිළිබද තොරතුරු </h4>

                    <?php
    $q3 =$conn->query("SELECT * from organic_fertilizer WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $production_company=$row['production_company'];
      $addres=$row['addres'];
      $contact=$row['contact'];
      $annual_production=$row['annual_production'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිෂ්පාදන ආයතනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="production_companyu[]" value='<?php echo $production_company; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ලිපිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="addresu[]" value='<?php echo $addres; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">දු.ක. අංකය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="contactu[]" value='<?php echo $contact; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වාර්ෂික නිෂ්පාදන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="annual_productionu[]" value='<?php echo $annual_production; ?>'>
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
                    <h4 class="card-title">කාබනික පොහොර නිපදවන ස්ථාන පිළිබද තොරතුරු </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිෂ්පාදන ආයතනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="production_company[]" >
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

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">වාර්ෂික නිෂ්පාදනය(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="annual_production[]" >
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




              <!-- ===========================ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති කෘෂිකර්ම ජලාශ ================================== -->
<?php 
$type=$_GET['type'];
if($type=='14'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති කෘෂිකර්ම ජලාශ</h4>

                    <?php
    $q3 =$conn->query("SELECT * from agricultural_reservoirs WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id']; 
      $water_capacity=$row['water_capacity'];
      $holding_area=$row['holding_area'];
      $surface_size=$row['surface_size'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජල ධාරිතාව(අක්කර අඩි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="water_capacityu[]" value='<?php echo $water_capacity; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ධාරී ප්‍රදේශය (අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="holding_areau[]" value='<?php echo $holding_area; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මතුපිට විශාලත්වය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="surface_sizeu[]" value='<?php echo $surface_size; ?>'>
                        </div>
                      </div>

                      <?php echo "<input type='hidden' id='custId' name='year14u[]' value='$year'>"; ?>
                      <?php echo "<input type='hidden' id='custId' name='id14[]' value='$id'>"; ?>
                   
                    </div>

                    <?php } ?>

                </div>
              </div>
            
              </div>
              <!-- <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'> -->
              <center>  <button type="submit" class="btn btn-gradient-info me-2" name="update14" onClick="return confirm('Do you want to submit this form?')">Update</button></center>  

              </form>

              <?php } else { ?>


              <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ප්‍රා.ලේ.කොට්ඨාසය තුල ඇති කෘෂිකර්ම ජලාශ </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජල ධාරිතාව (අක්කර අඩි)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="water_capacity[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ධාරී ප්‍රදේශය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="holding_area[]" >
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මතුපිට විශාලත්වය(අක්කර)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="surface_size[]" >
                        </div>                      
                      </div>


                      <?php echo "<input type='hidden' id='custId' name='year14[]' value='$year'>"; ?>
                   
                    </div>
                </div>
              </div>
            
              </div>
              <input type='button' id='but_add' class="btn btn-gradient-dark btn-sm" style="float:right" value='Add new'>
              <center>  <button type="submit" class="btn btn-gradient-primary me-2" name="submit14" onClick="return confirm('Do you want to submit this form?')">Submit</button></center>  

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