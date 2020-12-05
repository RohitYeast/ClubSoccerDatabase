<?php

    $trainerName = $_POST["TrainerName"];
    $company = $_POST["Company"];
    $cost = $_POST["Cost"];
    
    // Create connection
    $con= new mysqli("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $sql = "INSERT INTO Trainer (TrainerName, Company, Cost) VALUES ('". $trainerName."', '". $company."', '". $cost."')";
    
    
     if (!mysqli_query($con,$sql))
      {
      die('Error: ' . mysqli_error($con));
      }
      
    echo "1 record added";

    mysqli_close($con);
        
    ?>



