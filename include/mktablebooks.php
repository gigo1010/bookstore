<?php

include "config.php";
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE books (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(30) NOT NULL,
Author VARCHAR(30) NOT NULL,
Availability BOOLEAN(2) NULL,
Cost INT(10) NOT NULL,
CodeBook INT(30) NOT NULL,
Category VARCHAR(50) NOT NULL";

if (mysqli_query($conn, $sql)) {
  echo "Table books created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$conn->close();

?>
