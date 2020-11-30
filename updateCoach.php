<?php
    
    $id = $_GET["CoachID"];
    
    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
          
    $result = mysqli_query($con,"SELECT * FROM Coach where CoachID='" .$id);
    
    while($row = mysqli_fetch_array($result))
        {
         
    ?>
         
    <form action="viewCoach.php?job=update" method="post">
        <input name="ID" type="hidden" value=<?php echo $row['CoachID'];?>>
        TeamName: <input type="text" name="TeamName" value='<?php echo $row['TeamName'];?>'><br>
        RedCards: <input type="text" name="RedCards" value='<?php echo $row['RedCards'];?>'><br>
        YellowCards: <input type="text" name="YellowCards" value='<?php echo $row['YellowCards'];?>'><br>
        Suspensions: <input type="text" name="Suspensions" value='<?php echo $row['Suspensions'];?>'><br>
        CoachingQualifications: <input type="text" name="CoachingQualificataions" value='<?php echo $row['CoachingQualifications'];?>'><br>
        <input type="submit" value="Update">
    </form>
          
    <?php

    }

    mysqli_close($con);
?>

