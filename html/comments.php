<script src="/form-validation.js"></script>
<form id="comment-form" action="handlecomments.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="comment">Comment:</label><br>
  <textarea id="comment" name="comment"></textarea><br><br>
  <input type="submit" value="Submit">
</form> 

<?php

include 'dbconnect.php';
$conn = OpenCon();


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve the comments from the database
$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output the comments
  while($row = $result->fetch_assoc()) {
    echo "<div class='comment'>";
    echo "<p>" . $row['name'] . " said:</p>";
    echo "<p>" . $row['comment'] . "</p>";
    echo "</div>";
  }
} else {
  echo "No comments yet";
}

$conn->close();

?>