<?php
$servername = "localhost";
$username = "root";
$password = "opcRekt90ha.";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO status (name, ddd1) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $ddd1);

// set parameters and execute
$name = "petere";
$ddd1 = "n";
$stmt->execute();

$name = "teien";
$ddd1 = "y";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>
