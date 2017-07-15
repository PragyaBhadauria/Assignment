<?php
session_start();
?>


<html>
<head>

<title>Scholarship Operations</title>
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
div.f{ background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:90px;
	top:160px;
}
div.g{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:450px;
	top:160px;
}
div.h{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:820px;
	top:160px;
	
}




</style>
</head>




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
<button onclick="window.location.href='adminhome.php'"style =" width : 140px; color:red; height:40px">Scholarship List</button>
</div>









<div class="f">
<h3>Add New Scholarship</h3>
<form action="scholarshipnext2.php" method="post">

<table>
<tr>
<th>Scholarship_id</th>
<th><input type="text" name="id" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Scholarship_name</th>
<th><input type="text" name="name" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Pdf-Link</th>
<th><input type="text" name="linkn" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Category</th>
<th><input type="text" name="category" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>


<th><input type="submit" value= "Add Scholarship" name="add" >
</th>

</table>
</form>
<?php include_once('connectionmain.php');?>
<?php
if(isset($_POST['add'])){
	$x = $_POST["id"];
	$y = $_POST["name"];
	$z = $_POST["linkn"];
	$a = $_POST["category"];
/*$conn = mysqli_connect("localhost", "root", "", "jubilee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$sql = "INSERT INTO scholarship (id, name, file_name,category)
VALUES ('$x', '$y', '$z','$a')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
 //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


?>
</div>
<div class="g">

<h3>Delete Scholarship</h3>
<form action="scholarshipnext2.php" method="post">

<table>
<tr>
<th>Scholarship_id</th>
<th><input type="text" name="id1" required></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th><input type="submit" value= "Delete Scholarship" name="delete" required >
</th></tr>
</table>
</form>
<?php include_once('connectionmain.php');?>
<?php
if(isset($_POST['delete'])){
	$d = $_POST["id1"];
 /*	$conn = new mysqli("localhost", "root", "", "jubilee");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else */
//	echo"Successful connection";

$sql = "DELETE FROM scholarship WHERE id ='$d'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
      //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>
</div>

<div class="h">

<h3>Update Scholarship</h3>
<form action="scholarshipnext2.php" method="post">

<table>
<tr>
<th>Scholarship_id</th>
<th><input type="text" name="id2" required></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>New-Pdf-Link</th>
<th><input type="text" name="link1" required></th>
</tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th><input type="submit" value= "Update Scholarship" name="update" >
</th></tr>
</table>
</form>
<?php include_once('connectionmain.php');?>
<?php
if(isset($_POST['update'])){
	$p= $_POST["id2"] ;
	$q= $_POST["link1"]  ;
/* $conn = new mysqli("localhost", "root", "", "jubilee");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/

$sql = "UPDATE scholarship SET file_name='$q' WHERE id='$p'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  //  echo "Error updating record: " . $conn->error;
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
