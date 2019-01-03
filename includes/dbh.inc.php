<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "stamp_collections";

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>