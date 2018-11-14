<?php

ob_start();
session_start();

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

$sql = "SELECT fname FROM accounts where stud_num like {$_SESSION['stud_num']}";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["stud_num"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
