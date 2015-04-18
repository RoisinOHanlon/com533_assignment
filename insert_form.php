<!DOCTYPE html>


<head> <title> Luxury Hotels</title> 
<meta charset="UTF-8">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" type="text/css" href="hotels_style.css">
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethotel.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div id="header">


<img src="Images/logo.png" height="100" width="200"/>



</div>

<div id="nav">
<ul id="nav" >
<li> <a href="index.php">Home </a></li>
<li><a href="all_hotels.php">All Hotels</a></li>
<li><a href="select_hotels.php"> Select Hotels</a> </li>
<li><a href="insert_form.php">Insert New Hotel</a></li>

</ul>

</div>

<div id="content">



<h1>Please enter the values into the textboxes</h1>
<form action="form_retrieve.php" method="post" onSubmit="return check() ;">
Hotel Name:<input type="text" name="Name" /><br> <br>   
URL:<input type="text" name="URL"/><br><br>
Rating:<input type="text" name="Rating" /><br><br>
Description:<input type="text" name="description" /><br><br>

<select name="valuelist">;
<?php
include "connect.php";
$query="SELECT distinct Destination from holiday order by Destination asc";//connects to the database and receives 
//the all the values from the trainer name column and places them into a select box
$result=mysqli_query($con, $query) or die("Invalid query");//checks the query to ensure the query is a valid SQL statement.
while($rows = mysqli_fetch_array($result)) {//gets the number of rows required from the database

echo "<option>" . $rows[0] ."</option>";//prints the results in the form a table
}
echo "</select>";//end of the selection from the select box
?>
<input type="submit" value="submit" />

</form> 
</div>

<div id="footer">

<center>
<p style="color:#fff;">      &copy; Copyright Luxury Hotels  2015 </p>
</center>

</div>

</body>
</html>

