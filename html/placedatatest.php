<?php
include 'dbconnect.php';
$conn = OpenCon();
echo "connected success";

$sql = "SELECT c0,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10 FROM nerdplace";
$result = $conn->query($sql);

echo "<table border='1'>";

while($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" . $row["c0"] . "</td>";
	echo "<td>" . $row["c1"] . "</td>";
	echo "<td>" . $row["c2"] . "</td>";
	echo "<td>" . $row["c3"] . "</td>";
	echo "<td>" . $row["c4"] . "</td>";
	echo "<td>" . $row["c5"] . "</td>";
	echo "<td>" . $row["c6"] . "</td>";
	echo "<td>" . $row["c7"] . "</td>";
	echo "<td>" . $row["c8"] . "</td>";
	echo "<td>" . $row["c9"] . "</td>";
	echo "<td>" . $row["c10"] . "</td>";
	echo "</tr>";
}

echo "</table>";

CloseCon($conn);
?>
