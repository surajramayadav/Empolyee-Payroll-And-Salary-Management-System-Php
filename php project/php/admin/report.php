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

<h3 class="text-warning text-center" > Employee Report Data </h3><br>
 <div class="container">
 <div class="col-lg-12">
 <div class="table-responsive">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered  table-sm">
 
 <tr class="bg-dark text-white text-center">


 <th> Total Empolyee </th>
 <th> Total Employee Basic Salary </th>
 <th> Total Employee NetPay </th>



 </tr >

 <?php

 include 'conn.php';

 $sql = "SELECT COUNT(*) as data FROM emp ";
 $result = $con->query($sql) or die($con->error);


 while($res = $result->fetch_assoc()) {
     $data=$res['data'];

 }
 $sql1 = "SELECT SUM(basicsalary) as saldata FROM emp ";
 $result1 = $con->query($sql1) or die($con->error);


 while($res1 = $result1->fetch_assoc()) {
     $saldata=$res1['saldata'];

 }

 $sql2 = "SELECT SUM(netpay) as netdata FROM salaryslip ";
 $result2 = $con->query($sql2) or die($con->error);


 while($res2 = $result2->fetch_assoc()) {
     $netdata=$res2['netdata'];

 }

 ?>
 <tr class="text-center">

 <td> <?php echo  $data;  ?> </td>
 <td> <?php echo $saldata;  ?> </td>
 <td> <?php echo $netdata;  ?> </td>
 

 </tr>


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