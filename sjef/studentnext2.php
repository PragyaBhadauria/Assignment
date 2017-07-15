<?php
session_start();
?>




<html>
<head>

<title>Student Operations</title>
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
div.l{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:100px;
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
<button onclick="window.location.href='adminhome2.php'"style =" width : 140px; color:red; height:40px">Students List</button>
</div>


<div class="l">
<h3>Add New Student</h3>
<form action="studentnext2.php" method="post">

<table>
<tr>
<th>Student_Name</th>
<th><input type="text" name="id" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Roll_number</th>
<th><input type="text" name="name" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Course</th>
<th><input type="text" name="linkn" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Semester</th>
<th><input type="text" name="course" required></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Scholarship_awarded</th>
<th><input type="text" name="state" required></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Scholarship_Name</th>
<th><input type="text" name="category" required></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th>Year</th>
<th><input type="text" name="year" required></th>
</tr>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th><tr>
<th>Account_Number</th>
<th><input type="text" name="year23" required></th>
</tr>
</th>
</tr>

</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<th><input type="submit" value= "Add Student" name="add" >
</th>

</table>
</form>
<?php include_once('connectionmain.php');?>
<?php
if(isset($_POST['add'])){
	$x = $_POST["id"];
	$y = $_POST["name"];
	$z = $_POST["linkn"];
	$a = $_POST["course"];
	$b = $_POST["state"];
	$c = $_POST["category"];
	$er = $_POST["year"];
	$op = $_POST["year23"];
	
/*	
$conn = mysqli_connect("localhost", "root", "", "jubilee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$sql = "INSERT INTO student (name,roll_no,course,semester,scholarship_awarded,scholarship_name,year,account_number)
VALUES ('$x', '$y', '$z','$a','$b','$c','$er','$op')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
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
