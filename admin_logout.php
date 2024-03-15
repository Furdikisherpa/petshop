<?php
// Start or resume session
session_start();

// Unset or destroy session variables related to admin authentication
unset($_SESSION['admin_loggedin']);
unset($_SESSION['admin_username']);

// Destroy the session
session_destroy();

// Redirect the admin to the login page or any other desired page after logout
header("Location: adminform.php");
exit();
?>
