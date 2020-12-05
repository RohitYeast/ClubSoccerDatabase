<?php
// Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 
    if ($_GET["job"] == "update"){

        $id = $_POST["VolunteerID"];
        $role = $_POST["Role"];
        $al = $_POST["AccessLevel"];
 
        $result = mysqli_query($con,"UPDATE Volunteer SET VolunteerID ='".$id. "' WHERE Role ='". $role. "' WHERE AccessLevel ='" . $al.);
    }
  
    if ($_GET["job"] == "delete"){
        $id = $_GET["VolunteerID"]
        $result = mysqli_query($con,"DELETE from Volunteer WHERE VolunteerID='". $id.);
    }

    $result = mysqli_query($con,"SELECT * FROM Volunteer");

    echo "<table border='1'>
    <tr>
    <th>VolunteerID</th>
    <th>Role</th>
    <th>AccessLevel</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['VolunteerID'] . "</td>";
        echo "<td>" . $row['Role'] . "</td>";
        echo "<td>" . $row['AccessLevel'] . "</td>";
        echo "<td><a href='updateVolunteer.php?ID= " . $row['VolunteerID'] . "'>Update</a></td>";
        echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='viewVolunteer.php?job=delete&amp;ID= " . $row['VolunteerID'] . "'>DELETE</a></td>";
  
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
?>



