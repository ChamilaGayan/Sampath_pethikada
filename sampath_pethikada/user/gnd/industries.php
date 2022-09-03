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

//registered_trading_companies
if(isset($_POST['submit1']))
{ 
  foreach($_POST['year1'] as $key => $year1){
    $grocery_store = $_POST['grocery_store'][$key];
    $supermarkets = $_POST['supermarkets'][$key];
    $restaurants = $_POST['restaurants'][$key];
    $shoes_textiles = $_POST['shoes_textiles'][$key];
    $vegetable_shop = $_POST['vegetable_shop'][$key];
    $pharmacy = $_POST['pharmacy'][$key];
    $house_items = $_POST['house_items'][$key];
    $electrical_equipment = $_POST['electrical_equipment'][$key];
    $shopping_goods = $_POST['shopping_goods'][$key];
    $building_materials = $_POST['building_materials'][$key];
    $liquor_stores = $_POST['liquor_stores'][$key];
    $jewelry = $_POST['jewelry'][$key];
    $books = $_POST['books'][$key];
    $car_parts = $_POST['car_parts'][$key];
    $other = $_POST['other'][$key];

    $sql="INSERT into registered_trading_companies (ds,userid,`year`,gnda,grocery_store,supermarkets,restaurants,shoes_textiles,vegetable_shop,pharmacy,house_items,electrical_equipment,shopping_goods,building_materials,liquor_stores,jewelry,books,car_parts,other) 
    VALUES ('".$ds."','".$uid."','".$year1."','".$gnd."','".$grocery_store."','".$supermarkets."','".$restaurants."','".$shoes_textiles."','".$vegetable_shop."','".$pharmacy."','".$house_items."','".$electrical_equipment."','".$shopping_goods."','".$building_materials."','".$liquor_stores."','".$jewelry."','".$books."','".$car_parts."','".$other."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=1&&year=$year1';</script>";
    }
}



//registered_manufacturing_industry
if(isset($_POST['submit2']))
{ 
  foreach($_POST['year2'] as $key => $year2){
    $mining = $_POST['mining'][$key];
    $foods = $_POST['foods'][$key];
    $textiles = $_POST['textiles'][$key];
    $wood = $_POST['wood'][$key];
    $paper = $_POST['paper'][$key];
    $chemicals = $_POST['chemicals'][$key];
    $minerals = $_POST['minerals'][$key];
    $metal = $_POST['metal'][$key];
    $other = $_POST['other'][$key];
    $water = $_POST['water'][$key];
   
    $sql="INSERT into registered_manufacturing_industry (ds,userid,`year`,gnda,mining,foods,textiles,wood,paper,chemicals,minerals,metal,other,water) 
    VALUES ('".$ds."','".$uid."','".$year2."','".$gnd."','".$mining."','".$foods."','".$textiles."','".$wood."','".$paper."','".$chemicals."','".$minerals."','".$metal."','".$other."','".$water."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=2&&year=$year2';</script>";
    }
}


//weekly_fair
if(isset($_POST['submit3']))
{ 
  foreach($_POST['year3'] as $key => $year3){
    $institution = $_POST['institution'][$key];
    $location = $_POST['location'][$key];
    $date = $_POST['date'][$key];
    
    $sql="INSERT into weekly_fair (ds,userid,`year`,gnda,institution,`location`,`date`) 
    VALUES ('".$ds."','".$uid."','".$year3."','".$gnd."','".$institution."','".$location."','".$date."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=3&&year=$year3';</script>";
    }
}


//large_scale_factories
if(isset($_POST['submit4']))
{ 
  foreach($_POST['year4'] as $key => $year4){
    $factory_name = $_POST['factory_name'][$key];
    $addres = $_POST['addres'][$key];
    $contact = $_POST['contact'][$key];
    $product = $_POST['product'][$key];
    $female = $_POST['female'][$key];
    $male = $_POST['male'][$key];
   
    $sql="INSERT into large_scale_factories (ds,userid,`year`,gnda,factory_name,addres,contact,product,female,male) 
    VALUES ('".$ds."','".$uid."','".$year4."','".$gnd."','".$factory_name."','".$addres."','".$contact."','".$product."','".$female."','".$male."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=4&&year=$year4';</script>";
    }
}



//products_endemic
if(isset($_POST['submit5']))
{ 
  foreach($_POST['year5'] as $key => $year5){
    $factory = $_POST['factory'][$key];
    $families = $_POST['families'][$key];
   
    $sql="INSERT into products_endemic (ds,userid,`year`,gnda,factory,families) 
    VALUES ('".$ds."','".$uid."','".$year5."','".$gnd."','".$factory."','".$families."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=5&&year=$year5';</script>";
    }
}



//fishing_industry
if(isset($_POST['submit6']))
{
  foreach($_POST['year6'] as $key => $year6){
    $major_reservoirs = $_POST['major_reservoirs'][$key];
    $central_reservoirs = $_POST['central_reservoirs'][$key];
    $small_reservoirs = $_POST['small_reservoirs'][$key];
    $seasonal_reservoirs = $_POST['seasonal_reservoirs'][$key];
    $ponds = $_POST['ponds'][$key];
   
    $sql="INSERT into fishing_industry (ds,userid,`year`,gnda,major_reservoirs,central_reservoirs,small_reservoirs,seasonal_reservoirs,ponds) 
    VALUES ('".$ds."','".$uid."','".$year6."','".$gnd."','".$major_reservoirs."','".$central_reservoirs."','".$small_reservoirs."','".$seasonal_reservoirs."','".$ponds."')";
    $insert = $conn->query($sql);
    }

    if($insert)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=6&&year=$year6';</script>";
    }
}

// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>
// <==============-------------------------===================>


// ========================update data==========================


//registered_trading_companies
if(isset($_POST['update1']))
{ 
  foreach($_POST['year1u'] as $key => $year1u){
    $id = $_POST['id1'][$key];
    $grocery_storeu = $_POST['grocery_storeu'][$key];
    $supermarketsu = $_POST['supermarketsu'][$key];
    $restaurantsu = $_POST['restaurantsu'][$key];
    $shoes_textilesu = $_POST['shoes_textilesu'][$key];
    $vegetable_shopu = $_POST['vegetable_shopu'][$key];
    $pharmacyu = $_POST['pharmacyu'][$key];
    $house_itemsu = $_POST['house_itemsu'][$key];
    $electrical_equipmentu = $_POST['electrical_equipmentu'][$key];
    $shopping_goodsu = $_POST['shopping_goodsu'][$key];
    $building_materialsu = $_POST['building_materialsu'][$key];
    $liquor_storesu = $_POST['liquor_storesu'][$key];
    $jewelryu = $_POST['jewelryu'][$key];
    $booksu = $_POST['booksu'][$key];
    $car_partsu = $_POST['car_partsu'][$key];
    $otheru = $_POST['otheru'][$key];
   
    $sql = "update registered_trading_companies set grocery_store='$grocery_storeu',supermarkets='$supermarketsu',restaurants='$restaurantsu',shoes_textiles='$shoes_textilesu',vegetable_shop='$vegetable_shopu',pharmacy='$pharmacyu',house_items='$house_itemsu',electrical_equipment='$electrical_equipmentu',shopping_goods='$shopping_goodsu',building_materials='$building_materialsu',liquor_stores='$liquor_storesu',jewelry='$jewelryu',books='$booksu',car_parts='$car_partsu',other='$otheru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=1&&year=$year1u';</script>";
    }
}



//registered_manufacturing_industry
if(isset($_POST['update2']))
{ 
  foreach($_POST['year2u'] as $key => $year2u){
    $id = $_POST['id2'][$key];
    $miningu = $_POST['miningu'][$key];
    $foodsu = $_POST['foodsu'][$key];
    $textilesu = $_POST['textilesu'][$key];
    $woodu = $_POST['woodu'][$key];
    $paperu = $_POST['paperu'][$key];
    $chemicalsu = $_POST['chemicalsu'][$key];
    $mineralsu = $_POST['mineralsu'][$key];
    $metalu = $_POST['metalu'][$key];
    $otheru = $_POST['otheru'][$key];
    $wateru = $_POST['wateru'][$key];
   
    $sql = "update registered_manufacturing_industry set mining='$miningu',foods='$foodsu',textiles='$textilesu',wood='$woodu',paper='$paperu',chemicals='$chemicalsu',minerals='$mineralsu',metal='$metalu',other='$otheru',water='$wateru' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=2&&year=$year2u';</script>";
    }
}


//weekly_fair
if(isset($_POST['update3']))
{ 
  foreach($_POST['year3u'] as $key => $year3u){
    $id = $_POST['id3'][$key];
    $institutionu = $_POST['institutionu'][$key];
    $locationu = $_POST['locationu'][$key];
    $dateu = $_POST['dateu'][$key];
    
    $sql = "update weekly_fair set institution='$institutionu',location='$locationu',date='$dateu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=3&&year=$year3u';</script>";
    }
}


//large_scale_factories
if(isset($_POST['update4']))
{ 
  foreach($_POST['year4u'] as $key => $year4u){
    $id = $_POST['id4'][$key];
    $factory_nameu = $_POST['factory_nameu'][$key];
    $addresu = $_POST['addresu'][$key];
    $contactu = $_POST['contactu'][$key];
    $productu = $_POST['productu'][$key];
    $femaleu = $_POST['femaleu'][$key];
    $maleu = $_POST['maleu'][$key];
   
    $sql = "update large_scale_factories set factory_name='$factory_nameu',addres='$addresu',contact='$contactu',product='$productu',female='$femaleu',male='$maleu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=4&&year=$year4u';</script>";
    }
}


//products_endemic
if(isset($_POST['update5']))
{ 
  foreach($_POST['year5u'] as $key => $year5u){
    $id = $_POST['id5'][$key];
    $factoryu = $_POST['factoryu'][$key];
    $familiesu = $_POST['familiesu'][$key];
   
    $sql = "update products_endemic set factory='$factoryu',families='$familiesu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=5&&year=$year5u';</script>";
    }
}



//fishing_industry
if(isset($_POST['update6']))
{ 
  foreach($_POST['year6u'] as $key => $year6u){
    $id = $_POST['id6'][$key];
    $major_reservoirsu = $_POST['major_reservoirsu'][$key];
    $central_reservoirsu = $_POST['central_reservoirsu'][$key];
    $small_reservoirsu = $_POST['small_reservoirsu'][$key];
    $seasonal_reservoirsu = $_POST['seasonal_reservoirsu'][$key];
    $pondsu = $_POST['pondsu'][$key];
   
    $sql = "update fishing_industry set major_reservoirs='$major_reservoirsu',central_reservoirs='$central_reservoirsu',small_reservoirs='$small_reservoirsu',seasonal_reservoirs='$seasonal_reservoirsu',ponds='$pondsu' where id='$id'";
    $update = $conn->query($sql);
    }

    if($update)
    {
      echo "<script>alert('Success!.');</script>";
      echo "<script type='text/javascript'>location.href='industries.php?type=6&&year=$year6u';</script>";
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
                  <i class="mdi mdi-truck-delivery"></i>
                </span> කර්මාන්ත වෙළද හා සේවා

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
                            <center><a class="dropdown-item" href="industries.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="industries.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="industries.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="industries.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="industries.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="industries.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="industries.php?year=2025&&type=0">2025</a>
                            <a class="dropdown-item" href="industries.php?year=2026&&type=0">2026</a>
                            <a class="dropdown-item" href="industries.php?year=2027&&type=0">2027</a>
                            <a class="dropdown-item" href="industries.php?year=2028&&type=0">2028</a>
                            <a class="dropdown-item" href="industries.php?year=2029&&type=0">2029</a>
                            <a class="dropdown-item" href="industries.php?year=2030&&type=0">2030</a></center>
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
                <?php echo "<a href='industries.php?type=1&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි කර ඇති වෙළද ආයතන ගණන</a>"; ?> 
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=2&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>ලියාපදිංචි කර ඇති නිෂ්පාදන කර්මාන්ත ආයතන සංඛ්‍යාව</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=3&&year=$year' class='btn btn-sm btn-gradient-primary' style='width:315px'>සතිපොල පිළිබද තොරතුරු</a>"; ?> 

                </div>
            </div>

        </div>

        <div class="row">
              
            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=4&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කොට්ඨාසය තුල පවතින මහා පරිමාණ කර්මාන්තශාලා</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=5&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>කොට්ඨාසයට ආවේණික නිෂ්පාදන</a>"; ?> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                <?php echo "<a href='industries.php?type=6&&year=$year' class='btn btn-sm btn-gradient-info' style='width:315px'>මිරිදිය ධීවර කර්මාන්තයේ ප්‍රභවය</a>"; ?> 

                </div>
            </div> 

        </div>

        </form>
            

<!-- ===========================ලියාපදිංචි කර ඇති වෙළද ආයතන ගණන ================================== -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ලියාපදිංචි කර ඇති වෙළද ආයතන ගණන </h4>


<?php 

  $q3 =$conn->query("SELECT * from registered_trading_companies WHERE userid='$uid' AND year='$year_update'");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $grocery_store=$row['grocery_store'];
    $supermarkets=$row['supermarkets'];
    $restaurants=$row['restaurants'];
    $shoes_textiles=$row['shoes_textiles']; 
    $vegetable_shop=$row['vegetable_shop']; 
    $pharmacy=$row['pharmacy'];
    $house_items=$row['house_items'];
    $electrical_equipment=$row['electrical_equipment'];
    $shopping_goods=$row['shopping_goods'];
    $building_materials=$row['building_materials'];
    $liquor_stores=$row['liquor_stores'];
    $jewelry=$row['jewelry'];
    $books=$row['books'];
    $car_parts=$row['car_parts'];
    $other=$row['other'];
?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිල්ලර කඩ සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grocery_storeu[]" value='<?php echo $grocery_store; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සුපිරි වෙළදසල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="supermarketsu[]" value='<?php echo $supermarkets; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආපනශාලා හා තේ කඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="restaurantsu[]" value='<?php echo $restaurants; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සපත්තු හා රෙදිපිළි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="shoes_textilesu[]" value='<?php echo $shoes_textiles; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මස්,මාළු හා එළවළු කඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="vegetable_shopu[]" value='<?php echo $vegetable_shop; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බෙහෙත්ශාලා හා ෆාමසි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pharmacyu[]" value='<?php echo $pharmacy; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලී හා යකඩ ගෘහ භාණ්ඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="house_itemsu[]" value='<?php echo $house_items; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලි උපකරණ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electrical_equipmentu[]" value='<?php echo $electrical_equipment; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සාප්පු බඩු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="shopping_goodsu[]" value='<?php echo $shopping_goods; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගොඩනැගිලි ද්‍රව්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="building_materialsu[]" value='<?php echo $building_materials; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මත්පැන්හල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="liquor_storesu[]" value='<?php echo $liquor_stores; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ස්වර්ණාභරණ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="jewelryu[]" value='<?php echo $jewelry; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පොත්පත් හා ලිපිද්‍රව්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="booksu[]" value='<?php echo $books; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් රථ අමතර කොටස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="car_partsu[]" value='<?php echo $car_parts; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

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
                    <h4 class="card-title">ලියාපදිංචි කර ඇති වෙළද ආයතන ගණන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සිල්ලර කඩ සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="grocery_store[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සුපිරි වෙළදසල් සංඛ්‍යාව</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="supermarkets[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ආපනශාලා හා තේ කඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="restaurants[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සපත්තු හා රෙදිපිළි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="shoes_textiles[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මස්,මාළු හ එළවළු කඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="vegetable_shop[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">බෙහෙත්ශාලා හා ෆාමසි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pharmacy[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ලී හා යකඩ ගෘහ භාණ්ඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="house_items[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">විදුලි උපකරණ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="electrical_equipment[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සාප්පු බඩු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="shopping_goods[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ගොඩනැගිලි ද්‍රව්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="building_materials[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">මත්පැන්හල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="liquor_stores[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ස්වර්ණාභරණ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="jewelry[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පොත්පත් හා ලිපිද්‍රව්‍ය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="books[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මෝටර් රථ අමතර කොටස්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="car_parts[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත්</label>

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


              
<!-- ===========================ලියාපදිංචි කර ඇති නිෂ්පාදන කර්මාන්ත ආයතන සංඛ්‍යාව================================== -->
<?php 
$type=$_GET['type'];
if($type=='2'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
  <!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ලියාපදිංචි කර ඇති නිෂ්පාදන කර්මාන්ත ආයතන සංඛ්‍යාව</h4>
                    
                    <?php
                      $q3 =$conn->query("SELECT * from registered_manufacturing_industry WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $mining=$row['mining'];
                        $foods=$row['foods'];
                        $textiles=$row['textiles'];
                        $wood=$row['wood'];
                        $paper=$row['paper'];
                        $chemicals=$row['chemicals'];
                        $minerals=$row['minerals'];
                        $metal=$row['metal'];
                        $other=$row['other'];
                        $water=$row['water'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පතල් හා කැනීම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="miningu[]" value='<?php echo $mining; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ආහාර,බීමවර්ග හා දුම්කොළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="foodsu[]" value='<?php echo $foods; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රෙදිපිළි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="textilesu[]" value='<?php echo $textiles; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දැව,ගෘහ භාණ්ඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="woodu[]" value='<?php echo $wood; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කඩදාසි නිෂ්පාදන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="paperu[]" value='<?php echo $paper; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රසායන ද්‍රව්‍ය,ඛනිජ තෙල්,රබර් හා ප්ලාස්ටික්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="chemicalsu[]" value='<?php echo $chemicals; ?>'>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අලෝහමය ඛණිජ නිශ්පාදන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mineralsu[]" value='<?php echo $minerals; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මූලික ලෝහ කර්මාන්ත මෙවලම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="metalu[]" value='<?php echo $metal; ?>'>
                        </div>

                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත් නිෂ්පාදන කර්මාන්ත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="otheru[]" value='<?php echo $other; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ජල ආශ්‍රිත කටයුතු හා ජල සැපයුම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="wateru[]" value='<?php echo $water; ?>'>
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
                    <h4 class="card-title">ලියාපදිංචි කර ඇති නිෂ්පාදන කර්මාන්ත ආයතන සංඛ්‍යාව</h4>
                      
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පතල් හා කැනීම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="mining[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">අහාර,බීමවර්ග හා දුම්කොළ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="foods[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">රෙදිපිළි</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="textiles[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">දැව,ගෘහ භාණ්ඩ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="wood[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කඩදාසි නිශ්පාදන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="paper[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">රසායන ද්‍රව්‍ය,ඛණිජ තෙල්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="chemicals[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">අලෝහමය ඛණිජ නිශ්පාදන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="minerals[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මූලික ලෝහ කර්මාන්ත මෙවලම්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="metal[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වෙනත් නිශ්පාදන කර්මාන්ත</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="other[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">ජල ආශ්‍රිත කටයුතු</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="water[]" >
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



<!-- ===========================සතිපොල පිළිබද තොරතුරු ================================== -->
<?php 
$type=$_GET['type'];
if($type=='3'){
?>

  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">සතිපොල පිළිබද තොරතුරු </h4>

                    <?php 
                      $q3 =$conn->query("SELECT * from weekly_fair WHERE userid='$uid' AND year='$year_update'");
                      if($q3 !== false && $q3->num_rows > 0){
                      while($row=$q3->fetch_assoc()){
                        $id=$row['id'];
                        $institution=$row['institution'];
                        $location=$row['location'];
                        $date=$row['date'];
                        ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පළාත් පාලන ආයතනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="institutionu[]" value='<?php echo $institution; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සතිපොල පිහිටි ස්ථානය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="locationu[]" value='<?php echo $location; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පැවැත්වෙන දිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="dateu[]" value='<?php echo $date; ?>'>
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
                    <h4 class="card-title">සතිපොල පිළිබද තොරතුරු </h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පළාත් පාලන ආයතනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="institution[]" >
                        </div>
      
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">සතිපොල පිහිටි ස්ථානය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="location[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පැවැත්වෙන දිනය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="date[]" >
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



<!-- ===========================කොට්ඨාසය තුල පවතින මහා පරිමාණ කර්මාන්තශාලා================================== -->
<?php 
$type=$_GET['type'];
if($type=='4'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">කොට්ඨාසය තුල පවතින මහා පරිමාණ කර්මාන්තශාලා</h4>

                    <?php
                        $q3 =$conn->query("SELECT * from large_scale_factories WHERE userid='$uid' AND year='$year_update'");
                        if($q3 !== false && $q3->num_rows > 0){
                        while($row=$q3->fetch_assoc()){
                          $id=$row['id'];
                          $factory_name=$row['factory_name'];
                          $addres=$row['addres'];
                          $contact=$row['contact'];
                          $product=$row['product'];
                          $female=$row['female'];
                          $male=$row['male'];
                          ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කර්මාන්තශාලාවේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="factory_nameu[]" value='<?php echo $factory_name; ?>'>
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

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නිෂ්පාදන වර්ගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="productu[]" value='<?php echo $product; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවක සංඛ්‍යාව - ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="femaleu[]" value='<?php echo $female; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="maleu[]" value='<?php echo $male; ?>'>
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
                    <h4 class="card-title">කොට්ඨාසය තුල පවතින මහා පරිමාණ කර්මාන්තශාලා</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කර්මාන්තශාලාවේ නම</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="factory_name[]" >
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

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">නිශ්පාදන වර්ගය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="product[]" >
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">සේවක සංඛ්‍යාව - ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male[]" >
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




<!-- ===========================කොට්ඨාසයට ආවේණික නිෂ්පාදන================================== -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">කොට්ඨාසයට ආවේණික නිෂ්පාදන</h4>

                    <?php
    $q3 =$conn->query("SELECT * from products_endemic WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $factory=$row['factory'];
      $families=$row['families'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිශ්පාදන කර්මාන්තය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="factoryu[]" value='<?php echo $factory; ?>'>
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කර්මාන්තයේ නියුතු පවුල් ගණන</label>

                          <div class="col-sm-4">
                          <input type="text" class="form-control" name="familiesu[]" value='<?php echo $families; ?>'>
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
                    <h4 class="card-title">කොට්ඨාසයට ආවේණික නිෂ්පාදන</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">නිශ්පාදන කර්මාන්තය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="factory[]" >
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කර්මාන්තයේ නියුතු පවුල් ගණන</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="families[]" >
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




<!-- ===========================මිරිදිය ධීවර කර්මාන්තයේ ප්‍රභවය================================== -->
<?php 
$type=$_GET['type'];
if($type=='6'){
?>


  <form action="" name="11" method="post" class="contact-form" enctype="multipart/form-data"> 
<!-- Submit -->
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මිරිදිය ධීවර කර්මාන්තයේ ප්‍රභවය</h4>

                    <?php
    $q3 =$conn->query("SELECT * from fishing_industry WHERE userid='$uid' AND year='$year_update'");
    if($q3 !== false && $q3->num_rows > 0){
    while($row=$q3->fetch_assoc()){
      $id=$row['id'];
      $major_reservoirs=$row['major_reservoirs'];
      $central_reservoirs=$row['central_reservoirs'];
      $small_reservoirs=$row['small_reservoirs'];
      $seasonal_reservoirs=$row['seasonal_reservoirs'];
      $ponds=$row['ponds'];
      ?>

                    <div class='input-form'>
                      <hr style="border: 2px dotted black">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රධාණ ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="major_reservoirsu[]" value='<?php echo $major_reservoirs; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මධ්‍යම ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="central_reservoirsu[]" value='<?php echo $central_reservoirs; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කුඩා ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="small_reservoirsu[]" value='<?php echo $small_reservoirs; ?>'>
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">කාලීන ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="seasonal_reservoirsu[]" value='<?php echo $seasonal_reservoirs; ?>'>
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පොකුණු හා වතු ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pondsu[]" value='<?php echo $ponds; ?>'>
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
                    <h4 class="card-title">මිරිදිය ධීවර කර්මාන්තයේ ප්‍රභවය</h4>
                    <div class='input-form'>
                      <hr style="border: 2px dotted black">


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ප්‍රධාණ ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="major_reservoirs[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">මධ්‍යම ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="central_reservoirs[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">කුඩා ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="small_reservoirs[]" >
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">කාලීන ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="seasonal_reservoirs[]" >
                        </div>

                      </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">පොකුණු හා වතු ජලාශ ප්‍රමාණය සහ අස්වැන්න(මෙ.ටො)</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ponds[]" >
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