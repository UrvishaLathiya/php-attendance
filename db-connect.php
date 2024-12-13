<?php
// Hostinger Database Connection
$host = "185.224.138.7";  // Hostinger IP
$dbname = "u450582341_interndb";  // Database name
$username = "u450582341_intern"; // Database username
$password = "7r!J7jqijYsL";  // Database password

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
