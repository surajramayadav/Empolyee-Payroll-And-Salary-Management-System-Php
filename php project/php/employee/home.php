
<?php
if(isset($_SESSION["id"])) {
 echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/"
   </script>';
}
?>
<?php
// Start the session
error_reporting(0);
session_start();
include 'master.php';




?>



<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Payroll Management</title>
    <style>
.btn-lg {
 
  padding: 15px 32px;
  text-align: center;
  font-size: 50px;
  margin: 4px 2px;
  cursor: pointer;
  
}
</style>
   
</head>
<body> 

    <form action="slip.php" method="post">
    <div class="container">
    <br>
    <br>

        <h1 class="text-white text-center"> Welcome <?php echo $_SESSION["name"]; ?><br>
        <br>
        <br>
        <br>

        <button type="button" class="btn btn-danger btn-lg" name="done"><a href="slip.php" class="text-white"> SEE YOUR PAY SLIP</a></button>
</div>

</form>
</body>
</html>

    
