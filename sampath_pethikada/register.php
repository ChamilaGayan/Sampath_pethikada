<?php session_start();
require_once('include/config.php');

    //Code for Registration 

    if(isset($_POST['signup']))
    { 
        $uname=$_POST['uname'];
        $nic=$_POST['nic'];
        $contact=$_POST['contact'];
        $password=$_POST['password'];
        $enc_password=md5($password);
        $sql=mysqli_query($conn,"select id from users where nic='$nic'");
        $row=mysqli_num_rows($sql);

        if($row>0)
        {
          echo "<script>alert('User already exist with another account. Please try again');</script>";
        } else{
            $msg=mysqli_query($conn,"insert into users(uname,nic,contact,password,uploaded_on) values('$uname','$nic','$contact','$enc_password',NOW())");

            if($msg)
            {
              echo "<script>alert('Registration successfully');</script>";
              echo '<script type="text/javascript">location.href = "index.php";</script>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
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
                <div class="brand-logo">
                 </center> <h3>සම්පත් පැතිකඩ</h3></center>
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form action="" name="registration" method="post" class="signin-form" enctype="multipart/form-data"> 
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="uname" placeholder="Username" required="required" oninvalid="this.setCustomValidity('කරුණාකර ඔබගේ නම ඇතුලත් කරන්න')"oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nic" placeholder="Nic No" required="required" oninvalid="this.setCustomValidity('කරුණාකර ඔබගේ නිවැරදි ජා.හැ.අංකය ඇතුලත් කරන්න')" pattern="[0-9]{9}[vV]{1}|[0-9]{12}" oninput="setCustomValidity('')">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="contact" placeholder="Contact No" required="required" oninvalid="this.setCustomValidity('කරුණාකර ඔබගේ අංක 10කින් සමන්විත දුරකතන අංකය ඇතුලත් කරන්න')"  pattern="[0]{1}[0-9]{9}" oninput="setCustomValidity('')">
                  </div>
                 
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                     
                  </div>
                  <div class="mt-3">
                   <center> 
                   <button  class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="signup" type="submit">SIGN UP</button>
                   </center>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a>
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>