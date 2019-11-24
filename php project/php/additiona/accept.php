<?php

 include 'conn.php';



 $id = $_GET['id'];

 $sql = " update empleave set  status='accepted' where id=$id  ";

 $con->query($sql);

 header('location:leave.php');


?>
