<?php

include 'dbconnect.php';
$conn = OpenCon();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Escape user input to prevent SQL injection
$name = $conn->real_escape_string($_POST['name']);
$comment = $conn->real_escape_string($_POST['comment']);

// Insert the comment into the database
$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Comment added successfully</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<meta http-equiv="refresh" content="1; url='comments.php'" />
<a href="comments.php" title="just go back nerd">Go back to comments <a>

<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>