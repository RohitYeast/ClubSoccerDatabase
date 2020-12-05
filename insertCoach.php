<?php
    
    $id = $_POST["CoachID"];
    $tname = $_POST["TeamName"];
    $rcards = $_POST["RedCards"];
    $ycards = $_POST["YellowCards"];
    $suspensions = $_POST["Suspensions"];
    $cq = $_POST["CoachingQualifications"];
    

    echo $id. "<br>". $tname. "<br>". $rcards. "<br>". $ycards. "<br>". $suspensions. "<br>". $cq. "<br>"

    // Create connection
    $con = mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $sql = "INSERT INTO Coach (CoachID, TeamName, RedCards, YellowCards, Suspensions, CoachingQualifications) VALUES ('". $id."', '". $tname."', '". $rcards."','". $ycards."''". $suspensions."', '"$cq."')";
         
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
          
    echo "Coach successfully added to ". $tname;

    mysqli_close($con);
            
?>

