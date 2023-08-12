<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the sign-in page if not logged in
    header("Location: index.php"); 
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

    <ul>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="index.php">View Orders</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</body>
</html>
