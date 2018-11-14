
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


				if (isset($_POST['register_btn'])){

				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$stud_num = $_POST['stud_num'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$role = 'STUDENT';


					// Check for exisiting accounts

				$querystud_num = "SELECT * FROM accounts WHERE stud_num LIKE '$stud_num'";
				$resultstud_num = mysqli_query($conn, $querystud_num);
				$queryem = "SELECT * FROM accounts WHERE email LIKE '$email'";
				$resultem = mysqli_query($conn, $queryem);

					// Check if student credentials are valid

				$querystudent= "SELECT * FROM students WHERE fname LIKE '$fname' && lname LIKE '$lname' && stud_num LIKE '$stud_num'";
				$resultstudent = mysqli_query($conn, $querystudent);

					// Check if conditions are met

				if(mysqli_num_rows($resultstud_num) === 0){
					if(mysqli_num_rows($resultem) === 0){
						if(mysqli_num_rows($resultstudent) > 0){

								$sql = "INSERT INTO accounts (
									fname,
									lname,
									stud_num,
									email,
									password,
									role
								)

								VALUES (
								'$fname',
								'$lname',
								'$stud_num',
								'$email',
								'$password',
								'$role')";


								if ($conn->query($sql) === TRUE) {

									header('location:user-index');
									$_SESSION['stud_num'] = $_POST['stud_num'];
									$_SESSION['password'] = $_POST['password'];

								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}
							}

							else
							{
							function phpAlert($msg){
							echo '<script type="text/javascript">alert("' . $msg . '")</script>';
							}
							phpAlert( "Student not found!");
							}

		}
				else
			{
			function phpAlert($msg){
			echo '<script type="text/javascript">alert("' . $msg . '")</script>';
			}
			phpAlert( "Email already exists!");
			}
	}

					else
				{
				function phpAlert($msg){
				echo '<script type="text/javascript">alert("' . $msg . '")</script>';
				}
				phpAlert( "Student already exists!");
				}
}
								 ?>
