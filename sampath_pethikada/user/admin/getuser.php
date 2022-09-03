<?php
require_once('../../include/config.php');

$departid = 0;
 
if(isset($_POST['depart'])){
   $departid = mysqli_real_escape_string($conn,$_POST['depart']); // department id
} 

$users_arr = array(); 
 
if($departid > 0){
   $aaaa = "SELECT gncode,gnname FROM matale WHERE divsec=".$departid;

   $result = mysqli_query($conn,$aaaa);

   while( $row = mysqli_fetch_array($result) ){
      $userid = $row['gncode'];
      $name = $row['gnname'];

      $users_arr[] = array("id" => $userid, "name" => $name);
   }
}
// encoding array to json format
echo json_encode($users_arr);