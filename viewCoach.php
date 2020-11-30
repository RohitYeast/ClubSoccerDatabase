<?php
// Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 
    if ($_GET["job"] == "update"){

        $id = $_POST["CoachID"];
        $tname = $_POST["TeamName"];
        $rcards = $_POST["RedCards"];
        $ycards = $_POST["YellowCards"];
        $suspensions = $_POST["Suspensions"];
        $cq = $_POST["CoachingQualifications"];
 
        $result = mysqli_query($con,"UPDATE Coach SET CoachID ='".$id. "' WHERE TeamName ='". $tname. "' WHERE RedCards ='" . $rcards. "' WHERE YellowCards = '". $ycards. "' WHERE Suspensions ='". $suspensions. "' WHERE CoachingQualifications = '" . $cq.);
    }
  
    if ($_GET["job"] == "delete"){
        $id = $_GET["CoachID"]
        $tname = $_GET["TeamName"];
        $result = mysqli_query($con,"DELETE from Coach WHERE CoachID='". $id. "' WHERE TeamName='" .$tname.);
    }

    $result = mysqli_query($con,"SELECT * FROM Coach");

    echo "<table border='1'>
    <tr>
    <th>CoachID</th>
    <th>TeamName</th>
    <th>RedCards</th>
    <th>YellowCards</th>
    <th>Suspensions</th>
    <th>CoachingQualifications</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['CoachID'] . "</td>";
        echo "<td>" . $row['TeamName'] . "</td>";
        echo "<td>" . $row['RedCards'] . "</td>";
        echo "<td>" . $row['YellowCards'] . "</td>";
        echo "<td>" . $row['Suspensions'] . "</td>";
        echo "<td>" . $row['CoachingQualifications'] . "</td>";
        echo "<td><a href='updateCoach.php?ID= " . $row['CoachID'] . "'>Update</a></td>";
        echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='viewCoach.php?job=delete&amp;ID= " . $row['CoachID'] . "'>DELETE</a></td>";
  
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
?>


