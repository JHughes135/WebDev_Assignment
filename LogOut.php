<?php

session_start();

unset($_SESSION['username']);
// Delete all session variables
 session_destroy();

// Jump to login page
header('Location: home.php');




 ?>
