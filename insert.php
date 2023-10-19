<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lr";

$con = new mysqli($host, $user, $pass, $db);

// get the post records
$name = $_POST['ur'];
$email = $_POST['er'];
$password = $_POST['ep'];

// database insert SQL code
$qry = "INSERT INTO `register` (`ID`, `Name`, `Email`, `Password`) VALUES ('0','$name', '$email', '$password')";

// insert in database 
$insert = mysqli_query($con, $qry);
if(!$insert){
echo"There are some problem while inserting data";
}
else{
echo"Registered Successfully";
}
?>