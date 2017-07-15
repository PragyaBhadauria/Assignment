<?php
session_start();
?>
<html>
<body>
<?php include_once('connectionmain.php');
/* $conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
*/
 if(isset($_POST['login'])){

$x = $_POST["name"];
$y = $_POST["email"]; 
$sql = "SELECT *  FROM admin WHERE username = '$x' AND password = '$y' ";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
 // echo "logged in";
 $_SESSION['currentuser']=$x;
  header("Location: adminhomepage.php");
	

 } else {
    echo"Invalid login......Go Back......Try Loging Again";
 }
 }
$conn->close();
?>


</body>
</html>
