 <?php
    // Create connection
        $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
     
        if ($_GET["job"] == "update"){

            $id = $_POST["ID"];
            $fname = $_POST["FirstName"];
            $lname = $_POST["LastName"];
            $phone = $_POST["Phone"];
            $gender = $_POST["Gender"];
            $email = $_POST["Email"];
     
            $result = mysqli_query($con,"UPDATE ClubMember SET ID ='".$id. "' WHERE FirstName ='". $fname. "' WHERE LastName ='" . $lname. "' WHERE Phone = '". $phone. "' WHERE Gender ='". $gender. "' WHERE Email = '" . $email.);
        }
      
        if ($_GET["job"] == "delete"){
            $id = $_GET["ID"];
            $fname = $_GET["FirstName"];
            $lname = $_GET["LastName"];
            $result = mysqli_query($con,"Delete from ClubMember where ID = '". $id."' FirstName='". $fname. "' where LastName='" .$lname.);
        }
     
        $result = mysqli_query($con,"SELECT * FROM ClubMember");

        echo "<table border='1'>
        <tr>
        <th>ClubID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Phone</>
        <th>Gender</th>
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
            echo "<td><a href='updateMember.php?ID= " . $row['ClubID'] . "'>Update</a></td>";
            echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='viewMember.php?job=delete&amp;ID= " . $row['ClubID'] . "'>DELETE</a></td>";
      
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
    ?>

?>

