<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'blood_donation';

// Create connection
$conn = new mysqli($host, $user, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
