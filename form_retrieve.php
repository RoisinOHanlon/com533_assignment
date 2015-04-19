<html><head> <title>Luxury Hotels </title> 

<link rel="stylesheet" type="text/css" href="hotels_style.css">

<script type="text/javascript">

<!--Date and Time Scripts-->
<script type="text/javascript">

//adds zeros to the front of numbers <10 in time
function checkTime(i){
    if (i<10) {
        i="0" + i;
    }
    return i;
}

var weekday=new Array(7);
weekday[0]="Sunday";
weekday[1]="Monday";
weekday[2]="Tuesday";
weekday[3]="Wednesday";
weekday[4]="Thursday";
weekday[5]="Friday";
weekday[6]="Saturday";

var monthnames=new Array(12);
monthnames[0]="January";
monthnames[1]="February";
monthnames[2]="March";
monthnames[3]="April";
monthnames[4]="May";
monthnames[5]="June";
monthnames[6]="July";
monthnames[7]="August";
monthnames[8]="September";
monthnames[9]="October";
monthnames[10]="November";
monthnames[11]="December";

</script>



</head>

<body>
<div id="header">
<img src="Images/logo.png" height="100" width="200"/> <h1> Welcome to Luxury Hotels</h1>
</div>
<div id="time">
  
  <script type="text/javascript" language="JavaScript">

var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
var time = h+":"+m+":"+s;
document.write(time);

var day = weekday[today.getDay()];
var date =  today.getDate();
var month = monthnames[today.getMonth()];
var year = today.getFullYear();
var fulldate = "<br>" + day + ", " + date + " " + month + " " + year;
document.write(fulldate);



</script>

</div><!--closes time div-->

</div>

<div id="nav">

<ul id="nav" >
<li> <a href="index.php">Home </a></li>
<li><a href="hotels.html"> Hotels</a> </li>
<li><a href="about.html"> About </a></li>
<li><a href="insert_form.php">Insert New Hotel</a></li>


</ul>

</div>

<div id="content">
<?php
include "connect.php";
$Name = $_POST["Name"];                       // receiving trainer names value from  html page
$Rating = $_POST["Rating"];               // receiving stable name value from  html page
$HolID =$_POST["valuelist"];
$URL = $_POST["URL" ];   // receiving horses value from  html page
$description =$_POST["description"];
...
