//Iterate through all cells

var color = "blue";
function select(e) {
  if(e.target.tagName=="TD"){
      
      const cells = document.querySelectorAll('.g');
      cells.forEach(cell => {
        cell.style.border="1px solid black";
      });
    color = e.target.style.backgroundColor;
    e.target.style.border = "4px solid black";
  }
}
function changeColor(e){
  //alert("coords: " + e.target.parentElement.rowIndex + e.target.cellIndex);
  if(e.target.tagName=="TD"){
    
      e.target.style.backgroundColor = color;
  }
  var id = e.target.parentElement.rowIndex;
  var collumn = e.target.cellIndex + 1;

  var cid = 0;
  if(color == 'black') {
    cid = 1; 
  } else if (color == 'yellow') {
    cid = 2;
  } else if (color == 'green') {
    cid = 3;
  } else if (color == 'purple') {
    cid = 4;
  } else if (color == 'orange') {
    cid = 5;
  } else if (color == 'red') {
    cid = 6;
  } else if (color == 'pink') {
    cid = 7;
  } else if (color == 'violet') {
    cid = 8;
  } else if (color == 'white') {
    cid = 9;
  } 

  $.ajax({
    url: "http://129.213.52.131/update-table.php",
    type: "POST",
    data: {
      col: collumn,
      idnum: id,
      colorid: cid
    },
    success: function(response) {
      console.log("SQL table updated successfully!");
    },
    error: function(xhr, status, error) {
      console.error("An error occurred while updating the SQL table: ", JSON.stringify(error));
    },
    dataType: "json"
  });
}
