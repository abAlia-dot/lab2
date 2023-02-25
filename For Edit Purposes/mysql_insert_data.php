<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (name, subject, email, message)
VALUES ('John', 'Doe', 'john@example.com', 'Hello')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 