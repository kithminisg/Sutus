<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="images/png" href="../Images/taxi.png">
 <title>Sutus Cabs</title>
 <link rel="stylesheet" href="../Styles/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
 <style>

body{
 margin: 0 auto;
 background-image: url("../Images/kl.jpeg");
 background-repeat: no-repeat;
 background-size: 100% 720px;
}
 
.container{
 width: 500px;
 height: 450px;
 text-align: center;
 margin: 0 auto;
 background-color: rgba(44, 62, 80,0.7);
 margin-top: 160px;
}
 
.container img{
 width: 150px;
 height: 150px;
 margin-top: -60px;
}
 
input[type="text"],input[type="password"]{
 margin-top: 20px;
 height: 35px;
 width: 300px;
 font-size: 18px;
 margin-bottom: 20px;
 background-color: #fff;
 padding-left: 40px;
}

.form-input::before{
 content: "\f007";
 font-family: "FontAwesome";
 padding-left: 07px;
 padding-top: 25px;
 position: absolute;
 font-size: 35px;
 color: #2980b9; 
}
 
.form-input:nth-child(2)::before{
 content: "\f023";
}



 
.btn-login{
 padding: 15px 150px 15px 25px;
 border: none;
 background-color: #27ae60;
 color: #fff;
}

#btn-register{
 padding: 15px 25px ;
 border: none;
 background-color: #EC7063  
;
 color: #fff;
}
 </style>
</head>
<body>
 <div class="container">
 <img src="../Images/man2.png"/>
 <h2 style="color:#D6EAF8;">Login to Sutus Cabs</h2>
 <form action="action_login.php" method ="POST">
 <div class="form-input">
 <input type="text" name="uname" placeholder="Enter the Username"/> 
 </div>
 <div class="form-input">
 <input type="password" name="psw" placeholder="Password"/>
 </div>
 <input type="submit" value="LOGIN" class="btn-login"/>
 <input  value="REGISTER" id="btn-register"/>
 
 </form>
 
<script type="text/javascript">
    document.getElementById("btn-register").onclick = function () {
        location.href = "register.php";
    };
</script>
 </div>
</body>
</html>



















