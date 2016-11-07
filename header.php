<?php
$servername = "localhost";
$username = "oshoneugiomoh";
$password = "inspiron1545";

// Create connection
$conn = new mysqli($localost, $oshoneugiomoh, $inspiron1545);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
