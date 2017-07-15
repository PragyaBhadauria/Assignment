<?php
session_start();
?>


<html>
<head><title>Notification Operations</title>
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





div.b{
	position:absolute;
	top:160px;
	
}
div.c{
	position:absolute;
	top:160px;
	left:190px;
}
div.d{
	position:absolute;
	top:160px;
	left:935px;
}
div.e{
	position:absolute;
	top:160px;
	left:560px;
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
div.v{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:500px;
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
<button onclick="window.location.href='notifynext2.php'"style =" width : 140px; color:red; height:40px">Add/Delete Notifications </button>
</div>



<?php /*
<div class = "b">
<h3>Notification_id</h3>
<textarea name = "scholarship_id" cols=15  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}

$sql = "SELECT *  FROM notification ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["id"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>

<div class = "c">
<h3>Notification_Link</h3>
<textarea name = "scholarship_id" cols=40  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM notification ";
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
<div class = "d">
<h3>Image</h3>
<textarea name = "image_id" cols=20  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
} 
echo "connected";
$sql = "SELECT *  FROM notification ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["image"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>
<div class = "e">
<h3>Notification_Title</h3>
<textarea name = "scholarship_id" cols=40  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
echo "connected";
$sql = "SELECT *  FROM notification ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["title"];
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
						<th><B><U>Notification_id</U></B></th>
						<th><B><U>Notification_link</U></B></th>
						<th><B><U>Notification_title</U></B></th>
						<th><B><U>Notification_image</U></B></th>
						
						
<!--						<th><B><U>sports_merit</U></B></th>-->
						
					</tr>
					<?php 
					 include_once('connectionmain.php');
			/*		$conn = mysqli_connect("localhost", "root", "", "jubilee");

                     if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                  }
                     else */
					{
						$sql = "SELECT * FROM notification";
					$result = mysqli_query($conn,$sql);
						if (mysqli_num_rows($result) > 0)
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$row['id']."</td>
									<td>".$row['link']."</td>
									<td>".$row['title']."</td>
									<td>".$row['image']."</td>"
									
									
									
									
									?>

									</tr><?php ;
						}
					}				
					?>
	
					</table>
					</div>


<?php /*
<div class="m">
<h3>Add New Notification</h3>
<form action="notify.php" method="post">

<table>
<tr>
<th>Notification_id</th>
<th><input type="text" name="id"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Notification_link</th>
<th><input type="text" name="name"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Notification_Title</th>
<th><input type="text" name="linkn"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Image</th>
<th><input type="text" name="category"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th><input type="submit" value= "Add Notification" name="add" >
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
	/*
$conn = mysqli_connect("localhost", "root", "", "jubilee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO notification (id,link,title,image)
VALUES ('$x', '$y', '$z','$a')";

if (mysqli_query($conn, $sql)) {
 //  echo "New record created successfully";
} else {
  //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


?>
</div>
<div class="v">

<h3>Delete Notification</h3>
<form action="notify.php" method="post">

<table>
<tr>
<th>Notification_Title</th>
<th><input type="text" name="id1"></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Notification_id</th>
<th><input type="text" name="no"></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th><input type="submit" value= "Delete Notification" name="delete" >
</th></tr>
</table>
</form>
<?php include_once('connectionmain.php');?>
<?php
if(isset($_POST['delete'])){
	$d = $_POST["id1"];
	$e=$_POST["no"];
	 /*$conn = new mysqli("localhost", "root", "", "jubilee");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
	echo"Successful connection";

$sql = "DELETE FROM notification WHERE id ='$e' AND title= '$d'";

if ($conn->query($sql) === TRUE) {
 // echo "Record deleted successfully";
} else {
  //  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>
</div>

*/
?>


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
