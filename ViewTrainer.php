<?php
    // Create connection
    $con=mysqli_connect("localhost","root","123456","471");

    if (mysqli_connect_errno($con))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    if ($_GET["job"] == "update")
    {
        $trainerName = $_POST["TrainerName"];
        $company = $_POST["Company"];
        $cost = $_POST["Cost"];
        
        $result = mysqli_query($con, "UPDATE Trainer SET TrainerName = '".$trainerName."' WHERE Company = '".$company."' WHERE Cost = '".$cost."'");
    }

    if ($_GET["job"] == "delete")
    {
        $trainerName = $_POST["TrainerName"];
        $company = $_POST["Company"];
        $result = mysqli_query($con,"DELETE FROM Trainer WHERE TrainerName = '".$trainerName."' WHERE Company = '".$company."'");
    }
    
    $result = mysqli_query($con,"SELECT * FROM Trainer");
    
    echo "<table border='1'><tr><th>TrainerName</th><th>Company</th><th>Cost</th></tr>";
    
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['TrainerName'] . "</td>";
            echo "<td>" . $row['Company'] . "</td>";
            echo "<td>" . $row['Cost'] . "</td>";
            echo "<td><a href='update.php?ID= " . $row['TrainerName'] . "'>Update</a></td>";
            echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='view.php?job=delete&amp;ID= " . $row['TrainerName'] . "'>DELETE</a></td>";
            echo "</tr>";
        }
    echo "</table>";
    mysqli_close($con);
?>
