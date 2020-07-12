<?php

$con = mysqli_connect("localhost","dreamers_webify","Webify2020!!","dreamers_starup");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>