<?php
// Create connection
$con= mysqli_connect("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
if ($_GET["job"] == "update"){

    $accountNumber = $_POST["AccountNumber"];
    $branchNo = $_POST["BranchNo"];
    $institutionNo = $_POST["InstitutionNo"];
 
    $result = mysqli_query($con,"update BankAccount set AccountNumber='".$accountNumber. "' where BranchNo ='". $branchNo. "' where InstitutionNo ='" . $institutionNo."');

} 
  
if ($_GET["job"] == "delete"){
    $AccountNumber = $_GET["AccountNumber"];
    $result = mysqli_query($con,"Delete from BankAccount where AccountNumber='". $AccountNumber."');

}

$result = mysqli_query($con,"SELECT * FROM BankAccount");

                           echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
                           
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['AccountNumber'] . "</td>";
  echo "<td>" . $row['BranchNo'] . "</td>";
  echo "<td>" . $row['InstitutionNo'] . "</td>";
  echo "<td><a href='UpdateBankAccount.php?AccountNumber= " . $row['AccountNumber'] . "'>Update</a></td>";
  echo "<td><a onClick= \"return confirm('Do you want to delete this Bank Account?')\" href='ViewBankAccount.php?job=delete&amp;AccountNumber= " . $row['AccountNumber'] . "'>DELETE</a></td>";
  
  echo "</tr>";
  }
echo "</table>";




mysqli_close($con);
?>
