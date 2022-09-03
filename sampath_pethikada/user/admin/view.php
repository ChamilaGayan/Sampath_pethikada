<?php
error_reporting(0);
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
$ds=$row["role"]; 
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
    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

<style>
  table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

table, tr, td, th {
  border: 1px solid gray;
}

th {
  vertical-align: top;
}

td:empty:after {
  content: "\00a0"; /* HTML entity of &nbsp; */
}
</style>

    <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
  
<script>

$(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
} );

function printSection(el){
    var getFullContent = document.body.innerHTML;
    var printsection = document.getElementById(el).innerHTML;
    document.body.innerHTML = printsection;
    window.print();
    document.body.innerHTML = getFullContent;
    }
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
                  <i class="mdi mdi-image-filter-hdr"></i>
                </span> View Users

              </h3>

             
                </div>



<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                  <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
                </div>
                <div class="table-responsive p-3">
                
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>ප්‍රා.ලේ</th>
                  <th>ග්‍රාම නිලධාරී වසම</th>
                  <th>දිනය</th>
                  <th>නම</th>
                  <th>ජා.හැ.අංකය</th>
                  <th>දු.ක.අංකය</th>
                  <th>කාර්යභාරය</th>
                </tr>
              </thead>
              <tbody>
<?php 
  $q3 =$conn->query("SELECT * from users");
  if($q3 !== false && $q3->num_rows > 0){
  while($row=$q3->fetch_assoc()){
    $id=$row['id'];
    $uname=$row['uname'];
    $nic=$row['nic'];
    $contact=$row['contact'];
    $role=$row['role'];
    $uploaded_on=$row['uploaded_on'];
    
  
    $gnd=$row['gnd']; 
    $ds=$row['ds'];

    $qq =$conn->query("SELECT * from matale WHERE gncode='$gnd'");
    if($qq !== false && $qq->num_rows > 0){
    while($row=$qq->fetch_assoc()){
      $gnname=$row['gnname'];
    }
}

    



    $qqq =$conn->query("SELECT * from divsec WHERE divno='$ds'");
    if($qqq !== false && $qqq->num_rows > 0){
    while($row=$qqq->fetch_assoc()){
      $divna=$row['divna'];
    }
}


?>
              
                <tr>
                <td><?php echo $divna; ?></td>
                <td><?php echo $gnname; ?></td>
                <td><?php echo $uploaded_on; ?></td>
                <td><?php echo $uname; ?></td>
                <td><?php echo $nic; ?></td>
		            <td><?php echo $contact; ?></td>
                    <td><?php echo $role; ?></td>
                </tr>   
                <?php }} ?>  
                </tbody>
                </table>

                </div>
              </div>
            </div>
          
         


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

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!-- End custom js for this page -->
  </body>
</html>