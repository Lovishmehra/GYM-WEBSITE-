

<?php
$servername = "localhost";
$username = "root";    // default username for XAMPP
$password = "";        // blank password for XAMPP
$database = "users";   // ensure this is the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
