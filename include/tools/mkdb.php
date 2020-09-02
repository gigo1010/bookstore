<?php

include "../config.php";
// Create connection
$conn = new mysqli($host, $user, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE bookdb";

if (mysqli_query($conn, $sql)) {
  echo "Db created successfully";
} else {
  echo "Error creating Db: " . mysqli_error($conn);
}

$conn->close();

?>
