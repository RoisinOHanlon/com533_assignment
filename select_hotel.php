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

<form>
<h1>Choose the continent you would like to view hotels for.</h1>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a continent:</option>
<option value="NA">North America</option>
<option value="E">Europe</option>
<option value="LV">Las Vegas</option>
<option value="Au">Australasia</option>
</select>
</form>
<br>
<div id="txtHint"><b>Hotel's will appear here.</b></div>

</div>

<div id="footer">

<center>
<p style="color:#fff;">      &copy; Copyright Luxury Hotels  2015 </p>
</center>

</div>

</body>
</html>
