<?php 
$con=mysqli_connect("localhost","root","","joke_story"); 
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
//   echo "Connected successfully";
?>