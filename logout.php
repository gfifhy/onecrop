<?php
	session_start();

	//destroying the session. Deletes all the session variables.
	session_destroy();
	//redirect to login page
	header('location: user/login.php');
?>