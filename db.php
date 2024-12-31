<?php

$conn=mysqli_connect("localhost","root","poojakulkarni@12","grading");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  ?>
