<?php

$teamName = $_POST["TeamName"];
$tier = $_POST["Tier"];
$currentAgeGroup = $_POST["CurrentAgeGroup"];
$accountNumber = $_POST["AccountNumber"];
$trainerName = $_POST["TrainerName"];
$trainerCompany = $_POST["TrainerCompany"];

    // Create connection
    $con= new mysqli("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    
    $sql = "INSERT INTO Team (TeamName, Tier, CurrentAgeGroup, AccountNumber, TrainerName, TrainerCompany) VALUES ('". $teamName."', '". $tier."', '". $currentAgeGroup."','". $accountNumber."','". $trainerName. "','".$trainerCompany ."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";

mysqli_close($con);
    
?>
