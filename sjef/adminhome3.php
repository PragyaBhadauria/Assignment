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
div.b{
	position:absolute;
	top:160px;
	
}

div.f{
	position:absolute;
	left:660px;
	top:160px;
}
div.e{
	position:absolute;
	left:240px;
	top:160px;
}
div.x{
	position:absolute;
	left:840px;
	top:160px;
}
	div.m{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:100px;
	top:530px;
	
}
div.g{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:450px;
	top:530px;
	
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
<button onclick="window.location.href='trusteenext2.php'"style =" width : 140px; color:red; height:40px">Add/Delete Trustees </button>
</div>

<?php /*
<div class = "b">
<h3>Trustee_Image</h3>
<textarea name = "Trustee_Name" cols=22  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM trustee ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["tr_image"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
?>
</textarea>
</div>
<div class = "e">
<h3>Trustee_Link</h3>
<textarea name = "Student_Name" cols=45  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM trustee ";
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

<div class = "f">
<h3>Trustee_Name</h3>
<textarea name = "image_Name" cols=15 rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM trustee ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["tr_name"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}



 ?>
</textarea>
</div>
<div class = "x">
<h3>Trustee_Id</h3>
<textarea name = "image_Name" cols=15 rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM trustee ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["trustee_id"];
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
						<th><B><U>Trustee_Image</U></B></th>
						<th><B><U>Link</U></B></th>
						<th><B><U>Trustee_Name</U></B></th>
						<th><B><U>Trustee_Id</U></B></th>
						
						
<!--						<th><B><U>sports_merit</U></B></th>-->
						
					</tr>
					<?php 
					 include_once('connectionmain.php');
				/*	$conn = mysqli_connect("localhost", "root", "", "jubilee");

                     if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                  }
                     else */
					{
						$sql = "SELECT * FROM trustee";
					$result = mysqli_query($conn,$sql);
						if (mysqli_num_rows($result) > 0)
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$row['tr_image']."</td>
									<td>".$row['link']."</td>
									<td>".$row['tr_name']."</td>
									<td>".$row['trustee_id']."</td>"
									
									
									
									
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
