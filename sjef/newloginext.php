<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST["login"])) {
if (empty($_POST["name"]) || empty($_POST["email"])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST["name"];
$password=$_POST["email"];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli('localhost','m140392ca','m140392ca','db_m140392ca');
// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT * FROM admin WHERE password='$password' AND username='$username'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
//$rows = mysql_num_rows($query);
//if ($rows == 1) {
$_SESSION["login_user"]=$username; // Initializing Session
header("location: adminhomepage.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>
