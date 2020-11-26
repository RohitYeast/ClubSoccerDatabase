<?php

    $accountNumber = $_GET["AccountNumber"];

    // Create connection
    $con=mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

    // Check connection
    if (mysqli_connect_errno($con))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
    $result = mysqli_query($con,"SELECT * FROM BankAccount where AccountNumber='".$accountNumber);

     while($row = mysqli_fetch_array($result))
      {
     
?>
     
     <form action="view.php?job=update" method="post">
       BranchNo: <input type="number" name="BranchNo" value='<?php echo $row['BranchNo'];?>'><br>
       InstitutionNo: <input type="number" name="InstitutionNo" value='<?php echo $row['InstitutionNo'];?>'><br>
       AccountNumber: <input type="number" name="AccountNumber" value='<?php echo $row['AccountNumber'];?>'><br>
       <input type="submit" value="Update">
    </form>
      
<?php

    }

    mysqli_close->$con;
?>
