<?php
    
    $id = $_POST["ManagerID"];
    $tname = $_POST["TeamName"];
    $avail = $_POST["Availability"];
    $acc = $_POST["AccountNumber"];

    echo $id. "<br>". $tname. "<br>". $avail. "<br>". $acc. "<br>"
    
    // Create connection
    $con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $sql = "INSERT INTO Manager (ManagerID, TeamName, Availability, AccountNumber) VALUES ('".$id."', '". $tname."', '". $avail."', '". $acc."')";
         
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
          
    echo "Manager successfully added to " .$tname.;

    mysqli_close($con);
            
?>

