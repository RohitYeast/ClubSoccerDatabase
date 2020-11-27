<?php

    $address = $_POST["Address"];
    $turfNotGrass = $_POST["TurfNotGrass"];
    $gameNotPractice = $_POST["GameNotPractice"];
    $teamName = $_POST["TeamName"];
    
    
    
    $con= new mysqli("localhost","root","desiree00","CNSClubDatabase");
    
    if ($con->connect_error)
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $sql = "INSERT INTO Field (Address, TurfNotGrass, GameNotPractice, TeamName) VALUES ('". $address."', '". $turfNotGrass."', '". $gameNotPractice."','". $teamName."')";
    
    if (!mysqli_query($con,$sql))
     {
     die('Error: ' . $con->connect_error);
     }
    
    echo "1 record added";

    mysqli_close($con);
        
    ?>
    
    
    
