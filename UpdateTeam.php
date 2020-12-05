<?php

    $tname = $_GET["TeamName"];

    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");
    
    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

     $result = mysqli_query($con,"SELECT * FROM Team where TeamName='".$$tname"'");

    while($row = sqli_fetch_array($result))
    {
        
?>
        
      <form action = "ViewTeam.php?job=update" method="post">
        TeamName: <input type = "text" name = "TeamName" value = '<?php echo $row['TeamName'];?>'><br>
        Tier: <input type = "text" name = "Tier" value = '<?php echo $row['Tier'];?>'><br>
        CurrentAgeGroup: <input type = "text" name = "CurrentAgeGroup" value = '<?php echo $row['CurrentAgeGroup'];?>'><br>
        AccountNumber: <input type = "number" name = "AccountNumber" value = '<?php echo $row['AccountNumber'];?>'><br>
        TrainerName: <input type = "text" name = "TrainerName" value = '<?php echo $row['TrainerName'];?>'><br>
        TrainerCompany: <input type = "text" name = "TrainerCompany" value = '<?php echo $row['TrainerCompany'];?>'><br>
        <input type="submit" value="Update">
      </form>

<?php

    }

    mysqli_close($con);
?>
