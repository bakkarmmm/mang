<?php
$con=mysqli_connect("localhost","root","","mangment");
//For Arabic language
mysqli_query($con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
?>