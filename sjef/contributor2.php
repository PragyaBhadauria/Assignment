<!DOCTYPE HTML>
<html>
<head>
<title>Contributors</title>
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
    text-align: left;
    padding: 8px;
}

<!--tr.tr:nth-child(even) {
    background-color: #dddddd;
}-->
</style>

 

 
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Contributors</h3>
    		</div>
    		
    		<div class="clear"></div>
    	</div>
		<?php

				$sql='select * from contributor';
				$r = $con->query($sql);

						
		?>
		<div class="section group">
		<?php 

							
		?>
					<br>
					<!--<div class="content_top">-->
					<div class="row">
					<div class="col-sm-5" style="border:2px solid white;">
					<center><h4><U>List of All Contributors</U></h4></center><br>

					<table>
					<tr>
						<th><B><U>Contributor's Name</U></B></th>
						<th><B><U>Phone No.</U></B></th>
						<th><B><U>Details</U></B></th>
					</tr>
					<?php 
						$contri = $con->query("select contributor_name,phone_number from contributor");
						if($con and $contri -> num_rows > 0)
						while($row = $contri->fetch_assoc())
						{
							echo "<tr>
									<td>".$row['contributor_name']."</td>
									<td>".$ph=$row['phone_number'];"</td>"?>
									<td><form action="contributor2.php" method="GET"> 
										<input type="hidden" value="<?php echo $ph;?>" id = "hid_ph" name="hid_ph">
										<input type="submit" name="detail" value="Click Here" id="detail"></form></td>
									</tr><?php ;
						}
				
					?>
					</table>
					</div>
					<div class="col-sm-1" style="border:2px solid #FFF;">
					</div>
					<?php
					
					if (isset($_GET['detail']))
					{
					?>
						<div class="col-sm-6" style="border:2px solid #FFF;">
						<center><h4><U>Details</U></h4></center><br>
						<table style="border:0px;">
					<?php
						$phone=$_GET['hid_ph'];
						$query="select * from contributor where phone_number='$phone'";
						$result = $con->query($query);
						if($con and $result -> num_rows > 0)
							while($row1 = $result->fetch_assoc())
							{
								echo "<tr>
									<td><B>Name/Organization : </B></td>
									<td>".$row1['contributor_name']."</td>
									<tr>
									<td><B>Phone No. : </B></td>
									<td>".$row1['phone_number']."</td>
									</tr>
									<tr>
									<td><B>Address : </B></td>
									<td>".$row1['address']."</td>
									</tr>
									<tr>
									<td><B>Scholarship Name : </B></td>
									<td>".$row1['scholarship_provided']."</td>
									</tr>
									<tr>
									<td><B>Amount : </B></td>
									<td>".$row1['amount']."</td>
									</tr>
									";
							}
					}
					?></table>
					<br><br>
					
					</div>
					</div>
					<!--</div>-->
					</div>
					
					
		<?php

		?>
		</div>
		<?php

		?>

	</div>
 </div>

<div class="clear"></div>

</body>
</html>
