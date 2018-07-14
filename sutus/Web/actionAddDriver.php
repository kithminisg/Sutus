<?PHP

  include 'includes/config.php';

  $sel2 = "SELECT MAX(user_id)+1 as maxID FROM users";
  $rs2 = $conn->query($sel2);
  $rws2 = $rs2->fetch_assoc();
  
  if(!empty($_FILES['uploaded_file']))
  {
    $sel = "SELECT MAX(id)+1 as maxID FROM drivers";
    $rs = $conn->query($sel);
    $rws = $rs->fetch_assoc();

    $path = "../Images/drivers/";
    $path = $path.$rws['maxID'].'driver.jpg';
    

    $driverName = $_POST['dname'];
    $licType = $_POST['type'];
    $addrs = $_POST['addrs'];
    $contact = $_POST['number'];
    $picturePath = $rws['maxID'].'driver.jpg';

    $user = $rws3['maxID'];
    $query3 ="INSERT INTO `users` (`uname`, `password`,`role`) VALUES ('$driverName','driver123','3')";
    $rs3 = $conn->query($query3);
    
    $query ="INSERT INTO `drivers` (`driver_name`, `licType`, `contactNo`,`address`,`userid`,`image`) VALUES ('$driverName', '$licType','$contact','$addrs','$user','$picturePath')";
    $rs = $conn->query($query);

    if($rs>0){
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path);
        header("location:home.php");
        exit();
    }

    else{
       
        header("location:home.php");
        exit();
    }

  }
  else{

    $driverName = $_POST['dname'];
    $licType = $_POST['type'];
    $addrs = $_POST['addrs'];
    $contact = $_POST['number'];

    $user = $rws3['maxID'];
    $query3 ="INSERT INTO `users` (`uname`, `password`,`role`) VALUES ('$driverName','driver123','3')";
    $rs3 = $conn->query($query3);
    
    $query ="INSERT INTO `drivers` (`driver_name`, `licType`, `contactNo`,`address`,`userid`) VALUES ('$driverName', '$licType','$contact','$addrs','$user')";
    $rs = $conn->query($query);

    header("location:home.php");
        exit();
   

  }
?>