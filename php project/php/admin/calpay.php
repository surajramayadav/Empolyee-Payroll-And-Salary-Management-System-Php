<?php
if(isset($_SESSION["aid"])) {
 echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/login.php"
   </script>';
}
?>
<?php
include 'conn.php';

error_reporting(0);


if (isset($_POST['done'])) {

    $id = $_POST['id'];
    $month=date('m');
    $leave=$_POST['leave'];
    $sql1 = "SELECT month FROM salaryslip WHERE id = $id";
$result1 = $con->query($sql1) or die($con->error);

while($res1 = $result1->fetch_assoc()) {
$mo=$res1['month'];

}

if($month == $mo)
{
    echo "<script type=\"text/javascript\">alert('Alredy Added tis Month Salary Slip');</script>";;
   

}
else{
    $leave = $_POST['leave'];

$sql = "SELECT basicsalary FROM emp WHERE id = $id";
$result = $con->query($sql) or die($con->error);

while($res = $result->fetch_assoc()) {
$sal=$res['basicsalary'];
}


 
      $ca=3000;
      $ma=2000;
      $hr=1000;
      $gross=$ca+$ma+$hr+$sal;

 
    $day=date('m');
    $it=$gross*0.02;
    $d=cal_days_in_month(CAL_GREGORIAN,$day,2019);
  
    $d2=$d-$leave;
    
    
    $d3=$sal/$d;
  
   
    $r=$d3*$leave;  
    
    $r3=round($r,0);
    
    $r1=$gross-$it;
    
    $netpay=$r1-$r3;
   



  $sql = "INSERT INTO `salaryslip` (`id`, `month`, `ca`, `ma`, `ha`, `tax`, `totalleave`, `grosspay`, `netpay`) VALUES('$id ', ' $month','$ca','$ma','$hr ','$it','$leave','$gross',' $netpay' )";

  if ($con->query($sql) === TRUE) {

    echo '<script type="text/javascript">';
    echo ' alert("Salary Slip created successfully")';  //not showing an alert box.
    echo '</script>';
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Payroll Management</title>
  <?php include 'boostrap.php'; ?>
</head>

<body>
<?php include 'header.php';?>
<div class="container"> 
  <div class="col-lg-8 m-auto">

    <form method="post">

      <br><br>
      <div class="card col-lg-12">

        <div class="card-header bg-dark">
          <h1 class="text-white text-center"> Insert Operation </h1>
        </div><br>

        <label> Employee ID: </label>
        <input type="number" name="id" class="form-control" required="required"> <br>

        <label>Employee Total Leave : </label>
        <input type="number" name="leave" class="form-control" required="required"> <br>

        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

      </div>
    </form>
  </div>
</body>
</html>
