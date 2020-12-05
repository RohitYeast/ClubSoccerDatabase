<?php
    
    $id = $_POST["VolunteerID"];
    $role = $_POST["Role"];
    $acceslevel = $_POST["AcessLevel"];

    echo $role. "<br>". $accesslevel. "<br>"
    
    // Create connection
    $con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $sql = "INSERT INTO Volunteer (VolunteerID, Role, AccessLevel) VALUES ('".$id."', '". $role."', '". $accesslevel."')";
         
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
          
    echo "Volunteer successfully added as a " .$role.;

    mysqli_close($con);
            
?>


