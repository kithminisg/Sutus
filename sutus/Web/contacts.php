<! DOCTYPE.html>
<html>
      <head><title>Contacts</title>
	  <script type="text/javascript">
				   function validation(){
				 var tpn = document.getElementById( "telpn" );
				  var email=document.getElementById( "mail" );
				   var x=(tpn.value).length;
				  var a = (email.value).split("@");
				  
				  
					if(x<=15)
					   {
					      if(a[0]!= "")
						  	window.alert("Thanks for comments");
							else
								window.alert("Email Address is invalid. \n Please re enter. \n It should be like this  ####@####.###"); 
								}
					 
					else
					 
					  {
					  if(a[0]== "")
						  	window.alert("Email Address and Telephone No are invalid. \n Please re enter.");
							else
								window.alert("Your Telephone No is invalid.\n Please enter it again.");
					 }
					
					return 0; }
					
					function checkEmptyFields(){
					var tpn = document.getElementById( "telpn" );
				    var email=document.getElementById( "mail" );
				    var tpn = document.getElementById( "telpn" );
				    var email=document.getElementById( "mail" );
					}
					 
					 
					 </script>
	  <link href="../Styles/styles.css" type="text/css" rel="stylesheet"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  </head>
	 <body class="style_class1" id="align">
	
	<div id="wrapper"><div id="header"><marquee><img src = "../Images/1234.png"></marquee></div>
	  <div id="nav"><ul id="menu">
	  	<li><a href="home.php"><i class="fa fa-home"></i></a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="Projects.php">Skills</a></li>
		<li><a href="Gallery.php">Gallery</a></li>
		<li><a href="contacts.php">Contacts</a></li>
		<li><a href="Login.php">Login</a></li>
		</ul></div>
	  <!-- <span><img src="../Images/cabs3.jpg" align ="center" width="1000px" height="250px"></img></span> -->

	<div class="container">
			<div id="align1">
					<form name ="form1" action="rsegister.php" method="post">
					<h1>Contact Form</h1>
					<label>Name:</label>
				   <input type= "text" name="First name" placeholder="First name" />
				  <input type ="text"  name="Second Name"  placeholder="Second name"/>
	   
	   <br /><br /><br />
	   
					 <label>Comment:</label></br>
					<textarea name = "comments" rows = "8" cols = "60"></textarea>
	   <br /><br /><br />
				   
					<label>Gender : </label>
				   <select name = "gender">
					 <option selected ="selected" ></option>
					  <option value="M" >Male</option>  
					  <option value ="F">Female</option>
					  </select>
	   <br /><br /><br />
	   
						  <label>Contact number :</label>
						  <input type ="text" id="telpn" placeholder="+94"/>
						  
	   
	   <br /><br /><br />
	   
	   
					  <label>Email :</label>
					  <input type ="text" id="mail"/>
						  <br /><br /><br />
		<input type = "submit" value = "Submit" id="nav" onClick="validation()"/>
		<input type = "button" value = "Cancel" id="nav">
	   </form><br /><br />
	   <h3>Contact Me</h3><ul><li>e-mail :144065V@uom.lk</li>
							  <li>Tel    :0112858688</li></ul>
	   
			</div> 
		   <div id="footer"><p align="center">All Rights Reserved</p></div>
		   </div>
	</div>

	  </body>
</html> 