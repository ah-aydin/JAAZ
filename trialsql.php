<?php
$servername = "localhost";
$username = "group12";
$password = "SynPaR";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>