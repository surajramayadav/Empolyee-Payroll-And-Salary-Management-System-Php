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
 <?php include 'header1.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<br><br>

<h3 class="text-warning text-center" > Employee Data </h3><br>
 <div class="container">
 <div class="col-lg-12">
 <div class="table-responsive">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered  table-sm">
 
 <tr class="bg-dark text-white text-center">

 <th> Id </th>
 <th> Month </th>
 <th> Convence Allowance </th>
 <th> Medical Allowance  </th>
 <th> House Rent </th>
 <th> Income Tax</th>
 <th> Emp Leaves </th>
 <th> Gross Pay </th>
 <th> Net pay </th>


 </tr >

 <?php
if(isset($_GET['done'])){

    $id = $_GET['id'];
    }
 include 'conn.php';

 $sql = "select * from salaryslip where id=$id" ;
 $result = $con->query($sql) or die($con->error);


 while($res = $result->fetch_assoc()) {
 ?>
 <tr class="text-center">
 
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['month'];  ?> </td>
 <td> <?php echo $res['ca'];  ?> </td>
 <td> <?php echo $res['ma'];  ?> </td>
 <td> <?php echo $res['ha'];  ?> </td>
 <td> <?php echo $res['tax'];  ?> </td>
 <td> <?php echo $res['totalleave'];  ?> </td>
 <td> <?php echo $res['grosspay'];  ?> </td>
 <td> <?php echo $res['netpay'];  ?> </td>


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