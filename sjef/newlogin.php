<?php
session_start();
?>

<?php
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
else{
  //echo "connected";
	if(isset($_POST['login'])){

$x = $_POST["name"];
$y = $_POST["email"]; 
$sql = "SELECT *  FROM admin WHERE username = '$x' AND password = '$y' ";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
 // echo "logged in";
  $_session['currentuser'] = $x;
  header("Location: adminhomepage.php");

 } else {
    echo "Wrong Password or Username";
 }
 }
$conn->close();
}
?>
