<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "student";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  define('CONFIG_PATH','http://localhost:8081/student_registration/')

?>
















































