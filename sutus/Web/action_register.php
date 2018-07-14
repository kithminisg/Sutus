<?php

include 'includes/config.php';

$uname = $_GET['uname'];
$pass = $_GET['psw'];
$query ="INSERT INTO `users` (`uname`, `pass`, `role`) VALUES ('$uname', '$pass', '2')";
$rs = $conn->query($query);

if($rs > 0){
	echo "<script type = \"text/javascript\">
				window.location = (\"login.php\")
				</script>";
				
} else{
    echo "<script type = \"text/javascript\">
    window.location = (\"register.php\")
    </script>";

}

?> 