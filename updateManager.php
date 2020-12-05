<?php
    
    $id = $_GET["ManagerID"];
    
    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $result = mysqli_query($con,"SELECT * FROM Manager where ManagerID='".$id);
    
    while($row = mysqli_fetch_array($result))
        {
         
    ?>
         
    <form action="viewManager.php?job=update" method="post">
        <input name="ID" type="hidden" value=<?php echo $row['ManagerID'];?>>
        TeamName: <input type="text" name="TeamName" value='<?php echo $row['TeamName'];?>'><br>
        Availabilty: <input type="text" name="Availability" value='<?php echo $row['Availabilty'];?>'><br>
        AccountNumber: <input type="text" name="AccountNumber" value='<?php echo $row['AccountNumber'];?>'><br>
        <input type="submit" value="Update">
    </form>
          
    <?php

    }

    mysqli_close($con);
?>


