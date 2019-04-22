<?php
$con = mysqli_connect("localhost","shaik","Shaik@123","photography_club");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $a=mysqli_query($con,"SELECT * FROM log");
  while($row=mysqli_fetch_array($a)){
    print_r($row);
  }
?>
