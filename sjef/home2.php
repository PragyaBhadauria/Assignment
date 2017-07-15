<!DOCTYPE HTML>
<html>
<head>
<title>Silver Jubilee Endowment Fund</title>
<?php include_once('css_js.php');?>  
</head>
<style>
/* unvisited link */
a:link {
    color: black;
}

/* visited link */
a:visited {
    color: grey;
}

/* mouse over link */
a:hover {
    color: #3e7fe8;
}

/* selected link */
a:active {
    color: blue;
}
</style>
<body>
<?php// include("db1.php");?>
	<div class="wrap">
		<?php include_once('header.php');?>

		<div class="main">
		 
					
						<div class="col-sm-9" style=" background-color:white;" >
 
							<p  style="font-size:20px;" align="justify"><font color="black">Since our founding in 1961 , Silver Jubilee scholarship has helped students find money for college as well
								as learn about the entire financial aid process. Over the years ,we've built solid relationships with contributor across the country and want 
								to provide students with the opportunity.</font></p>
							<br>
							<p align="center"><font color="#28a86a" size="5">CREC Silver Jubilee Endowment Fund</font></p>
							<div>
								<p  style="font-size:20px;" align="justify">
									<font color="black">
									The number and the value of the scholarships will vary depending on the availability of funds under
									each head. The Scholarships disbursed during the year 2015 were SJET: 95 (8.4 lakh); PTA: 36 (2 lakh).
									The scholarship amount was in the range from Rs.5000/- to Rs.10000/- per annum. The SJET / PTA / NITC
									Hostel will award these Scholarships to students based on the recommendations of the HOD and SJET
									committee.  
									</font><br><br>
								 
									
								 
								<p style="font-family:gabriola;"><font size="4" face="Andalus" color="black"><center><I>
							 
									NATIONAL INSTITUTE OF TECHNOLOGY CALICUT<br>
									CREC Silver Jubilee Endowment Trust<br>
									NIT Campus (P.O), CALICUT – 673 601, KERALA<br><br><br>
									</center></font>
								</I></p>
							</div>
<!--	-->					
						</div>
						<div class="col-sm-3">
						<div  style=" background-color:#92D2F0;border:2px solid #28a86a;">
						<center><h4><U><B>Downloads</U></h4></B>
							<a href="pdf_server.php?file=sjef_application"><font size="3">Scholarship Form</a><br><br>
<a href="pdf_server.php?file=contributor_form"><font size="3">Contributor Form</a>
						</center><br>
						</div>
						<br>
						<div style="border:2px solid #28a86a;">
						<center><h4><U><b>Notifications</b></U></h4></center><br>
						<?php //include("db1.php");?>



            <div id="sidebar">
                 
      <marquee onmouseout="this.start();" onmouseover="this.stop();" scrollamount="3" id="marquee"  direction="up" style="height:220px;">


<!--		<li class="active" style="border: 2px outset red;">  -->


<?php 
//	$sql='select * from notification where image="newicon.gif" ';
//	mysql_select_db('jubilee');
//	$r=mysql_query($sql,$con);
//	if(!$r)
//	{
//		die('not found'.mysql_error());
		
//	}
//	while($row=mysql_fetch_array($r,MYSQL_ASSOC))
			$sql=$con->query("select * from notification where image='newicon.gif'");
			if($con and $sql -> num_rows > 0)
			while($row= $sql->fetch_assoc())
			{
				?>
		
		<a href="<?php echo $row['link'];?>" style="text-decoration:none;" ><?php echo $row['title'];?></a>
		
		<img src="<?php echo $row['image'];?>">
					
		<br><br>	
		<?php
		;
	}
	
?>
</td>
</li>

					</marquee>
                    </ul>
					<a href= "allnews.php"> <p align="right"><font color="#28a86a" size="4"> See More...</a></p>
                
				</div> </div>      </table>    
						
						</div>
					</div>
				</div>
			</div>
		</div>   
	</div>
 	
</body>
</html>

