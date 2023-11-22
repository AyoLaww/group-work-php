<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "db_signup");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['F_Name'];
$last_name = $_POST['L_Name'];
$email = $_POST['User_email'];
$password = $_POST['User_pass'];

// Insert data into the database
$sql = "INSERT INTO user_info (F_NAME, L_NAME, EMAIL, PASS) VALUES ('$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
