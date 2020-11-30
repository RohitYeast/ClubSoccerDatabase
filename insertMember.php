<?php

    $fname = $_POST["FirstName"];
    $lname = $_POST["LastName"];
    $phone = $_POST["Phone"];
    $gender = $_POST["Gender"];
    $email = $_POST["Email"];

    echo $fname, "<br>" $lname. "<br>". $phone. "<br>". $gender. "<br>". $email. "<br>"

    // Create connection
    $con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $sql = "INSERT INTO ClubMember (ClubID, FirstName, LastName, Phone, Gender, Email) VALUES (NULL'". $fname."', '". $lname."', '". $phone."','". $gender."''". $email.)";
         
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con);
    }
          
            echo .$fname. " " . $lname. " successfully added to the club. Your club ID is " .
            mysqli_insert_id($con);

    mysqli_close($con);
            
?>
