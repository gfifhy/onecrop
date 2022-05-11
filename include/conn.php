<?php
	/*
	Storing databse information in variable
	Database name: onecrop
	servername: localhost
	username: root
	password:
	*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "onecrop";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("Error connecting to database: " . $conn->connect_error);
	}
?>


