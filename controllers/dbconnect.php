<?php

$con = mysqli_connect("localhost","dreamers_starup","Webify2020!!","dreamers_webify");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>