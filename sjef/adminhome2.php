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
div.b{
	position:absolute;
	top:160px;
	
}
div.c{
	position:absolute;
	top:160px;
	left:220px;
}
div.d{
	position:absolute;
	top:160px;
	left:340px;
}
div.e{
	position:absolute;
	top:160px;
	left:622px;
}
div.f{
	position:absolute;
	top:160px;
	left:745px;
}
div.g{
	position:absolute;
	top:160px;
	left:910px;
}
div.z{
	position:absolute;
	top:160px;
	left:1075px;
}
div.h{
	position:absolute;
	top:160px;
	left:1058px;
}
div.l{background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	top:520px;
	left:500px;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
}

div.xy{
	position:absolute;
	left:1025px;
	top:117px;
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
<button onclick="window.location.href='studentnext2.php'"style =" width : 140px; color:red; height:40px">Add Students </button>
</div>


<?php /*
<div class = "b">
<h3>Student_Name</h3>
<textarea name = "Student_Name" cols=22  rows=18>
<?php include_once('connectionmain.php');?>
<?php/* 
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["student_name"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>

	
<div class = "c">
<h3>RollNumber</h3>
<textarea name = "rollnumber" cols=10  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["roll_number"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
 ?>
</textarea>
</div>
	


<div class = "d">
<h3>Scholarship_Awarded</h3>
<textarea name = "Scolarship_awarded" cols=30  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["scholarship_awarded"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
 ?>
</textarea>
</div>
	


<div class = "e">
<h3>Course</h3>
<textarea name = "Course" cols=10  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["course"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
 ?>
</textarea>
</div>
	


<div class = "f">
<h3>State</h3>
<textarea name = "State_Scholarship" cols=15 rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["state"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
 ?>
</textarea>
</div>
	


<div class = "g">
<h3>Category</h3>
<textarea name = "caste" cols=15  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}?php }
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
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["category"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
 ?>
</textarea>
</div>
	



<div class = "z">
<h3>Year</h3>
<textarea name = "Student_Name" cols=10  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM student ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["year"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
?>
</textarea>
</div>
*/
?>

<div class="new">

<table>
					<tr>
						<th><B><U>Student_name</U></B></th>
						<th><B><U>Roll_number</U></B></th>
						
						<th><B><U>Course</U></B></th>
						<th><B><U>Semester</U></B></th>
						
						<th><B><U>Scholarship_Awarded</U></B></th>
						<th><B><U>Scholarship_Name</U></B></th>
						
						<th><B><U>year</U></B></th>
						<th><B><U>Account_number</U></B></th>
					</tr>
					<?php 
					 include_once('connectionmain.php');
				/*	$conn = mysqli_connect("localhost", "root", "", "jubilee");

                     if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                  }
                     else */
					{
						$sql = "SELECT * FROM student ";
					$result = mysqli_query($conn,$sql);
						if (mysqli_num_rows($result) > 0)
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$row['name']."</td>
									<td>".$row['roll_no']."</td>
									<td>".$row['course']."</td>
									<td>".$row['semester']."</td>
									<td>".$row['scholarship_awarded']."</td>
									<td>".$row['scholarship_name']."</td>
									
									<td>".$row['year']."</td>
									<td>".$row['account_number']."</td>"
									
									?>

									</tr><?php ;
						}
					}				
					?>
	
					</table>
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
