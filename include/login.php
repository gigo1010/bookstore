<?php

include "config.php";

$errors = array();

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// LOGIN USER
if (isset($_POST['login_btn'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $passd = mysqli_real_escape_string($conn, $_POST['pass_login']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($passd)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$query = "SELECT * FROM members WHERE EmailUser='$username' AND PwdUsers='$passd'";
  	$results = mysqli_query($conn, $query);
    $row_cnt = mysqli_num_rows($results);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../members.php');
  	}else {
      header('location: ../index.html');
  	}
  }
}

?>
