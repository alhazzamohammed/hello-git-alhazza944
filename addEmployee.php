<?php
session_start();

$localhost = 'localhost';
$dusername = 'root';
$dpassword = 'root';
$database = 'hospital';
$connection = new mysqli($localhost , $dusername , $dpassword,$database);
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
echo "<pre>";

$EmpID = $_POST['EmpID'];
$SSN = $_POST['SSN'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$PhoneNumber = $_POST['PhoneNumber'];
$Salary = $_POST['Salary'];
$JobTitle = $_POST['JobTitle'];
$Password = $_POST['Password'];
/*
echo $name;
echo "<pre>";
echo $pass;
echo "<pre>";
*/
 
	 // $quiry = "SELECT  position FROM login WHERE Name = '$Name' AND Password = '$Pass'";
	      //  $quiry = "INSERT INTO `employee`(`id`, `Name`, `JobTitle`, `Password`) VALUES ('$ID','$Name','$JobTitle','$Password')" ;
       $quiry = "INSERT INTO `employee`(`EmpID`, `SSN`, `Fname`, `Lname`, `PhoneNumber`, `Salary`, `Password`, `JobTitle`)";
       $quiry.= "VALUES('$EmpID','$SSN','$Fname','$Lname','$PhoneNumber','$Salary','$Password','$JobTitle')";


$result = mysqli_query($connection, $quiry);

if (!$result)
{
	echo "1";
    die("Query Faile".  mysqli_errno($connection));   
}

else {
	header( "location: admin.html" );
}

?>