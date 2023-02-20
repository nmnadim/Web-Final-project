<?php

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$hname = $_POST['house_name'];
$hnumber = $_POST['house_number'];

echo  $fname;
echo  $lname;
echo  $email;
echo  $contact;
echo  $address;
echo  $hname;
echo  $hnumber;

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
$query = "INSERT INTO booking(first_name, last_name, email, contact, address,house_name, house_number)
      values('$fname', '$lname', '$email', '$contact', '$address', '$hname', '$hnumber')";

$run = mysqli_query($con, $query);
if(!$run) {
  echo 'Booking Failed';
}
else {
  echo 'Booking Successfull';
}

?>
