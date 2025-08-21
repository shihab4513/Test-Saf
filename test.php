<?php
$host = "localhost";      // or your DB server IP
$username = "root";
$password = "";
$database = "spring2025_assignment";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>