<?php
// Create connection
$con=mysqli_connect("localhost","root","123456","471");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
if ($_GET["job"] == "update"){

$lname = $_POST["LastName"];
$fname = $_POST["FirstName"];
    $phone = $_POST["Phone"];
    $gender = $_POST["Gender"];
$email = $_POST["Email"];
 
    $result = mysqli_query($con,"update Users set FirstName='".$fname. "' where LastName ='". $lname. "' where Phone ='" . $phone. "' where Gender = '". $gender. "' where email='". $email."'");

} 
  
if ($_GET["job"] == "delete"){
$fname = $_GET["FirstName"];
    $lname = $_GET["LastName"];
    $result = mysqli_query($con,"Delete from Users where FirstName='". $fname. "' where LastName='" .$lname."'");

}

$result = mysqli_query($con,"SELECT * FROM Users");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
      echo "<tr>";
      echo "<td>" . $row['ClubID'] . "</td>";
      echo "<td>" . $row['FirstName'] . "</td>";
      echo "<td>" . $row['LastName'] . "</td>";
      echo "<td>" . $row['Phone'] . "</td>";
      echo "<td>" . $row['Gender'] . "</td>";
      echo "<td>" . $row['Email'] . "</td>";
      echo "<td><a href='update.php?ID= " . $row['ClubID'] . "'>Update</a></td>";
      echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='view.php?job=delete&amp;ID= " . $row['ClubID'] . "'>DELETE</a></td>";
  
      echo "</tr>";
  }
echo "</table>";




mysqli_close($con);
?>
