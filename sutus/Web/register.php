<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <title>Sutus Cabs</title>
 <link rel="stylesheet" a href="css\font-awesome.min.css">
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
 margin-top: 10px;
 height: 30px;
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
 padding-top: 15px;
 position: absolute;
 font-size: 30px;
 color: #2980b9; 
}
 
.form-input:nth-child(2)::before{
 content: "\f023";
}

.form-input:nth-child(3)::before{
 content: "\f023";
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
 <img src="../Images/regman.png"/>
 <h2 style="color:#D6EAF8;">Register to Sutus Cabs</h2>
 <form action="action_register.php" method ="GET">
 <div class="form-input">
 <input id ="username" type="text" name="uname" placeholder="Enter the Username"/> 
 </div>
 <div class="form-input">
 <input id ="pass1" type="password" name="psw" placeholder="Password"/>
 </div>
 <div class="form-input">
 <input id ="pass2" type="password" name="confPsw" placeholder="Confirm Password"/>
 </div>
 <input type="submit" value="REGISTER" id="btn-register"/>
 
 </form>
 </div>

<script type="text/javascript">


document.getElementById("btn-register").onclick = function () {
    var user = document.getElementById('username').value;
    var passwd = document.getElementById('pass1').value;
    var confpass = document.getElementById('pass2').value;

    if((user !== '') && (passwd !=='') && (confpass !=='')){
        if(passwd==confpass){
            alert(user+" was Succssfully Registerd");
            return ture;
        }
        
        else{
            alert("Please Re-enter passwords");
            return false;
        } 
        
    }
    else{
        alert("Please Enter all the Fileds !!!");
        return false;
    }
        
        
    };


</script>
</body>
</html>



















