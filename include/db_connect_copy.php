<?php
$servername = "localhost";
$username = "u775928650_ekwik";
$password = "Ashwani4t7";
$database = "u775928650_newekwikonline";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>