<?php

$phone = $_POST["Phone"];
$email = $_POST["Email"];
$relationship = $_POST["Relationship"];

// Create connection
$con= new mysqli("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if ($con->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql = "INSERT INTO Gaurdian (Phone, Email, Relationship) VALUES ('". $phone."', '". $email."', '". $relationship."')";
 
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . $con->connect_error);
  }
  
echo "1 record added";

mysqli_close($con);
    
?>