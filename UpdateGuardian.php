<?php

    $phone = $_GET["Phone"];

    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
    $result = mysqli_query($con,"SELECT * FROM Guardian where Phone='".$phone);

     while($row = mysqli_fetch_array($result))
      {
     
?>
     
     <form action="view.php?job=update" method="post">
       Email: <input type="text" name="Email" value='<?php echo $row['Email'];?>'><br>
       Relationship: <input type="text" name="Relationship" value='<?php echo $row['Relationship'];?>'><br>
       Phone: <input type="number" name="Phone" value='<?php echo $row['Phone'];?>'><br>
       <input type="submit" value="Update">
    </form>
      
<?php

    }

    mysqli_close->$con;
?>
