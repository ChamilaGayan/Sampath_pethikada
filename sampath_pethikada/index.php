<?php
session_start();
require_once('include/config.php');
error_reporting(0);

// Code for login 
if(isset($_POST['login']))
{
 $password=$_POST['password'];
 $dec_password=md5($password); 
 $nicno=$_POST['nic'];
 $sql="SELECT * FROM users WHERE nic='$nicno' and password='$dec_password'";
$ret= mysqli_query($conn,$sql);
$num=mysqli_fetch_array($ret);
$_SESSION['id']=$num['id'];
$_SESSION['role']=$num['role'];
if($num>0)
{
  
	if($num["role"]=="dist")
	{
	$_SESSION["email"]=$useremail;
	header("location:user/dist/index.php");
	}

	elseif ($num["role"]=="ds")
	{
		$_SESSION["email"]=$useremail;
		header("location:user/ds/index.php");
	}

  elseif ($num["role"]=="gnd")
	{
		$_SESSION["email"]=$useremail;
		header("location:user/gnd/index.php");
	}

  elseif ($num["role"]=="admin")
	{
		$_SESSION["email"]=$useremail;
		header("location:user/admin/index.php");
	}
  

	}
	else
	{
	echo "<script>alert('ජා.හැ.අංකය හෝ මුරපදය වැරදියි');</script>";
	echo '<script type="text/javascript">location.href = "index.php";</script>';
	exit();
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
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                                <center><img src="assets/images/favicon.ico" width="70" height="100"></center> 

                <div class="brand-logo">

                  <center><h3>සම්පත් පැතිකඩ</h3></center>
                </div>
               <center> <h4>Hello! let's get started</h4></center>
               <center>   <h6 class="font-weight-light">Sign in to continue.</h6></center>
               <form action="" name="registration" method="post" class="signin-form" enctype="multipart/form-data"> 
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nic" placeholder="Nic No">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <center><input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="login" value="SIGN IN" ></center>
                  <!-- <center> <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="index.html">SIGN IN</a></center>  -->
                  </div>
                
                  <!-- <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Create</a> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="ssets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>