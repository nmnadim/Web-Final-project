<?php

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

echo  $fname;
echo  $lname;
echo  $email;
echo  $contact;
echo  $address;

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
$query = "INSERT INTO contact(First_Name, Last_name, Email, Contact, Address)
      values('$fname', '$lname', '$email', '$contact', '$address')";

$run = mysqli_query($con, $query);
if(!$run) {
  echo 'Subbmission Failed';
}
else {
  echo 'Submission Successfull';
}

?>
