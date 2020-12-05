<?php
    // Create connection
    $con=mysqli_connect("localhost","root","123456","471");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
    if ($_GET["job"] == "update")
    {
        
        $teamName = $_POST["TeamName"];
        $tier = $_POST["Tier"];
        $currentAgeGroup = $_POST["CurrentAgeGroup"];
        $accountNumber = $_POST["AccountNumber"];
        $trainerName = $_POST["TrainerName"];
        $trainerCompany = $_POST["TrainerCompany"];
        
        $result = mysqli_query($con,"UPDATE Team SET TeamName = '".$teamName."' WHERE Tier = '".$tier."' WHERE CurrentAgeGroup = '".$currentAgeGroup."' WHERE AccountNumber = '".$accountNumber."' WHERE TrainerName = '".trainerName."' WHERE TrainerCompany = '".$trainerCompany. "'");
    }
    
    if ($_GET["job"] == "delete")
    {
        $teamName = $_POST["TeamName"];
        $result = mysqli_query($con,"Delete FROM Team WHERE TeamName='".$teamName."'");
    }
    
    $result = mysqli_query($con,"SELECT * FROM Team");

    echo "<table border='1'><tr><th>TeamName</th><th>Tier</th><th>CurrentAgeGroup</th><th>AccountNumber</th><th>TrainerName</th><th>TrainerCompany</th></tr>";
    
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['TeamName'] . "</td>";
        echo "<td>" . $row['Tier'] . "</td>";
        echo "<td>" . $row['CurrentAgeGroup'] . "</td>";
        echo "<td>" . $row['AccountNumber'] . "</td>";
        echo "<td>" . $row['TrainerName'] . "</td>";
        echo "<td>" . $row['TrainerCompany'] . "</td>";
        echo "<td><a href='UpdateTeam.php?ID= " . $row['TeamName'] . "'>Update</a></td>";
        echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='ViewTeam.php?job=delete&amp;ID= " . $row['TeamName'] . "'>DELETE</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
