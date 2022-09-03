<?php
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

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    $password=$_POST["currentPassword"];
    $dec_password=md5($password);

    $npassword=$_POST["newPassword"];
    $enc_password=md5($npassword);
     
    if ($dec_password == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . $enc_password . "' WHERE id='" . $_SESSION["id"] . "'");
        $message = "Password Changed Successfully!";
    } else
        $message = "Current Password is not correct";
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
                  <i class="mdi mdi-key"></i>
                </span> Change Your Password Here
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
            </div>



<center>
            
  <form name="frmChange" method="post" action=""
    onSubmit="return validatePassword()">
    <div style="width: 500px;">
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <table border="0" cellpadding="10" cellspacing="0"
            width="500" align="center" class="tblSaveForm">
            <tr class="tableheader">
                <td colspan="2" style="color:black;font-size:25px">Change Password</td>
            </tr>
            <tr>
                <td width="40%"><label>Current Password</label></td>
                <td width="60%"><input type="password"
                    name="currentPassword" class="txtField" /><span
                    id="currentPassword" class="required"></span></td>
            </tr>
            <tr>
                <td><label>New Password</label></td>
                <td><input type="password" name="newPassword"
                    class="txtField" /><span id="newPassword"
                    class="required"></span></td>
            </tr>
            <td><label>Confirm Password</label></td>
            <td><input type="password" name="confirmPassword"
                class="txtField" /><span id="confirmPassword"
                class="required"></span></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><br><input type="submit" name="submit"
                    value="Submit" class="btn btn-md btn-gradient-success"></td>
            </tr>
        </table>
    
    </div>
</form>
</center>   
            
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