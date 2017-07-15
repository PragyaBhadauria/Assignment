<html>
<head><title>Image-Gallery Operations</title>
<style>
div.a{
	position:absolute;
	left:1140px;
	top:117px;
}
div.b{
	position:absolute;
	top:160px;
	left:80px;
}
div.c{
	position:absolute;
	top:160px;
	left:250px;
}
div.d{
	position:absolute;
	top:160px;
	left:990px;
}
div.e{
	position:absolute;
	top:160px;
	left:505px;
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


</style>
</head>
<body style="background-color: #ffdab9">
<div class="top">
<center><a href="#"><img src="headr1.jpg" alt="" height="150px" width="100%"/></a></center>
</div>						

<div class="a">
<button onclick="window.location.href='adminhomepage.php'"style =" width : 140px; color:red; height:40px">Admin-Home</button>
</div>
<div class = "b">
<h3>Image_id</h3>
<textarea name = "scholarship_id" cols=15  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}
*/
$sql = "SELECT *  FROM gallery ";
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
<h3>Image</h3>
<textarea name = "scholar_id" cols=25  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}*/
//echo "connected";
$sql = "SELECT *  FROM gallery ";
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
<h3>Image_Desciption</h3>
<textarea name = "image_id" cols=85  rows=18>
<?php include_once('connectionmain.php');?>
<?php /*
$conn= new mysqli('localhost','root','','jubilee');
if($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
} */
//echo "connected";
$sql = "SELECT *  FROM gallery ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
        echo $row["description"];
		echo nl2br("\n");
    
    }
   
} else {
    echo "0 results";
}
	


 ?>
</textarea>
</div>

<div class="m">
<h3>Add New Image</h3>
<form action="gallery.php" method="post">

<table>
<tr>
<th>Image_id</th>
<th><input type="text" name="id"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Image</th>
<th><input type="text" name="name"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Image_Desciption</th>
<th><input type="text" name="linkn"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th><input type="submit" value= "Add Image" name="add" >
</th>

</table>
</form>
<?php include_once('connectionmain.php');?>
<?php 
if(isset($_POST['add'])){
	$x = $_POST["id"];
	$y = $_POST["name"];
	$z = $_POST["linkn"];
	/*
	
$conn = mysqli_connect("localhost", "root", "", "jubilee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$sql = "INSERT INTO gallery (id,image,description)
VALUES ('$x', '$y', '$z')";

if (mysqli_query($conn, $sql)) {
 // echo "New record created successfully";
} else {
  // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


?>
</div>
<div class="v">

<h3>Delete Image</h3>
<form action="gallery.php" method="post">

<table>
<tr>
<th>Image_id</th>
<th><input type="text" name="no"></th>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th><input type="submit" value= "Delete Image" name="delete" >
</th></tr>
</table>
</form>
<?php include_once('connectionmain.php');?>
<?php 
if(isset($_POST['delete'])){
	
	$e=$_POST["no"];
/*	$conn = new mysqli("localhost", "root", "", "jubilee");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else */
//	echo"Successful connection";

$sql = "DELETE FROM gallery WHERE id ='$e' ";

if ($conn->query($sql) === TRUE) {
 // echo "Record deleted successfully";
} else {
   // echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>
</div>





















</body>
</html>
