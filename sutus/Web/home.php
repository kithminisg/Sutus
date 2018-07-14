
<! DOCTYPE.html>
<html>

      <head><title>Sutus Cabs</title>
	  
      <link rel="stylesheet" href="../Styles/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">		
	  <link href="../Styles/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../Styles/formCab.css" type="text/css" rel="stylesheet"/>
	  <style>
.grid { 
  display: grid;
  grid-template-columns:1fr 1fr 1fr 1fr;
  grid-gap: 20px;
  align-items: stretch;
  padding:10px;
  }
.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  width: 100%;
  height: 200px;
}
.text {
  padding: 0 20px 20px;
}
.text > button {
  background: gray;
  border: 0;
  color: white;
  padding: 10px;
  width: 100%;
  }

</style>

	  </head>
	 <body id="align">
   <?php
			include 'header.php';
		?>
<div class="container">

  
<div class="grid">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
       
  <article>
    <img src="../Images/cabs/<?php echo $rws['image'];?>" alt="Sample photo">
    <div class="text">
      <h4 class="pull-right"><?php echo 'Rs.'.$rws['hire_cost'];?></h4>
      <h3><?php echo $rws['car_name'];?></h3>
      <p><?php echo $rws['car_type'];?></p>
      <button>Book Now</button>
    </div>
  </article>
			<?php
				}
			?>

</div>
	
</div> 
<div id="footer"><p align="center">All Rights Reserved</p></div></div>
		


	  </body>
</html>



















