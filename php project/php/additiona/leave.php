<!DOCTYPE html>
<html>
<head>
 <title></title>
<?php include 'boostrap.php';?>
</head>
<body>
<br><br>

<h3 class="text-warning text-center" > Accept Empolyee Leaves Request </h3><br>
 <div class="container">
 <div class="col-lg-12">
 <div class="table-responsive">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered  table-sm">
 
 <tr class="bg-dark text-white text-center">

 
 <th> Accept </th>
 <th> Id </th>
 <th> Month </th>
 <th> Date </th>
 <th> Type </th>
 <th> No Of Days </th>
 


 </tr >

 <?php

 include 'conn.php';
$s="accept";

$sql = "select id,month,date,type,noofdays from empleave where status='pending'";
$result = $con->query($sql) or die($con->error);


 while($res = $result->fetch_assoc()) {
 ?>
 <tr class="text-center">
 <td> <button class="btn-primary btn"> <a href="accept.php?id=<?php echo $res['id']; ?>" class="text-white"> Accept </a> </button> </td>

 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['month'];  ?> </td>
 <td> <?php echo $res['date'];  ?> </td>
 <td> <?php echo $res['type'];  ?> </td>
 <td> <?php echo $res['noofdays'];  ?> </td>


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