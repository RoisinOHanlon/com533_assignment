<?php

// This is the code to connect to the database and retrieve the information.

        $con = mysqli_connect('localhost', 'root', 'root') or die ('No connection');
            mysqli_select_db($con, 'com533' ) or die (' labuser will not open');
            
?>

