<!DOCTYPE HTML>
<html>
<head>
<title>Students</title>
<?php include_once('css_js.php');?>  
</head>
<body>

<div class="wrap">
	<?php include_once('header.php');?>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

</style>

 

 
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Students who got scholarship</h3>
    		</div>
    		
    		<div class="clear"></div>
		</div>

		<div class="section group">

					<br>
<!--					<div class="content_top">-->
					<div class="row">
					<div class="col-sm-11" style="border:none;">
<!--					<center><h4><U>List of Students</U></h4></center><br>-->

					<table>
					<tr>
						<th><B><U>NAME</U></B></th>
						<th><B><U>ROLL NO.</U></B></th>
						<th><B><U>COURSE</U></B></th>
						<th><B><U>SEMESTER</U></B></th>
						<th><B><U>AMOUNT</U></B></th>
						<th><B><U>SCHOLARSHIP NAME</U></B></th>
						<th><B><U>YEAR</U></B></th>
						<th><B><U>ACCOUNT NO.</U></B></th>
					</tr>
					<?php 
					if (isset($_GET['submit_year']))
					{ 
						$std_sql = $con->query("select * from student where year = ".$_GET['hid_yr']);

					}
					else
					{
						$std_sql = $con->query("select * from student ORDER BY year desc");
					}
						if($con and $std_sql -> num_rows > 0)
						while($row = $std_sql->fetch_assoc())
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
				
					?>
	
					</table>
					</div>

					<div class="col-sm-1" style="align:left;">
				
					<center><U><h4>Year</h4></U></center><br>
<!--					<table style="border:1px solid white;">-->
					
					<?php 
						$yr_sql = $con->query("select distinct year from student order by year desc;");
						if($con and $yr_sql -> num_rows > 0)
						while($row1 = $yr_sql->fetch_assoc())
						{
							echo "<tr>
									<td><center>"?>
									<form action="student.php" method="GET">
									<input type="hidden" value="<?php echo $row1['year'];?>" id = "hid_yr" name="hid_yr">
									<font color="blue"><input type="submit" name="submit_year" value="<?php echo $row1['year']; ?>" style="border:none;background-color:white;"></font>
									</form><br>
									<?php "</center>
									</td>
								</tr>";
						}
				
					?>
					
		</div>
    
	</div>
 </div>
</div>
</div>
<div class="clear"></div>

</body>
</html>
