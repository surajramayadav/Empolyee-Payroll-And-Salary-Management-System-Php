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

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Payroll Management</title>
    <?php
include 'header1.php';
?>
    <style>
.btn-lg {
 
  padding: 15px 32px;
  text-align: center;
  width:300px;
  height:200px;
  font-size: 40px;
  margin: 4px 2px;
  cursor: pointer;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
 
  
}
</style>
    </head>
<body>
<?php include 'header.php';?>

<div class="container">
    <br><br>
<div class="row">
  <div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="insert.php" class="text-white"> Add Employee</a></button>
 </div>
  <div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="display.php" class="text-white"> Edit & Delete Employee</a></button>
 </div>
  <div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="search.php" class="text-white"> Search Employee</a></button>
 </div>
</div>
<div class="row">
  <div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="calpay.php" class="text-white"> Add PAYSLIP</a></button>
 </div>
  <div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="delsalaryslip.php" class="text-white"> Edit & Delete PAYSLIP</a></button>
 </div>
  <div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="searchsalaryslip.php" class="text-white"> Search PAY SLIP</a></button>
 </div>

</div>
<div class="row">
<div class="col-4"><button type="button" class="btn btn-danger btn-lg"><a href="report.php" class="text-white">Report</a></button>
 </div>
</div>
<div>
</body>
</html>