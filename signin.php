<?php
$connection = mysqli_connect('localhost', 'root', '', 'all_in_one');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Retrieve the hashed password from the database based on the username
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Verify the provided password against the stored hashed password
        if (password_verify($password, $hashedPassword)) {
            // Start a session and store user information if authentication succeeds
            session_start();
            $_SESSION['username'] = $username;
            
            echo "Login successful! Redirecting...";
            
            // Redirect to a secure page
            header("Refresh: 2; URL=welcome.php"); // Redirect after 2 seconds
        } else {
            echo "Incorrect username or password.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo 'Something went wrong. Please try again.';
}

mysqli_close($connection);
?>
