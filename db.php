<?php 
$host="localhost";//Host Name
$username="root"; //MySQL username. root is Default.
$password=""; //MySQL Password
$dbname="chemical"; //Your Database Name
$con = mysqli_connect("$host","$username","$password","$dbname")or die("Failed To Connect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
