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

 
 $id = $_SESSION["id"];
 $m=$_SESSION['m'];
$sql1 = "SELECT * FROM emp WHERE id = $id";
$result1 = $con->query($sql1) or die($con->error);

while($res1 = $result1->fetch_assoc()) {

$_SESSION["de1"]=$res1['designation'];

$_SESSION["salary1"]=$res1['basicsalary'];
}


 $sql = "SELECT * FROM `salaryslip` WHERE id=$id and `month`=$m ";
$result = $con->query($sql) or die($con->error);
while($res = $result->fetch_assoc()) {
   
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
<form method="post">
<div class="container">
<div class="container-bg">
    <br>
    <br>
  <div class="row">
    <div class="col-12">
        
 <div class="card-header bg-dark">
 <h3 class="text-white text-center"> PAYROLL MANAGMENT SYSTEM </h3>
 </div><br>

 <div class="col-12" >
        Employee ID :- <?php echo $_SESSION["id"];  ?>
    </div><br>
    <br>
    <div class="col-12" >
        Employee Name :- <?php echo $_SESSION["name"];  ?>
    </div><br>
    <br>
    <div class="col-12">Designation :- <?php echo $_SESSION["de1"];  ?>

    </div>
    <br>
    <br>
    
     
    <div class="col-12">Month :- <?php echo $res['month'];   ?>

    </div>
 

  <br><br>
  <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Earning</th>
      <th scope="col"></th>
      <th scope="col">Deduction</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Basic Salary :-</th>
      <td> <?php echo $_SESSION["salary1"];  ?>  </td>

      <th scope="row">Tax :-</th>
      <td>  3%  </td>
      
    </tr>
    <tr>
      <th scope="row">Convence Allowance :-</th>
      <td> <?php echo $res['ca'];  ?> </td>
      <th scope="row">Loan</th>
      <td> ----</td>
      
    </tr>
    <tr>
      <th scope="row">Medical Allowance:-</th>
      <td> <?php echo $res['ma'];  ?> </td>
      <th scope="row">TSD/IT</th>
      <td>----- </td>
 
    </tr>
    <tr>
      <th scope="row">House Rent:-</th>
      <td> <?php echo $res['ha'];  ?> </td>
      <th scope="row"></th>
      <td> </td>
 
    </tr>
    <tr>
      <th scope="row">Gross Pay:-</th>
      <td> <?php echo $res['grosspay'];  ?>
      </td>
      <th scope="row"> Net Pay</th>
      <td> <?php echo $res['netpay'];  ?> </td>
 
    </tr>
    
  </tbody>
</table>


  <div class="row">
  <div class="col">Cheque No :- 0123456</div>

<div class="col"> Name of bank  :- ABCD</div>
<br>
    <br>
    <div class="col-12">Date :- <?php echo date("Y/m/d");  ?>

    </div>
    <br>
    <br>
 <div class="col">Signatur of the Employee No :________________________</div>

<div class="col">Director :_________________</div>

</div>
<?php 
 }

  ?>
<br><br>
<div class="col-12">
<button type="button" onclick="myfun()" class="btn btn-primary btn-lg" style='width:1083px;' name="print">Print</button>    </div>
<br>
<br>
<br>



  </div>
</div>
</div>
<script type="text/javascript">
function myfun(){
  window.print();
}
</script>

  </form>
</body>
</html>