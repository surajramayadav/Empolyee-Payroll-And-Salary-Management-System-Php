<?php
// Start the session
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payroll Management</title>
    <style>
        .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
    margin-left: 27%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}


.login-container form{
    padding: 5%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}


.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

        </style>

</head>
<?php
include 'conn.php';

if (isset($_POST['submit'])) {
 $email = $_POST["log"];

$id=$_SESSION['id'];


$sql = "update emp set password='$email' WHERE id = $id";
$result = $con->query($sql) or die($con->error);



    if($result==1)
    {

        echo '<script type="text/javascript">
        window.location = "index.php"
   </script>';
    }

else{
    echo '<script type="text/javascript">';
    echo ' alert("Password Not Matching")';  //not showing an alert box.
    echo '</script>';
}

}




?>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>NEW PASSWORD</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enetr new Password *" name="log" id="log"  onkeyup='check();' required="required"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Conform Password"  name="dob" id="pwd"  onkeyup='check();' required="required" /> <labe id='message'></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="submit" value="Login" />
                        </div>
                        <script type="text/javascript">
                        var check = function() {
  if (document.getElementById('log').value ==
    document.getElementById('pwd').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

                        </script>
                       
                    </form>
                </div>
                
</body>
</html>