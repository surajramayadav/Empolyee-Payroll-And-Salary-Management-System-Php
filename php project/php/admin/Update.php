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
 $name = $_POST['name'];
 $dob = $_POST['dob'];
 $Department = $_POST['Department'];
 $Designation = $_POST['Designation'];
 $dj = $_POST['dj'];
 $no = $_POST['no'];
 $email = $_POST['email'];
 $city = $_POST['city'];
 $sal = $_POST['sal'];
 $pwd = $_POST['pwd'];
 $sql = " update emp set  name='$name', dob='$dob', department='$Department',designation=' $Designation',dateofjoin=' $dj',mobailno='$no',email='$email',city='$city',password=' $pwd' where id=$id  ";

 $con->query($sql);

 header('location:display.php');
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
$sql = "select * from emp where id=$id ";
$result = $con->query($sql) or die($con->error);


while($res = $result->fetch_assoc()) {
?> 
<div class="container">
<div class="col-lg-8 m-auto">
 
 <form method="post">
 
 <br><br><div class="card col-lg-12">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  UPDATE EMPLOYEE DATA </h1>
 </div><br>
 

 <label> Name Of Employee: </label>
 <input type="text" name="name" value="<?php echo $res['name'];  ?>" class="form-control" required="required"> <br>

 <label> Dob: </label>
 <input type="text" name="dob" value=" <?php echo $res['dob'];  ?>"class="form-control" required="required"> <br>

 
 <label>Employee Department: </label>
 <input type="text" name="Department"value="<?php echo $res['department'];  ?>" class="form-control" required="required"> <br>

 
 <label>Employee Designation: </label>
 <input type="text" name="Designation" value="<?php echo $res['designation'];  ?>" class="form-control" required="required"> <br>

 
 <label>Employee date of joining: </label>
 <input type="text" name="dj" value="<?php echo $res['dateofjoin'];  ?>" class="form-control" required="required"> <br>

 
 <label>Employee mobail no: </label>
 <input type="text" name="no" value="<?php echo $res['mobailno'];  ?>" class="form-control" required="required"> <br>
 
 <label>Employee email: </label>
 <input type="text" name="email" value="<?php echo $res['email'];  ?>" class="form-control" required="required"> <br>
 
 <label>Employee city: </label>
 <input type="text" name="city" value="<?php echo $res['city'];  ?>" class="form-control" required="required"> <br>
 
 <label>Employee basic salary: </label>
 <input type="text" name="sal" value="<?php echo $res['basicsalary']; ?>" class="form-control" required="required"> <br>
 
 <label>Employee password: </label>
 <input type="password" name="pwd" value="<?php echo $res['password'];  ?>" class="form-control" required="required"> <br>




 <button class="btn btn-success" type="submit" name="done"> Update </button><br>
 <?php 
 }
  ?>

 </div>
 </form>
 </div>
</body>
</html>
