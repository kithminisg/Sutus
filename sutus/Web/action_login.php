<?php

include 'includes/config.php';

$uname = $_POST['uname'];
$pass = $_POST['psw'];

$query = "SELECT * FROM users WHERE uname = '$uname' AND pass = '$pass'";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();
if($num > 0){
	session_start();
	$_SESSION['uname'] = $rows['uname'];
	$_SESSION['pass'] = $rows['pass'];
	$_SESSION['role'] = $rows['role'];
	
	if($_SESSION['role']==1){
		header("location:cabAdmin.php");
	}
	else if($_SESSION['role']==2){
		header("location:home.php");
	}
	else{
		header("location:locations.php");
	}
	
    exit();					
				
} else{
	echo "<script type = \"text/javascript\">
				alert(\"Login Failed. Try Again................\");
				window.location = (\"login.php\");
				</script>";
}

?>