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


if (isset($_POST['done'])) {

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
  $sql = "INSERT INTO `emp` (`name`, `dob`, `department`, `designation`, `dateofjoin`, `mobailno`, `email`, `city`, `basicsalary`, `password`) VALUES('$name', '$dob','$Department','$Designation','$dj ','$no','$email','$city',' $sal','$pwd' )";

  if ($con->query($sql) === TRUE) {

    echo '<script type="text/javascript">';
    echo ' alert("New record created successfully")';  //not showing an alert box.
    echo '</script>';
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Payroll Management</title>
  <?php include 'header1.php';?>
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

        <label> Name Of Employee: </label>
        <input type="text" name="name" class="form-control" required="required"> <br>

        <label> Dob: </label>
        <input type="date" name="dob" class="form-control" required="required"> <br>


        <label>Employee Department: </label>
        <input type="text" name="Department" class="form-control" required="required"> <br>


        <label>Employee Designation: </label>
        <input type="text" name="Designation" class="form-control" required="required"> <br>


        <label>Employee date if joining: </label>
        <input type="date" name="dj" class="form-control" required="required"> <br>


        <label>Employee mobail no: </label>
        <input type="number" maxlength="10" name="no" class="form-control" required="required"> <br>

        <label>Employee email: </label>
        <input type="text" name="email" class="form-control" title="Contact's email (format: xxx@xxx.xxx)"  pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required="required"> <br>

        <label>Employee city: </label>
        <input type="text" name="city" class="form-control" required="required"> <br>

        <label>Employee basic salary: </label>
        <input type="text" name="sal" class="form-control" required="required"> <br>

        <label>Employee password: </label>
        <input type="password" name="pwd" class="form-control" pattern="^\S{6,}$" title="Enter atleast 7 Numbers" required="required"> <br>




        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

      </div>
    </form>
  </div>
</body>

</html>