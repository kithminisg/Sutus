<?php
	error_reporting("E-NOTICE");

	session_start();
 
	if (!isset($_SESSION['uname'])) {
		header('location:login.php');
		exit();
	}
?>
<header>
    <div style ="float:left ">
    <img   style ="padding-left:10px;padding-right:10px " src="../Images/cab.png">
    <img   style ="float:right; padding-top:15px" src="../Images/logo.png">
    </div>
    
    <div style="padding:5px;"align="right">
                  <h3 style="color:white;display:inline;">Welcome , </h3><h2 style="color:white;display:inline;"><?php echo $_SESSION['uname']; ?></h2>
                <?php if($_SESSION['role']==1)
                  echo '<img style="display:inline;"  alt="User Pic" src="../Images/admin.png" alt="..."id="profile-image1" ponsclass="img-circle img-resive">';
                  else if($_SESSION['role']==2)
                  echo '<img style="display:inline;" alt="User Pic" src="../Images/user.png" alt="..." id="profile-image1" class="img-circle img-responsive">';
                  else
                  echo '<img style="display:inline;" alt="User Pic" src="../Images/driver.png" alt="..." id="profile-image1" class="img-circle img-responsive">';
                  ?>               
                 
    </div>
</header>
    
    <ul id="menu">
   
   <?php 
    if($_SESSION['role']==1){
      // Admins' Functionalities
      echo '<li><a href="cabAdmin.php"><i class="fas fa-taxi"></i>&nbspCabs</a></li>
      <li><a href="#"><i class="fas fa-users"></i>&nbspUsers</a></li>
      <li><a href="driverAdmin.php"><i class="fas fa-user-tag"></i>&nbspDrivers</a></li>
      <li><a href="#"><i class="fas fa-file-alt"></i>&nbspReports</a></li>
      <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspLog out</a></li>';
    }
    else if($_SESSION['role']==2){
      // Users'
      echo '<li><a href="home.php"><i class="fas fa-home"></i></a></li>
      <li><a href="#"><i class="fas fa-taxi"></i>&nbspCabs</a></li>
      <li><a href="#"><i class="fas fa-users"></i>&nbspYour Trips</a></li>
      <li><a href="#"><i class="fas fa-users"></i>&nbspContacts</a></li>
      <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspLog out</a></li>';
      
    }
    else{
    // Divers' Functionalities
      echo '<li><a href="home.php"><i class="fas fa-home"></i></a></li>
      <li><a href="locations.php"><i class="fas fa-map-marker-alt"></i>&nbspMap</a></li>      
      <li><a href="#"><i class="fas fa-taxi"></i>&nbspHires</a></li>
      <li><a href="#"><i class="fas fa-taxi"></i>&nbspCabs</a></li>
      <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspLog out</a></li>';


    }
      
   ?> 
   </ul>