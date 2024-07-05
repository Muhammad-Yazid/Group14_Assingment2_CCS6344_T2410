<?php
$conn = mysqli_connect("hotelrdsdb.cfgwomqc4i3h.us-east-1.rds.amazonaws.com","hotelrdsdb","hotelrdsdb","hotelsdb");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>