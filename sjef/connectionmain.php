<?php 
$conn= new mysqli('localhost','m140392ca','m140392ca','db_m140392ca');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
?>
