<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","kangcukur");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Koneksi gagal: " . mysqli_connect_error();
  }
?>
<?php
mysqli_query($con,"DELETE FROM `booking` WHERE waktu < (CURTIME() - INTERVAL 5 MINUTE)");
?>