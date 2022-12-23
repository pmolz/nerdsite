<?php
include 'dbconnect.php';
$conn = OpenCon();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = mysqli_real_escape_string($conn, $_POST['idnum'])+1;
$col = strval(mysqli_real_escape_string($conn, $_POST['col']));
$color = mysqli_real_escape_string($conn, $_POST['colorid']);
$colorint = (int)$color;
$query = "UPDATE nerdplace SET `$col`=$colorint WHERE id=$id;";
$exec = $conn->query($query);
if ($exec) {
  echo "data was updated";
} else {
  $msg = "Error: " . $query . "<br>" . mysqli_error($conn);
  echo $msg;
}
$close=CloseCon($conn);
