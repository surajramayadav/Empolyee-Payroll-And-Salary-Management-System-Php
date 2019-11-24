<?php
if(isset($_SESSION["aid"])) {
 echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/login.php"
   </script>';
}
?>
<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Payroll Management</title>
 <?php include 'header1.php';?>
</head>
<body>
<?php include 'header.php';?>
<br><br>

<h3 class="text-warning text-center" > Employee Data </h3><br>
 <div class="container">
 <div class="col-lg-12">
 <div class="table-responsive">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered  table-sm">
 
 <tr class="bg-dark text-white text-center">

 <th> Edit </th>
 <th> Delete </th>
 <th> Id </th>
 <th> Name </th>
 <th> DOB </th>
 <th> DEPARTMENT </th>
 <th> DESIGNATION </th>
 <th> DATE OF JOIN </th>
 <th> PHONE NO </th>
 <th> EMAIL </th>
 <th> CITY </th>
 <th> SALARY </th>
 <th> PASSWORD </th>


 </tr >

 <?php

 include 'conn.php';

 $sql = "select * from emp ";
 $result = $con->query($sql) or die($con->error);


 while($res = $result->fetch_assoc()) {
 ?>
 <tr class="text-center">
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['dob'];  ?> </td>
 <td> <?php echo $res['department'];  ?> </td>
 <td> <?php echo $res['designation'];  ?> </td>
 <td> <?php echo $res['dateofjoin'];  ?> </td>
 <td> <?php echo $res['mobailno'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['city'];  ?> </td>
 <td> <?php echo $res['basicsalary'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>

 </tr>

 <?php 
 }
  ?>
  </div>
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>