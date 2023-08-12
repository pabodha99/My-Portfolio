<?php
$connection = mysqli_connect('localhost', 'root', '', 'all_in_one');

if (isset($_POST['send'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $size = $_POST["size"];
    $dressCode = $_POST["dressCode"];
    $color = $_POST["color"];
    $amount = $_POST["amount"];

    // Form validations
    if (empty($name) || empty($email) || empty($phone) || empty($size) || empty($dressCode) || empty($color) || empty($amount)) {
        echo "Please fill in all the required fields.";
    } else {
        $request = "INSERT INTO orders (name, email, phone, size, dressCode, color, amount) VALUES
        ('$name', '$email', '$phone', '$size', '$dressCode', '$color', '$amount')";

        mysqli_query($connection, $request);

        echo "<div style='background-color: green; color: white; padding: 10px; text-align: center;'>Order placed successfully. Thank you!</div>";
    }
} else {
    echo 'Something went wrong. Please try again.';
}
?>
