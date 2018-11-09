<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookrv";

$msg='right username and password';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['signin_btn'])){

	$stud_num = $_POST['stud_num'];
	$pass = $_POST['password'];

  $querysignin = "SELECT * FROM accounts WHERE stud_num LIKE '$stud_num' && password LIKE '$pass'";
  $resultsignin = mysqli_query($conn, $querysignin);

  	if(mysqli_num_rows($resultsignin) > 0)
    {
      	echo '<script>window.location.href = "user-index";</script>';
    }

    else {

    

    }
  }
