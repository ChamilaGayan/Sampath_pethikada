<?php session_start();
require_once('../../include/config.php');

    //Code for Registration 

    if(isset($_POST['signup']))
    { 
        $uname=$_POST['uname'];

        $gnd=$_POST['gnd'];
        $ds=$_POST['ds'];
        $role=$_POST['role'];

        $nic=$_POST['nic'];
        $contact=$_POST['contact'];
        $designation=$_POST['designation'];
        
        $password=$_POST['password'];
        $enc_password=md5($password);
        $sql=mysqli_query($conn,"select id from users where nic='$nic'");
        $row=mysqli_num_rows($sql);

        if($row>0)
        {
          echo "<script>alert('User already exist with another account. Please try again');</script>";
        } else{
            $msg=mysqli_query($conn,"insert into users(uname,nic,contact,password,uploaded_on,role,ds,gnd,designation) values('$uname','$nic','$contact','$enc_password',NOW() ,'$role','$ds','$gnd','$designation')");

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#ds").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getuser.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){
                      
                      var len = response.length;

                        $("#gnd").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['name'];
                            $("#gnd").append("<option value='"+id+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>


  </head>
  <body>
    <div class="container-scroller">
    <?php include 'include/navbar.php'; ?>
      
      <div class="container-fluid page-body-wrapper full-page-wrapper">

      <?php include 'include/sidebar.php' ?>
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-10 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                 </center> <h4>Create Users</h4></center>
                </div>

               
                <form action="" name="registration" method="post" class="signin-form" enctype="multipart/form-data"> 

                <div class="form-group">
                <select class="form-control" name="role" id="role">
                      <option value="">Select Role</option>
                      <option value="gnd">Grama Niladhari</option>
                      <option value="ds">Divisional Secretariat</option>  
                      <option value="dist">District Secretariat</option>
                                   
                    </select>
                    </div>





                    <div class="form-group">
                   
                     

   <select id="ds" name="ds" class="form-control">
   <option value="">Select Divisional Secretariat</option>
   <?php
   // Fetch Department
   $sql_department = "SELECT * FROM divsec";
   $department_data = mysqli_query($conn,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['divno'];
      $depart_name = $row['divna'];
      
      // Option
      echo "<option value='".$departid."' >".$depart_name."</option>";
   }
   ?>
</select>

					   <!-- <input type="text" class="form-control"  name="ds" placeholder="ප්‍රා. ලේ. කොට්ටාශය " required="required" oninvalid="this.setCustomValidity('කරුණාකර ප්‍රාදේශීය ලේකම් කොට්ටාශය ඇතුලත් කරන්න')"oninput="setCustomValidity('')"> -->
                      </div>
                     
                      <div class="form-group">
                     
                      

                      <select id="gnd" name="gnd" class="form-control">
                      <option value="">Select Grama Niladhari</option>
                      </select>

					   <!-- <input type="text" class="form-control" name="gnd" placeholder="ග්‍රාම නිලධාරී වසම " required="required" oninvalid="this.setCustomValidity('කරුණාකර ග්‍රාම නිලධාරී වසම ඇතුලත් කරන්න')"oninput="setCustomValidity('')"> -->
                    

                   
                    </div>









                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="uname" placeholder="Full Name" required="required" oninvalid="this.setCustomValidity('කරුණාකර නම ඇතුලත් කරන්න')"oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nic" placeholder="Nic No" required="required" oninvalid="this.setCustomValidity('කරුණාකර නිවැරදි ජා.හැ.අංකය ඇතුලත් කරන්න')" pattern="[0-9]{9}[vV]{1}|[0-9]{12}" oninput="setCustomValidity('')">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="contact" placeholder="Contact No" required="required" oninvalid="this.setCustomValidity('කරුණාකර අංක 10කින් සමන්විත දුරකතන අංකය ඇතුලත් කරන්න')"  pattern="[0]{1}[0-9]{9}" oninput="setCustomValidity('')">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="designation" placeholder="Designation">
                  </div>
                 
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                     
                  </div>
                  <div class="mt-3">
                   <center> 
                   <button  class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="signup" type="submit">Create User</button>
                   </center>
                  </div>
                  <!-- <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a> -->
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
    <?php include '../../include/footer.php'; ?>
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