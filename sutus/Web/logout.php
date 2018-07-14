<?php
	session_start();
	unset($_SESSION['uname']);
// Delete all session variables
session_destroy();

// Jump to login page

	header('Location: Login.php');
	exit();
	
?>