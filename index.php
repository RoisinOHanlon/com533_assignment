<html><head> <title>Luxury Hotels </title> 

<link rel="stylesheet" type="text/css" href="hotels_style.css">

<script type="text/javascript">
<!--
//preload images
var image1=new Image()
image1.src="Images/paris.png"
var image2=new Image()
image2.src="Images/vegas.png"
var image3=new Image()
image3.src="Images/Sydney.png"
var image4=new Image()
image4.src="Images/Rome.png"

//-->
</script>

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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Jasmine Spec Runner v2.0.2</title>

  <link rel="shortcut icon" type="image/png" href="lib/jasmine-2.0.2/jasmine_favicon.png">
  <link rel="stylesheet" type="text/css" href="lib/jasmine-2.0.2/jasmine.css">

  <script type="text/javascript" src="lib/jasmine-2.0.2/jasmine.js"></script>
  <script type="text/javascript" src="lib/jasmine-2.0.2/jasmine-html.js"></script>
  <script type="text/javascript" src="lib/jasmine-2.0.2/boot.js"></script>

  <!-- include source files here... -->
  <script type="text/javascript" src="src/Player.js"></script>
  <script type="text/javascript" src="src/Song.js"></script>

  <!-- include spec files here... -->
  <script type="text/javascript" src="spec/SpecHelper.js"></script>
  <script type="text/javascript" src="spec/PlayerSpec.js"></script>

</head>


</head>

<body>
<img src="Images/logo.png" height="100" width="200"/>
<img class="img" src="Images/logo.png" height="100" width="200"/>
<div id="header">
 <h1> Welcome to Luxury Hotels</h1>
</div>




<div id="nav">

<ul id="nav" >
<li> <a href="index.php">Home </a></li>
<li><a href="all_hotels.php">All Hotels</a></li>
<li><a href="select_hotels.php"> Select Hotels</a> </li>
<li><a href="insert_form.php">Insert New Hotel</a></li>

</ul>

</div>

...
