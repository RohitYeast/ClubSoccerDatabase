<?php

$equipmentID = $_POST["EquipmentID"];
$numCones = $_POST["NumCones"];
$numPinnies = $_POST["NumPinnies"];
$teamName = $_POST["TeamName"];

// Create connection
$con= new mysqli("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql = "INSERT INTO Equipment (EquipmentID, NumCones, NumPinnies, TeamName) VALUES ('". $equipmentID."', '". $numCones."', '". $numPinnies."','". $teamName."')";
 
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";

mysqli_close($con);
    
?>
