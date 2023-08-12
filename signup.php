<?php
$connection = mysqli_connect('localhost', 'root', '', 'all_in_one');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    // Form validations
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        echo "Please fill in all the required fields.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

        if (mysqli_query($connection, $sql)) {
           
            echo "<div style='background-color: green; color: white; padding: 10px; text-align: center;'>Registration successful!</div>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }
} else {
    echo 'Something went wrong. Please try again.';
}

mysqli_close($connection);
?>
