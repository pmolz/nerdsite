<?php

include 'dbconnect.php';
$conn = OpenCon();
echo "connected success";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Escape user input to prevent SQL injection
$name = $conn->real_escape_string($_POST['name']);
$comment = $conn->real_escape_string($_POST['comment']);

// Insert the comment into the database
$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "Comment added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>