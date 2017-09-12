<?php
$servername = "104.198.202.210";
$username = "el3reef";
$password = "3623ref";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
