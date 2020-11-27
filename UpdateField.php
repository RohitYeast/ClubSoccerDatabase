<?php

    $addy = $_GET["Address"];
    
    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
    $result = mysqli_query($con,"SELECT * FROM Field WHERE Address='".$addy "'");
    while($row = mysqli_fetch_array($result))
    {
         
?>
         
      <form action="view.php?job=update" method="post">
        Address: <input type = "text" name = "Address" value = '<?php echo $row['Address'];?>'><br>
        TurfNotGrass: <input type = "checkbox" name = "TurfNotGrass" value = '<?php echo $row['TurfNotGrass'];?>'><br>
        PracticeNotGame: <input type = "checkbox" name = "PracticeNotGame" value = '<?php echo $row['PracticeNotGame'];?>'><br>
        TeamName: <input type = "text" name = "TeamName" value = '<?php echo $row['TeamName'];?>'><br>
        <input type="submit" value="Update">
      </form>
      
<?php
    }
    mysqli_close->$con;
?>
