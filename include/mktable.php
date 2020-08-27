<?php

include "config.php";
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE members (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(30) NOT NULL,
PwdUsers VARCHAR(30) NOT NULL,
EmailUser VARCHAR(50) NOT NULL,
AddrUsers VARCHAR(30) NOT NULL,
SubUsers VARCHAR(50) NOT NULL,
PCUsers VARCHAR(30) NOT NULL,
StateUsers VARCHAR(30) NOT NULL,
PhoneUsers VARCHAR(50) NOT NULL,
Genders VARCHAR(50) NOT NULL)";

if (mysqli_query($conn, $sql)) {
  echo "Table members created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$conn->close();

?>
