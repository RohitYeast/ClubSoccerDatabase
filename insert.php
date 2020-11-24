<?php

$fname = $_POST["FirstName"];
$lname = $_POST["LastName"];
$phono = $_POST["Phone"];
$gender = $_POST["Gender"];
$email = $_POST["Email"];

echo $name. "<br>". $email. "<br>";

// Create connection
$con= new mysqli("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if ($con->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql = "INSERT INTO users (FirstName, LastName, Phone, Gender, Email) VALUES ('". $fname."', '". $lname."', '". $phono."','". $gender."''". $email ."')";
 
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . $con->connect_error);
  }
  
echo "1 record added";

mysqli_close($con);
    
?>


