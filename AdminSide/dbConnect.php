<?php
	/*connection string*/

	$dbServerName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "lautechhotel";

	$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>