<?php
session_start();
?>


<html>
<head><title>Scholarship Operations</title>
<style>
div.a{
	position:absolute;
	left:1165px;
	top:117px;
}
div.b{
	position:absolute;
	top:160px;
	left:130px;
	
}div.c{
	position:absolute;
	top:160px;
	left:300px;
}div.d{
	position:absolute;
	left:580px;
	top:160px;
}div.e{
	position:absolute;
	left:755px;
	top:160px;

}div.f{ background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:90px;
	top:520px;
}
div.g{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:450px;
	top:520px;
}
div.h{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:820px;
	top:520px;
	
}
	div.xy{
	position:absolute;
	left:1025px;
	top:117px;
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
	

</style>
<title>Admin Home</title></head>
<body style="background-color: #ffdab9">
<?php

if(isset($_SESSION['currentuser'])){

 ?>
<div class="top">
<center><a href="#"><img src="headr1.jpg" alt="" height="150px" width="100%"/></a></center>
</div>						

<div class="a">
<button onclick="window.location.href='adminhomepage.php'" style =" width : 140px; color:red; height:40px">Admin-Home</button>
</div>
<div class="xy">
<button onclick="window.location.href='scholarshipnext2.php'"style =" width : 140px; color:red; height:40px">Add/Delete/Update Scholarships </button>
</div>


<?php /*
<div class = "b">
<h3>Scholarship_id</h3>
<textarea name = "scholarship_id" cols=16  rows=18>
<?php include_once('connectionmain.php');?>
<?php 
/*$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
//echo "connected";
$sql = "SELECT *  FROM scholarship ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["scholarship_id"];
		echo nl2br("\n");
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>
<div class = "c">
<h3>Scholarship_name</h3>
<textarea name = "scholarship_name" cols=30  rows=18>
<?php include_once('connectionmain.php');?>
<?php 
/*$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
//echo "connected";
$sql = "SELECT *  FROM scholarship ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["scholarship_name"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>
<div class = "d">
<h3>PDF-Link</h3>
<textarea name = "scholarship_id" cols=16  rows=18>
<?php include_once('connectionmain.php');?>
<?php /* 
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
//echo "connected";
$sql = "SELECT *  FROM scholarship ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["link"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>
<div class = "e">
<h3>Scholarship_Category</h3>
<textarea name = "scholarship_id" cols=16  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
//echo "connected";
$sql = "SELECT *  FROM scholarship ";
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

*/
?>

<div class="new">

<table>
					<tr>
						<th><B><U>Scholarship_id</U></B></th>
						<th><B><U>Scholarship_name</U></B></th>
						<th><B><U>Filename</U></B></th>
						<th><B><U>Scholarship_Category</U></B></th>
						
					</tr>
					<?php 
					 include_once('connectionmain.php');
					/*$conn = mysqli_connect("localhost", "root", "", "jubilee");

                     if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                  }*/
                   //  else
					{
						$sql = "SELECT * FROM scholarship";
					$result = mysqli_query($conn,$sql);
						if (mysqli_num_rows($result) > 0)
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$row['id']."</td>
									<td>".$row['name']."</td>
									<td>".$row['file_name']."</td>
									<td>".$row['category']."</td>"
									
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
