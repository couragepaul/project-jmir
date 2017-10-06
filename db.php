<?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect('localhost','root','password','myDBase');
 
if(mysqli_connect_errno($conn))
{
		echo 'Failed to connect';
}
else
{
	// echo "connection successful";
}
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>