<?php
// Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 
    if ($_GET["job"] == "update"){

        $id = $_POST["PlayerID"];
        $num = $_POST["Number"];
        $dob = $_POST["DateOfBirth"];
        $rcards = $_POST["RedCards"];
        $ycards = $_POST["YellowCards"];
        $suspensions = $_POST["Suspensions"];
        $tname = $_POST["TeamName"];
 
        $result = mysqli_query($con,"UPDATE Player SET PlayerID = '".$id "' WHERE Number ='".$num. "' WHERE DateOfBirth ='". $dob. "' WHERE RedCards ='" . $rcards. "' WHERE YellowCards = '". $ycards. "' WHERE Suspensions ='". $suspensions. "' WHERE TeamName = '" . $tname.);
    }
  
    if ($_GET["job"] == "delete"){
        $id = $_GET["PlayerID"]
        $fname = $_GET["FirstName"];
        $lname = $_GET["LastName"];
        $result = mysqli_query($con,"DELETE from Player WHERE PlayerID = '" .$id. "' WHERE Number='". $num. "' WHERE TeamName='" .$tname.);
    }

    $result = mysqli_query($con,"SELECT * FROM Player");

    echo "<table border='1'>
    <tr>
    <th>PlayerID</th>
    <th>Number</th>
    <th>DateOfBirth</th>
    <th>RedCards</th>
    <th>YellowCards</th>
    <th>Suspensions</th>
    <th>TeamName</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['PlayerID'] . "</td>";
        echo "<td>" . $row['Number'] . "</td>";
        echo "<td>" . $row['DateOfBirth'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td><a href='updatePlayer.php?ID= " . $row['PlayerID'] . "'>Update</a></td>";
        echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='viewPlayer.php?job=delete&amp;ID= " . $row['PlayerID'] . "'>DELETE</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
?>

