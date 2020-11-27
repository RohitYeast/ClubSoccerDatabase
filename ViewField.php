<?php
    // Create connection
    $con=mysqli_connect("localhost","root","123456","471");
    
    if (mysqli_connect_errno($con))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if ($_GET["job"] == "update")
    {
        $address = $_POST["Address"];
        $turfNotGrass = $_POST["TurfNotGrass"];
        $gameNotPractice = $_POST["GameNotPractice"];
        $teamName = $_POST["TeamName"];
        
        $result = mysqli_query($con, "UPDATE Field SET Address='".$address."'WHERE TurfNotGrass = '".$turfNotGrass."'WHERE GameNotPractice = '".$gameNotPractice."'WHERE TeamName = '".$teamName."'");
    }
    
    if ($_GET["job"] == "delete"){
        
        $address = $_POST["Address"];
        $result = mysqli_query($con,"DELETE FROM Field WHERE Address='". $address."'");
    }

    $result = mysqli_query($con,"SELECT * FROM Field");
    
    echo "<table border='1'><tr><th>Address</th><th>TurfNotGrass</th><th>PracticeNotGame</th><th>TeamName</th></tr>";
    
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['TurfNotGrass'] . "</td>";
        echo "<td>" . $row['PracticeNotGame'] . "</td>";
        echo "<td>" . $row['TeamName'] . "</td>";
        echo "<td><a href='update.php?ID= " . $row['Address'] . "'>Update</a></td>";
        echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='view.php?job=delete&amp;ID= " . $row['Address'] . "'>DELETE</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
?>
