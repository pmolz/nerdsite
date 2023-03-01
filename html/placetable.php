<head>
  <meta charset="utf-8">
  <link href="nerdstyle.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="jquery-3.6.1.min.js"></script>
  <script src="nerdscript.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <TITLE>nerdplace</TITLE>
</head>
 <div id="tophead"; class="divhead"; >
  <div class="flex-container" >
  <div id="header"; style="flex-grow: 8"  class="grad1">
  <body>
    <h1 class="center">nerd's room</h1> 
    <a href="http://peter.molzer.net/"><img src="https://previews.123rf.com/images/djdarkflower/djdarkflower1302/djdarkflower130200043/18004249-home-button.jpg" style="width:100px">Home</img></a>
    
  </body>
  </div>
    </div>
    <hr>
    </div> 
<div id="tabdiv" onclick="changeColor(event)">
<table id="grid" cellspacing="0" cellpadding="0">
<?php
include 'dbconnect.php';
$conn = OpenCon();
echo "connected success";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM nerdplace";
$results = $conn->query($sql);

 // Iterate through the rows and columns of the HTML table
  for ($i = 0; $i < 61; $i++) {
    echo '<tr>';
    $row = $results->fetch_row();
    for ($j = 1; $j < 80; $j++) {
      // Retrieve the integer value for the current cell from the SQL table
      $value = $row[$j];

      // Set the background color of the current cell based on the integer value
      $bg_color = 'white';
      if ($value == 1) {
        $bg_color = 'black';
      } elseif ($value == 2) {
        $bg_color = 'yellow';
      } elseif ($value == 3) {
        $bg_color = 'green';
      } elseif ($value == 4) {
        $bg_color = 'purple';
      } elseif ($value == 5) {
        $bg_color = 'orange';
      } elseif ($value == 6) {
        $bg_color = 'red';
      } elseif ($value == 7) {
        $bg_color = 'pink';
      } elseif ($value == 8) {
        $bg_color = 'violet';
      } elseif ($value == 9) {
        $bg_color = 'blue';
      } elseif ($value == 0) {
        $bg_color = 'white';
      } 

      // Output the current cell with the appropriate background color
      echo '<td style="background-color: ' . $bg_color . ';"></td>';
    }
    echo '</tr>';
  }
  



CloseCon($conn);
?>


</table>
</div>
<hr>
  <div id="selcet" onclick="select(event)">
  <table id="selectiontable"> 
    <tr> 
      <td class = "g" style="background-color:white; border:4px solid black;"> 
      <td class = "g" style="background-color:black"> 
      <td class = "g" style="background-color:yellow"> 
      <td class = "g" style="background-color:green"> 
      <td class = "g" style="background-color:purple"> 
      <td class = "g" style="background-color:orange"> 
      <td class = "g" style="background-color:red"> 
      <td class = "g" style="background-color:pink"> 
      <td class = "g" style="background-color:violet"> 
      <td class = "g" style="background-color:blue">  
    </tr>
    </table> 
  </div>

