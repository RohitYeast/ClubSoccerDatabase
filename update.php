<?php

    $fname = $_GET["FirstName"];
    $lname = $_GET["LastName"];

    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
    $result = mysqli_query($con,"SELECT * FROM Users where FirstName='".$fname "', . Lastname= '".$lname);

     while($row = mysqli_fetch_array($result))
      {
     
?>
     
     <form action="view.php?job=update" method="post">
//       <input name="ID" type="hidden" value=<?php echo $row['ID'];?>>
       FirstName: <input type="text" name="FirstName" value='<?php echo $row['FirstName'];?>'><br>
       LastName: <input type="text" name="LastName" value='<?php echo $row['LastName'];?>'><br>
        Phone: <input type="text" name="Phone" value='<?php echo $row['Phone'];?>'><br>
        Gender: <input type="text" name="Gender" value='<?php echo $row['Gender'];?>'><br>
        E-mail: <input type="text" name="Email" value='<?php echo $row['Email'];?>'><br>
       <input type="submit" value="Update">
    </form>
      
<?php

    }

    mysqli_close->$con;
?>


