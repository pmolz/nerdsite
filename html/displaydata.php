<?php
include 'dbconnect.php';
$conn = OpenCon();
echo "connected success";

$sql = "SELECT name, ddd1 FROM status";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"]. " - data: " . $row["ddd1"]. "<br>";
  }
} else {
  echo "0 results";
}


CloseCon($conn);
?>
