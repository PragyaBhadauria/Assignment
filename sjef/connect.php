<?php
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
	

?>
