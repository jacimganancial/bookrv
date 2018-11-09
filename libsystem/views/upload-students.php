<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookrv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = 'Jacim Joash';
$lname = 'Ganancial';
$stud_num = '2015100740';

$sql = "INSERT INTO students (
  fname,
  lname,
  stud_num
)

VALUES (
'$fname',
'$lname',
'$stud_num')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
