<?php
require_once('../../include/config.php');
if(!isset($_SESSION)) 
{ 
  session_start(); 
}
$id =  $_SESSION["id"] ;

$q = $conn->query("SELECT * from users WHERE id = $id");
if($q !== false && $q->num_rows > 0){
while($row=$q->fetch_assoc()){
 
$name=$row['uname'];
$role=$row['role'];
}
}
?>

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark bg-secondary">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
  <h4 class="btn btn-sm btn-gradient-info">District Secretariat Matale</h4>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-none d-md-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onClick="parent.location='index.php'">
                            <i class="mdi mdi-home-outline"></i>
                          </button>
          </div>
          &ensp;
          <div class="input-group-prepend bg-transparent">
          <button type="button" class="btn btn-inverse-dark btn-icon"  onClick="window.open('https://www.google.com/', '_blank')" >
                            <i class="mdi mdi-google"></i>
                          </button>
          </div>

           &ensp;
          <div class="input-group-prepend bg-transparent">
          <button type="button" class="btn btn-inverse-danger btn-icon" onClick="window.open('https://www.google.com/gmail/', '_blank')" >
                            <i class="mdi mdi-email-open"></i>
                          </button>
          </div>

          &ensp;
          <div class="input-group-prepend bg-transparent">
          <button type="button" class="btn btn-inverse-info btn-icon"  onClick="window.open('https://www.google.com/maps/', '_blank')">
                            <i class="mdi mdi-map-marker"></i>
                          </button>
          </div>

          &ensp;
          <div class="input-group-prepend bg-transparent">
          <button type="button" class="btn btn-inverse-success btn-icon" onClick="window.open('https://www.speedtest.net/', '_blank')" >
                            <i class="mdi mdi-signal text-info"></i>
                          </button>
          </div>
         
        </div>
      </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">
    
      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count-symbol bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Notifications</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-calendar"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
              <p class="text-gray ellipsis mb-0"> New record added</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="mdi mdi-settings"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
              <p class="text-gray ellipsis mb-0"> Update dashboard </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="mdi mdi-link-variant"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Profile</h6>
              <p class="text-gray ellipsis mb-0"> You can reset your password </p>
            </div>
          </a>
          </div>
      </li>
  
     

      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <!-- <img src="assets/images/faces/face1.jpg" alt="image"> -->
            
          </div>
          <div class="btn btn-sm btn-gradient-danger">
            <p class="mb-0 text-black"> <?php echo $name; ?></p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item" href="pw_change.php">
                  <i class="mdi mdi-key me-2 text-success"></i> Change Password </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../../logout.php">
            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
        </div>
      </li>

    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>














