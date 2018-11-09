<?php
	$db_con = mysqli_connect('localhost', 'root', '', 'libsystem');

	//check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		//echo "Connection successful!";
	}
?>