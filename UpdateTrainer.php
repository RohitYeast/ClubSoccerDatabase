
<?php

    $tname = $_GET["TrainerName"];
    $comp = $_GET["Company"];

    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
    $result = mysqli_query($con,"SELECT * FROM Trainer WHERE TrainerName='".$tname "', . Company= '". $comp"'");

    while($row = mysqli_fetch_array($result))
    {
         
?>
         
      <form action="view.php?job=update" method="post">
        TrainerName: <input type = "text" name = "TrainerName" value = '<?php echo $row['TrainerName'];?>'><br>
        Company: <input type = "text" name = "Company" value = '<?php echo $row['Company'];?>'><br>
        Cost: <input type = "number" name = "Cost" value = '<?php echo $row['Cost'];?>'><br>
        <input type="submit" value="Update">
      </form>
      
<?php
    }
    mysqli_close->$con;
?>
