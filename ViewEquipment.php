<?php
// Create connection
$con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
if ($_GET["job"] == "update"){

    $numCones = $_POST["NumCones"];
    $numPinnies = $_POST["NumPinnies"];
    $teamName = $_POST["TeamName"];
    $equipmentID = $_POST["EquipmentID"];
 
    $result = mysqli_query($con,"update Equipment set NumCones='".$numCones. "' where NumPinnies ='". $numPinnies. "' where TeamName ='" . $teamName. "' where EquipmentID ='". $equipmentID."');

} 
  
if ($_GET["job"] == "delete"){
    $EquipmentID = $_GET["EquipmentID"];
    $result = mysqli_query($con,"Delete from Equipment where EquipmentID='". $EquipmentID."');

}

$result = mysqli_query($con,"SELECT * FROM Equipment");

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['EquipmentID'] . "</td>";
  echo "<td>" . $row['NumCones'] . "</td>";
  echo "<td>" . $row['NumPinnies'] . "</td>";
  echo "<td>" . $row['TeamName'] . "</td>";
  echo "<td><a href='UpdateEquipment.php?EquipmentID= " . $row['EquipmentID'] . "'>Update</a></td>";
  echo "<td><a onClick= \"return confirm('Do you want to delete this Equipment?')\" href='ViewEquipment.php?job=delete&amp;EquipmentID= " . $row['EquipmentID'] . "'>DELETE</a></td>";
  
  echo "</tr>";
  }
echo "</table>";




mysqli_close($con);
?>
