<?php
$con = mysqli_connect("localhost","scse","scse", "test");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error());
 }
 $sql = "SELECT * FROM poll_details"
 
?> 