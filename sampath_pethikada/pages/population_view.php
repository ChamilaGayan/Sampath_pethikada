

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
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
                  <i class="mdi mdi-account-multiple"></i>
                </span> ජනගහනය
                <?php 
    $year=$_GET['year'];
    echo"<br>";
    echo "<h5>$year වර්ෂය</h5>";
?>
              </h3>

            <form>
          
                      <div class="input-group">
                         <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">වර්ෂය තෝරන්න</button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="population_view.php?year=2019&&type=0">2019</a>
                            <a class="dropdown-item" href="population_view.php?year=2020&&type=0">2020</a>
                            <a class="dropdown-item" href="population_view.php?year=2021&&type=0">2021</a>
                            <a class="dropdown-item" href="population_view.php?year=2022&&type=0">2022</a>
                            <a class="dropdown-item" href="population_view.php?year=2023&&type=0">2023</a>
                            <a class="dropdown-item" href="population_view.php?year=2024&&type=0">2024</a>
                            <a class="dropdown-item" href="population_view.php?year=2025&&type=0">2025</a>
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
            



<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='1'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">මුලු ජනගහනය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ස්ත්‍රී</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female" placeholder="ස්ත්‍රී">
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">පුරුෂ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit1">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->


<!-- ============================================================= -->

<?php 
if($type=='2'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අධ්‍යාපන මට්ටම අනුව වැඩිහිටි ජනගහනය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පාසල් අධ්‍යාපනය නොලැබූ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_ne" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_ne" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">1-5 ශ්‍රේණි </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_1-5" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_1-5" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">6-10 ශ්‍රේණි </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_6-10" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_6-10" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">සා/පෙල දක්වා  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_ol" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_ol" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">උ/පෙල දක්වා  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_al" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_al" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">උපාධි/පශ්චාත් උපාධි/වෘත්තීය පුහුණු   </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_degree" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_degree" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit2">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='3'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ආගම අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">බෞද්ධ</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_buddhist" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_buddhist" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">හින්දු </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_tamil" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_tamil" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ඉස්ලාම් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_muslim" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_muslim" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">රෝමානු කතෝලික </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_rome" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_rome" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ක්‍රිස්තියානි </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_cristian" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_cristian" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_other" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_other" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit3">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>




<!-- ============================================================= -->
<?php 
if($type=='4'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">අංශය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label ">නාගරික</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_town" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_town" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ග්‍රාමීය </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_rural" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_rural" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වතු </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_estates" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_estates" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">භූමි ඝනත්වය </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="land_density" placeholder="හෙක්.">
                        </div>

                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ජන ඝනත්වය</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="population_density" placeholder="හෙක්.">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit4">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>





<!-- ============================================================= -->
<?php 
$type=$_GET['type'];
if($type=='5'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ඡන්ද හිමි නාමලේඛනය අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ඡන්ද හිමි සංඛ්‍යාව </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_vote" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_vote" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit5">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->




<!-- ============================================================= -->
<?php 
if($type=='6'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ආගම අනුව</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">සිංහල </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_sinhala" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_sinhala" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ශ්‍රිලංකා දෙමළ  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_sltamil" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_sltamil" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ඉන්දියානු දෙමළ  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_intamil" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_intamil" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ශ්‍රිලංකා යෝනක  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_sly" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_sly" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">බර්ගර්  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_brg" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_brg" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත් </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_otherpo" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_otherpo" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit6">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->




<!-- ============================================================= -->
<?php 
if($type=='7'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">වයස් කාණ්ඩය අනුව ජනගහනය </h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 0-5  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_0-5" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_0-5" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 6-14</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_6-14" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_6-14" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 15-18  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_15-18" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_15-18" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 19-35</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_19-35" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_19-5" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 36-60</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_36-60" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_36-60" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අවුරුදු 60ට වැඩි </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_60" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_60" placeholder="පුරුෂ">
                        </div>

                      </div>



                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit7">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='8'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විදේශගත ජනගහනය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">රැකියා </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_job" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_job" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">අධ්‍යාපන </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_edu" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_edu" placeholder="පුරුෂ">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">වෙනත්</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_otherfor" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_otherfor" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit8">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->



<!-- ============================================================= -->
<?php 
if($type=='9'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">විශ්‍රාමික ජනගහනය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">විශ්‍රාමිකයින් සංඛ්‍යාව  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_retirees" placeholder="ස්ත්‍රී">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_retirees" placeholder="පුරුෂ">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit9">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>

<!-- ============================================================= -->
<?php 
if($type=='10'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ස්ත්‍රී / පුරුෂ බාවය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">පුරුෂ </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_count" placeholder="සංඛ්‍යාව">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_percentage" placeholder="ප්‍රතිශතයක් ලෙස">
                        </div>

                      </div>


                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-4 col-form-label">ස්ත්‍රී  </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="female_count" placeholder="සංඛ්‍යාව">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="male_percentage" placeholder="ප්‍රතිශතයක් ලෙස">
                        </div>

                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit10">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
<!-- ============================================================= -->




<!-- ============================================================= -->
<?php 
if($type=='11'){
?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">යැපීම් අනුපාතය</h4>
                    <form class="forms-sample">

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">ළමා </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="child" placeholder="ළමා">
                        </div>
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">වයස්ගත </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="aging" placeholder="වයස්ගත">
                        </div>

                      </div>


                      <button type="submit" class="btn btn-gradient-primary me-2" name="edit11">Edit</button>
                      
                    </form>
                  </div>
                </div>
              </div>

<?php } ?>
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