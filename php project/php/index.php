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
$pass = $_POST["pwd"];
$_SESSION["id"] = $email;


$sql = "SELECT id,name, password FROM emp WHERE id = $email";
$result = $con->query($sql) or die($con->error);

while($res = $result->fetch_assoc()) {
$_SESSION["name"]=$res['name'];
$id=$res['id'];
$pwd=$res['password'];

    if($email==$id && $pass==$pwd )
    {

        echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/employee/home.php"
   </script>';
    }


else{
    echo '<script type="text/javascript">';
    echo ' alert("Wrong Employee Id And Password")';  //not showing an alert box.
    echo '</script>';
}
}
}




?>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>EMPLOYEE LOGIN</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Your Employee Id *" name="log"  required="required"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *"  name="pwd"  pattern="^\S{6,}$" title="Enter atleast 7 Numbers" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="submit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="forgetpwd.php" class="ForgetPwd">Forget Password?</a>
                        </div>
                        <div class="form-group">
                            <a href="login.php" class="ForgetPwd">Admin Login?</a>
                        </div>
                    </form>
                </div>
                
</body>
</html>