<?php
if(isset($_SESSION["aid"])) {
 echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/login.php"
   </script>';
}
?>
<?php
error_reporting(0);


 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $leave = $_POST['leave'];

 $sql1 = "SELECT month FROM salaryslip WHERE id = $id";
 $result1 = $con->query($sql1) or die($con->error);
 
 while($res1 = $result1->fetch_assoc()) {
 $mo=$res1['month'];
 
 }

    
 
 $sql = "SELECT basicsalary FROM emp WHERE id = $id";
 $result = $con->query($sql) or die($con->error);
 
 while($res = $result->fetch_assoc()) {
 $sal=$res['basicsalary'];
 }
 

  
       $ca=3000;
       $ma=2000;
       $hr=1000;

       $gross=$ca+$ma+$hr+$sal;
  
  
     $it=$gross*0.02;
     $d=cal_days_in_month(CAL_GREGORIAN,$mo,2019);
    
     $d2=$d-$leave;
     
     
     $d3=$sal/$d;
     
    
     $r=$d3*$leave; 
    
     
     $r3=round($r,0);
     $r1=$gross-$it;
     
     $netpay=$r1-$r3;
   
 

 $sql = " update salaryslip set ca='$ca', ma='$ma', ha='$hr',tax=' $it',totalleave='$leave',grosspay='$gross',netpay='$netpay' where id=$id  ";

 $con->query($sql);


 header('location:delsalaryslip.php');
 }

?>


<!DOCTYPE html>
<html>
<head>
 <title>Payroll Management</title>
 <?php include 'header1.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>


<?php

include 'conn.php';
$id = $_GET['id'];
$sql = "select totalleave from salaryslip where id=$id ";
$result = $con->query($sql) or die($con->error);


while($res = $result->fetch_assoc()) {
?> 
<div class="container">
<div class="col-lg-8 m-auto">
 
 <form method="post">
 
 <br><br><div class="card col-lg-12">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> UPDATE SALARYSLIP </h1>
 </div><br>
 
 <label> Enter Total Leave Of Employee: </label>
 <input type="text" name="leave" value=" <?php echo $res['totalleave'];  ?>"class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Update </button><br>
 <?php 
 }
  ?>

 </div>
 </form>
 </div>
</body>
</html>
