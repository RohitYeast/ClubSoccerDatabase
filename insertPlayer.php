<?php
    
    $id = $_POST["PlayerID"];
    $num = $_POST["Number"];
    $dob = $_POST["DateOfBirth"];
    $rcards = $_POST["RedCards"];
    $ycards = $_POST["YellowCards"];
    $suspensions = $_POST["Suspensions"];
    $tname = $_POST["TeamName"];

    echo $id, "<br>" $number. "<br>". $dob. "<br>". $rcards. "<br>". $ycards. "<br>". $suspensions. "<br>". $tname. "<br>"

    // Create connection
    $con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $sql = "INSERT INTO Player (PlayerID, Number, DateOfBirth, RedCards, YellowCards, Suspensions, TeamName) VALUES ('". $id."', '". $num."', '". $dob."', '". $rcards."','". $ycards."''". $suspensions."', '"$tname."')";
         
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con);
    }
          
    echo "Player successfully added to " .$tname.;

    mysqli_close($con);
            
?>
