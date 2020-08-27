<?php
session_start();

include "config.php";

$errors = array();

// connect to the database
$db = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";

// REGISTER USER

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // receive all input values from the form
  $username = $_POST['email'];
  $email = $_POST['email'];
  $password_1 = $_POST['form_passd'];
  $password_2 = $_POST['form_rpassd'];
  $fname = $_POST['form_fname'];
  $lname = $_POST['form_lname'];
  $addr = $_POST['form_addr'];
  $sub = $_POST['form_suburb'];
  $postcode = $_POST['form_postcode'];
  $state = $_POST['state'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];


  //	$passd = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO members (FirstName, LastName, PwdUsers, EmailUser, AddrUsers, SubUsers, PCUsers, StateUsers, PhoneUsers, Genders) VALUES ('$fname','$lname','$passd','$email','$addr','$sub','$postcode','$state','$phone','$gender')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.html');

}
?>
