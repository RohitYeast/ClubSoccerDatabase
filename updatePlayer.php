<?php
    
    $id = $_GET["PlayerID"];
    
    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $result = mysqli_query($con,"SELECT * FROM Player where PlayerID='".$id);
    
    while($row = mysqli_fetch_array($result))
        {
         
    ?>
         
    <form action="viewPlayer.php?job=update" method="post">
        <input name="ID" type="hidden" value=<?php echo $row['PlayerID'];?>>
        Number: <input type="text" name="Number" value='<?php echo $row['Number'];?>'><br>
        DateOfBirth: <input type="text" name = "DateOfBirth" value='<?php echo $row['DateOfBirth'];?>'><br>
        RedCards: <input type="text" name="RedCards" value='<?php echo $row['RedCards'];?>'><br>
        YellowCards: <input type="text" name="YellowCards" value='<?php echo $row['YellowCards'];?>'><br>
        Suspensions: <input type="text" name="Suspensions" value='<?php echo $row['Suspensions'];?>'><br>
        TeamName: <input type="text" name="TeamName" value='<?php echo $row['TeamName'];?>'><br>
        <input type="submit" value="Update">
    </form>
          
    <?php

    }

    mysqli_close($con);
?>


