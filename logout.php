<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

$logoutMessage = "You have been successfully logged out.";

// Redirect to a page after logging out
header("Location: index.php?logoutMessage=" . urlencode($logoutMessage));

exit();
?>
