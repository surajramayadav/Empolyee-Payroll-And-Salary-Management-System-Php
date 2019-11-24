<?php
error_reporting(0);
session_start();
include 'conn.php';

$id=$_SESSION["id"];
$sql = "select totalleave from empleave where id=$id";
$result = $con->query($sql) or die($con->error);
while($res = $result->fetch_assoc()) {
    $leave=$res['totalleave'];

}




if (isset($_POST['done'])) {

  $type = $_POST['type'];
  $days = $_POST['days'];
  $date=date("d/m/y");
  $month=date("m");
  $status="pending";
  $total=$leave+$days;
 
  $sql1 = "INSERT INTO `empleave` (`id`, `month`, `date`, `type`, `noofdays`, `status`, `totalleave`) VALUES('$id', '$month','$date','$type','$days ','$status','$total' )";

  if ($con->query($sql1) === TRUE) {

    echo '<script type="text/javascript">';
    echo ' alert("Request Send to admin")';  //not showing an alert box.
    echo '</script>';
  } else {
    echo "Error: " . $sql1 . "<br>" . $con->error;
  }
}


?>


<!DOCTYPE html>
<html>
<head>
 <title></title>
 <?php include 'boostrap.php';?>
</head>
<body>


<div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h3 class="text-white text-center">REQUEST FOR LEAVE </h3>
 </div><br>
 

 <label>Type Of Leave: </label>
 <input type="text" name="type" class="form-control"> <br>

 
 <label>No OF Days: </label>
 <input type="text" name="days" class="form-control"> <br>



 

 <button class="btn btn-success" type="submit" name="done"> Update </button><br>


 </div>
 </form>
 </div>
</body>
</html>
