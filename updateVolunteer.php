<?php
    
    $id = $_GET["VolunteerID"];
    
    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $result = mysqli_query($con,"SELECT * FROM Volunteer where VolunteerID = '". $id);
    
    while($row = mysqli_fetch_array($result))
        {
    ?>
         
    <form action="viewVolunteer.php?job=update" method="post">
        <input name="ID" type="hidden" value=<?php echo $row['VolunteerID'];?>>
        Role: <input type="text" name="LastName" value='<?php echo $row['Role'];?>'><br>
        Acces Level: <input type="text" name="AccessLevel" value='<?php echo $row['AccessLevel'];?>'><br>
        <input type="submit" value="Update">
    </form>
          
    <?php

        }
    mysqli_close($con);
?>



