<?php
	
  // $connect = mysqli_connect("localhost","user","123", "my_db");

  
  $connect = mysqli_connect('127.0.0.1','root','123', 'my_database');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>