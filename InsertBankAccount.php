<?php

$accountNumber = $_POST["AccountNumber"];
$branchNo = $_POST["BranchNo"];
$institutionNo = $_POST["InstitutionNo"];

// Create connection
$con= new mysqli("localhost","root","desiree00","CNSClubDatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql = "INSERT INTO BankAccount (AccountNumber, BranchNo, InstitutionNo) VALUES ('". $accountNumber."', '". $branchNo."', '". $InstitutionNo."')";
 
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added";

mysqli_close($con);
    
?>
