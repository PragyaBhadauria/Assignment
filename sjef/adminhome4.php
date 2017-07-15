<?php
session_start();
?>

<html><head>
<title>Contributor Operations</title>
<style>
div.a{
	position:absolute;
	left:1165px;
	top:117px;
}
div.b{
	position:absolute;
	top:160px;
	
}div.c{
	position:absolute;
	top:160px;
	left:210px;
}div.d{
	position:absolute;
	left:420px;
	top:160px;
}div.e{
	position:absolute;
	left:660px;
	top:160px;
}
div.f{
	position:absolute;
	left:910px;
	top:160px;
}
div.g{
	position:absolute;
	left:1030px;
	top:160px;

}
div.i{
	position:absolute;
	left:1200px;
	top:160px;

}
div.m{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:100px;
	top:515px;
	
}
div.v{
	background-color: lightblue;
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	
	position:absolute;
	left:500px;
	top:515px;
	
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
<button onclick="window.location.href='contributornext2.php'"style =" width : 140px; color:red; height:40px">Add/Delete Contributors </button>
</div>


<div class="new">

<table>
					<tr>
						<th><B><U>Contributor_Name</U></B></th>
						<th><B><U>Phone_Number</U></B></th>
						<th><B><U>Address</U></B></th>
						<th><B><U>Scholarship_Provided</U></B></th>
						
						
<!--						<th><B><U>sports_merit</U></B></th>-->
						<th><B><U>Amount</U></B></th>
					</tr>
					<?php 
					 include_once('connectionmain.php');
			/*		$conn = mysqli_connect("localhost", "root", "", "jubilee");

                     if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                  }
                     else */
					{
						$sql = "SELECT * FROM contributor ";
					$result = mysqli_query($conn,$sql);
						if (mysqli_num_rows($result) > 0)
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$row['contributor_name']."</td>
									<td>".$row['phone_number']."</td>
									<td>".$row['address']."</td>
									
									
									<td>".$row['scholarship_provided']."</td>
									
									<td>".$row['amount'];"</td>"
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
