<?php
// Create connection
$con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
if ($_GET["job"] == "update"){

    $phone = $_POST["Phone"];
    $email = $_POST["Email"];
    $relationship = $_POST["Relationship"];
 
    $result = mysqli_query($con,"update Guardian set Phone='".$phone. "' where Email ='". $email. "' where Relationship ='" . $relationship."');

} 
  
if ($_GET["job"] == "delete"){
    $Phone = $_GET["Phone"];
    $result = mysqli_query($con,"Delete from BankAccount where Phone='". $Phone."');

}

$result = mysqli_query($con,"SELECT * FROM BankAccount");

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Phone'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Relationship'] . "</td>";
  echo "<td><a href='UpdateGuardian.php?Phone= " . $row['Phone'] . "'>Update</a></td>";
  echo "<td><a onClick= \"return confirm('Do you want to delete this Guardian?')\" href='ViewGuardian.php?job=delete&amp;Phone= " . $row['Phone'] . "'>DELETE</a></td>";
  
  echo "</tr>";
  }
echo "</table>";




mysqli_close($con);
?>