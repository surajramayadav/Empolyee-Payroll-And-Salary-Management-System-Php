<?php

error_reporting(0);


include 'conn.php';


$id = $_GET['id'];


$q1 = " DELETE FROM `salaryslip` WHERE id = $id ";

mysqli_query($con, $q1);

$q = " DELETE FROM `emp` WHERE id = $id ";

mysqli_query($con, $q);

header('location:display.php');

?>