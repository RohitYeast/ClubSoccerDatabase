<?php
// Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 
    if ($_GET["job"] == "update"){

        $id = $_POST["ManagerID"];
        $tname = $_POST["TeamName"];
        $avail = $_POST["Availability"];
        $an = $_POST["AccountNumber"];
 
        $result = mysqli_query($con,"UPDATE Manager SET ManagerID ='".$id. "' WHERE TeamName ='". $tname. "' WHERE Availability ='" . $avail. "' WHERE AccountNumber = '".$an.);
    }
  
    if ($_GET["job"] == "delete"){
        $id = $_GET["ManagerID"]
        $result = mysqli_query($con,"DELETE from Manager WHERE ManagerID ='". $id.);
    }

    $result = mysqli_query($con,"SELECT * FROM Manager");

    echo "<table border='1'>
    <tr>
    <th>ManagerID</th>
    <th>TeamName</th>
    <th>Availability</th>
    <th>AccountNumber</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['ManagerID'] . "</td>";
        echo "<td>" . $row['TeamName'] . "</td>";
        echo "<td>" . $row['Availability'] . "</td>";
        echo "<td>" . $row['AccountNumber'] . "</td>";
        echo "<td><a href='updateManager.php?ID= " . $row['ManagerID'] . "'>Update</a></td>";
        echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='viewManager.php?job=delete&amp;ID= " . $row['ManagerID'] . "'>DELETE</a></td>";
  
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
?>




