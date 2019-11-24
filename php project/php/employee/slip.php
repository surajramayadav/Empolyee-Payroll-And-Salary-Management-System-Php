<?php
if(isset($_SESSION["id"])) {
 echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/"
   </script>';
}
?>
<?php
error_reporting(0);
session_start();
 include 'conn.php';
 include 'master.php';
 if(isset($_POST['done'])){
 
    $id = $_SESSION['id'];
 $month = $_POST['month'];
 $_SESSION['m']=$month;
$sql1 = "SELECT month FROM salaryslip WHERE id = $id";
$result1 = $con->query($sql1) or die($con->error);

while($res1 = $result1->fetch_assoc()) {
$check=$res1['month'];
}
if($month==$check)
{
    echo '<script type="text/javascript">
    window.location = "http://localhost:8080/php/employee/salaryslip.php"
</script>';
}
else{
    echo '<script type="text/javascript">';
    echo ' alert("This Month Payslip is Not Available !!!")';  //not showing an alert box.
    echo '</script>';
}
}
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payroll Management</title>
    <?php include 'boostrap.php'; ?>
    <style>
        .container-bg {
    background: #F5F5F5;
}
        </style>

</head>
<body >
<div class="container">  
<div class="col-lg-8 m-auto">

 <form method="post">
 
 <br><div class="card col-lg-12">
 <br>
 
 <div class="card-header bg-dark">
 <h3 class="text-white text-center">  Month Of Pay Slip </h3>
 </div><br>
 
 
 <label> Enter Month Number: </label>
 
 <input type="number" maxlength="2" name="month" class="form-control" required="required"> <br>

 <button class="btn btn-success" type="submit" name="done"> Get Pay Slip </button><br>
<br>

  </div>
</div>
</div>
  </form>
</body>
</html>