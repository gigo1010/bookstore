<?php

session_start();

session_destroy(); // Destroying All Sessions
unset($_SESSION['username']);
header("Location: ../index.php"); // Redirecting To Home Page

?>
