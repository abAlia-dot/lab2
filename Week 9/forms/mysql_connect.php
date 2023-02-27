<?php
$servername = "192.168.150.213";
$username = "webprogss211";
$password = "fancyR!ce36";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 