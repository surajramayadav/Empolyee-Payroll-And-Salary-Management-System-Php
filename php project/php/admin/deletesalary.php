<?php

error_reporting(0);

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `salaryslip` WHERE id = $id ";

mysqli_query($con, $q);

header('location:delsalaryslip.php');

?>