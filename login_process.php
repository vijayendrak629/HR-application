<?php
// Establish a database connection (update the credentials accordingly).
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'internal';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form.
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to check for user credentials.
$sql = "SELECT * FROM data WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful.
    session_start();
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    // Login failed.
    header('Location: login.php?error=1');
    
}

$conn->close();
?>
