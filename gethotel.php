<?php
$q = $_GET['q'];

include "connect.php";
$sql="SELECT hotel.Name, hotel.Rating, holiday.Destination, image_set.URL, hotel.description FROM holiday, hotel, image_set  WHERE holiday.HolID = hotel.HolID AND image_set.URL = hotel.URL AND continent = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) 
{ 

print "<div id='content-center'> 

<hr>

<img src='".$row[3]."' class='hotel' />

<h1>" . $row[0] . " <span class='text-mute'>" .$row[2] ."</span></h1>
<p class='rating'>Rating: ".$row[1]."</p><br><br>
<p class='description'>Description: ".$row[4]."</p>

<br>

</div>";

print "<br>";
} 

print "<hr>";
mysqli_close($con);
?>
