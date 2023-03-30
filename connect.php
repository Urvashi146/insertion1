<?php
$servername = "localhost";
$username = "root";
$password = "home1234";
$dbname="demo";

$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$lname=$_REQUEST['lname'];
$hobby=$_REQUESTT['hobby'];
$city=$_REQUEST['city'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
$stmt= $conn->prepare ( "INSERT INTO form (fname,mname,lname,hobby,city,gender,address )
VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param(sssssss,$fname,$mname,$lname,$hobby,$city,$gender,$address);
$stmt->execute();
echo"reg done";
$stmt->close();
$conn->close();
}


?>

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "Connected successfully";