<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    include 'includes/config.php';
    $sel = "SELECT MAX(car_id)+1 as maxID FROM cars";
    $rs = $conn->query($sel);
    $rws = $rs->fetch_assoc();

    $path = "../Images/cabs/";
    $path = $path.$rws['maxID'].'car.jpg';
    

    $vehicleName = $_POST['vname'];
    $vehicleType = $_POST['type'];
    $cost = $_POST['cost'];
    $capacity = $_POST['cap'];
    $picturePath = $rws['maxID'].'car.jpg';
    $query ="INSERT INTO `cars` (`car_name`, `car_type`, `image`,`hire_cost`,`capacity`) VALUES ('$vehicleName', '$vehicleType','$picturePath','$cost','$capacity')";
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
?>