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

$stud_num = $_POST['stud_num'];
$pass = $_POST['password'];

$_SESSION['stud_num'] = $stud_num;
$_SESSION ['password'] =  $pass;

$sql = "SELECT * FROM accounts where stud_num LIKE '%" . mysqli_real_escape_string($conn, $_SESSION['stud_num']) . "'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $displayname = $row["fname"];
    }
}
else {
    echo "0 results";
}

        $msg = '';

        if (isset($_POST['signin_btn']) && !empty($_POST['stud_num'])
           && !empty($_POST['password'])) {

             $querysignin = "SELECT * FROM accounts WHERE stud_num LIKE '$stud_num' && password LIKE '$pass'";
             $resultsignin = mysqli_query($conn, $querysignin);

             if(mysqli_num_rows($resultsignin) > 0)
              {

                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();

               header ('location:user-index');
             }
           else
           {
             function phpAlert($msg){
           echo '<script type="text/javascript">alert("' . $msg . '")</script>';
           }
           phpAlert( "Invalid Account");
           }
           }

?>
