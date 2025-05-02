<?php
session_start();

// Clear session
session_unset();
session_destroy();

// Remove cookies
setcookie("username", "", time() - 3600);
setcookie("password", "", time() - 3600);

// Redirect to login
header("Location: login.php");
exit();
