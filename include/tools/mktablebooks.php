<?php

include "../config.php";
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE books (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(30) NULL,
Author VARCHAR(30) NULL,
Availability INT(2) NULL,
Cost FLOAT(10) NULL,
CodeBook INT(30) NULL,
Category VARCHAR(50) NULL,
Image VARCHAR(10) NULL)";

if (mysqli_query($conn, $sql)) {
  echo "Table books created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$conn->close();

?>
