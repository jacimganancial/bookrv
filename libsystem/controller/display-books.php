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


  $querysignin = "SELECT * FROM books";
  $resultsignin = mysqli_query($conn, $querysignin);


  while($row = mysqli_fetch_array($resultsignin))
  {
  echo "<tr>";
  echo "<td>" . $row['CopyBarcode'] . "</td>";
  echo "<td>" . $row['generated'] . "</td>";
  echo "</tr>";
  echo "<tr>";

  echo "</tr>";
  }
  echo "</table>";

?>
