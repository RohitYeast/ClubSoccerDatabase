<?php

    $equipmentID = $_GET["EquipmentID"];

    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
    $result = mysqli_query($con,"SELECT * FROM Users where EquipmentID='".$equipmentID);

     while($row = mysqli_fetch_array($result))
      {
     
?>
     
     <form action="view.php?job=update" method="post">
       NumCones: <input type="number" name="NumCones" value='<?php echo $row['NumCones'];?>'><br>
       NumPinnies: <input type="number" name="NumPinnies" value='<?php echo $row['NumPinnies'];?>'><br>
       TeamName: <input type="text" name="TeamName" value='<?php echo $row['TeamName'];?>'><br>
       EquipmentID: <input type="number" name="EquipmentID" value='<?php echo $row['EquipmentID'];?>'><br>
       <input type="submit" value="Update">
    </form>
      
<?php

    }

    mysqli_close->$con;
?>
