<?php
$hostname = 'localhost';
$user = 'root';
$password = '';
$db = 'web_home';

$con = mysqli_connect($hostname, $user, $password);

if (!$con) {
  die('Connection Failed:'.mysqli_connect.erro());
}
else {
  echo 'Connection Successfull';
}
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   if(!empty($username) && !empty($password)){
      $sql = "SELECT * FROM register WHERE Username = '$username' AND Re_assword = '$password' ";
      $query = $con->query($sql);
      if($query->num_rows >0){
         echo 'found';
      }
      else{
         echo 'not found';
         echo $sql;
      }
   }
}



?>
