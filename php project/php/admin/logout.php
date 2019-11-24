<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION["aid"]);
// Delete all session variables
 session_destroy();

// Jump to login page
echo '<script type="text/javascript">
        window.location = "http://localhost:8080/php/login.php"
   </script>';

?>