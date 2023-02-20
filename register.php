<?php

$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


echo  $uname;
echo  $email;
echo  $password;
echo  $cpassword;


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

mysqli_select_db($con, $db);
$query = "INSERT INTO register(Username, Email, Password, Re_password)
      values( '$uname', '$email', '$password', '$cpassword')";

$run = mysqli_query($con, $query);
if(!$run) {
  echo 'Registration Failed';
}
else {
  
  header('location:login.html');
}

?>
