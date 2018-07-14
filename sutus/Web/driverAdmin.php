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

<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 12px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>


<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#formDiv {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin: 50px 100px 50px 100px ;
}
</style>
	  </head>
	 <body id="align">
   <?php
			include 'header.php';
		?>
<div class="container">
<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'Add')">Add</button>
  <button class="tablinks" onclick="openCity(event, 'Manage')">Manage</button>
</div>

<div id="Add" class="tabcontent" style="display:block;">
  <div id="formDiv">
  <img   style ="padding-left:10px;padding-right:10px " src="../Images/driver2.png">

  <h2>Add a Driver</h2><br/>
  <form enctype="multipart/form-data" action="actionAddDriver.php" method="POST">
    <label for="dname">Diver Name</label>
    <input type="text" id="dname" name="dname" placeholder="Driver Name..">

    <label for="type">Lincense Type</label>
    <select id="type" name="type">
      <option value="toyota">Cars</option>
      <option value="nissan">Dual Purpose</option>
      <option value="honda">Honda</option>
    </select>
    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="Age ...">

    <label for="age">Address</label>
    <input type="text" id="addrs" name="addrs" placeholder="Address ...">

    <label for="age">Contact No.</label>
    <input type="text" id="number" name="number" placeholder="Contact No ...">

    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Submit">
  </form>
</div>
</div>

<div id="Manage" class="tabcontent">
  
<div class="grid">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM drivers WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
       
        <article>
            <img src="../Images/drivers/<?php echo $rws['image'];?>" alt="Sample photo">
            <div class="text">
            <h4 class="pull-right"><?php echo $rws['licType'];?></h4><br>
            <h3><?php echo $rws['driver_name'];?></h3>
            <p><?php echo $rws['contactNo'];?></p>
            <button>Book Now</button>
            </div>
        </article>
			<?php
				}
			?>

</div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
	
</div> 
<div id="footer"><p align="center">All Rights Reserved</p></div></div>
		


	  </body>
</html>









