<?php
$con= mysqli_connect("localhost","root","","image_db") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
?>