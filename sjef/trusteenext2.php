<?php
session_start();
?>



<html>
<head>

<title>Trustee Operations</title>
<style>
div.a{
	position:absolute;
	left:1165px;
	top:117px;
}

div.xy{
	position:absolute;
	left:1025px;
	top:117px;
}
div.m{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:100px;
	top:160px;
	
}
div.g{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:500px;
	top:160px;
	
}


</style>
<body style="background-color: #ffdab9">
<?php

if(isset($_SESSION['currentuser'])){

 ?>
<div class="top">
<center><a href="#"><img src="headr1.jpg" alt="" height="150px" width="100%"/></a></center>
</div>						

<div class="a">
<button onclick="window.location.href='adminhomepage.php'"style =" width : 140px; color:red; height:40px">Admin-Home</button>
</div>

<div class="xy">
<button onclick="window.location.href='adminhome3.php'"style =" width : 140px; color:red; height:40px">Trustee List</button>
</div>

<div class="m">
<h3>Add New Trustee</h3>
<form action="trusteenext2.php" method="post">

<table>
<tr>
<th>Trustee_Image</th>
<th><input type="text" name="id" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Trustee_Link</th>
<th><input type="text" name="linkn" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Trustee_Name</th>
<th><input type="text" name="category" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Trustee_Id</th>
<th><input type="text" name="image" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>


<th><input type="submit" value= "Add Trustee" name="add" >
</th>

</table>
</form>
<?php include_once('connectionmain.php');?>
<?php
if(isset($_POST['add'])){
	$x = $_POST["id"];
	
	$z = $_POST["linkn"];
	$a = $_POST["category"];
	$t= $_POST["image"];
/* $conn = mysqli_connect("localhost", "root", "", "jubilee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$sql = "INSERT INTO trustee (tr_image,link,tr_name,trustee_id)
VALUES ('$x',  '$z','$a','$t')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


?>
</div>
<div class="g">

<h3>Delete Trustee</h3>
<form action="trusteenext2.php" method="post">

<table>
<tr>
<th>Trustee_Id</th>
<th><input type="text" name="no" required></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th><input type="submit" value= "Delete Trustee" name="delete" required>
</th></tr>
</table>
</form>
<?php  include_once('connectionmain.php');?>
<?php
if(isset($_POST['delete'])){
	//$d = $_POST["id1"];
	$e=$_POST["no"];
/*	$conn = new mysqli("localhost", "root", "", "jubilee");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else */
//	echo"Successful connection";

$sql = "DELETE FROM trustee WHERE trustee_id ='$e' ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
   // echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>
</div>


<?php }
else
{echo "<br>";
echo "<B>You are not logged in NIT Calicut's portal on silver jubilee endownment.................</B>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href = 'finallogin.php' style =' width : 140px; color:red; height:40px'>Click Here To Login</a>";

}

?>	




</body>
</html>
