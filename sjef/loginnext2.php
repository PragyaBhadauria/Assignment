
<?php include_once('connectionmain.php');

 if(isset($_POST['login'])){

$x = $_POST["name"];
$y = $_POST["email"]; 
$sql = "SELECT *  FROM admin WHERE username = '$x' AND password = '$y' ";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
 // echo "logged in";
  header("Location: adminhomepage.php");
	

 } else {
    echo"Invalid login......Go Back......Try Loging Again";
 }
 }
$conn->close();
?>

