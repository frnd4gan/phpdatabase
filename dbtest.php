<?php
$dbname = "sampledb";
$servername = "localhost";
$username = "root_admin";
$password = "root_admin";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
