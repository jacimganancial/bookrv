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

$_SESSION['acc_num'] = $_POST['acc_num'];
$_SESSION['password'] = $_POST['password'];

$acc_num  = $_SESSION['acc_num'];
$pass = $_SESSION ['password'];

$sql = "SELECT fname FROM accounts where stud_num LIKE '%" . mysqli_real_escape_string($conn, $acc_num) . "'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $displayname = $row["fname"];
    }
} else {
    echo "0 results";
}
        $msg = '';

        if (isset($_POST['signin_btn']) && !empty($_POST['acc_num'])
           && !empty($_POST['password'])) {

             $querysignin = "SELECT * FROM accounts WHERE stud_num LIKE '$acc_num' && password LIKE '$pass'";
             $resultsignin = mysqli_query($conn, $querysignin);

             if(mysqli_num_rows($resultsignin) > 0)
              {

                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();

                echo 'You have entered valid use name and password';

               header ('location:admin-home');
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
