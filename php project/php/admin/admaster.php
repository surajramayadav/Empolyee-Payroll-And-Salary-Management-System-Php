<?php
if ($_SESSION["aid"]==null) {
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
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <script src="scripts/jquery-3.3.1.slim.min.js"></script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/esm/popper.min.js"></script>
    <link href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="Content/bootstrap.min.css" rel="stylesheet" />
        <script src="scripts/jquery-3.3.1.slim.min.js"></script>
        <script src="scripts/popper.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/esm/popper.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
</head>
<body style="background-image: linear-gradient(to left, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(to right, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" />
            Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert.php">Add Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="display.php">Edit And Del Employee</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search Employee Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calpay.php">Add Payslip Detail</a>
                </li>
               

                <li class="nav-item">
                    <a class="nav-link" href="searchsalaryslip.php">Search Payslip Detail</a>
                </li>
            

                <li class="nav-item">
                    <a class="nav-link" href="delsalaryslip.php">Edit And Del Payslip</a>
                </li>
   
                <li class="nav-item" style="text-align: right">
                    <a class="nav-link" href="http://localhost:8080/php/"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>

            </ul>
         

        </div>
    </nav>

   
</body>
</html>