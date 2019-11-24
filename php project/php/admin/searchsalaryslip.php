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

<?php include 'header.php';?>
<div class="container">
  <div class="col-lg-8 m-auto">

    <form action="searchsalaryslip2.php" method="get">

      <br><br>
      <div class="card col-lg-12">

        <div class="card-header bg-dark">
          <h1 class="text-white text-center"> Search Employee </h1>
        </div><br>

        <label> Employee ID: </label>
        <input type="number" name="id" class="form-control" required="required"> <br>

        <button class="btn btn-success" type="submit" name="done"> Search </button><br>

      </div>
    </form>
  </div>
</body>

</html>