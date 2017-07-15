<?php
$con=mysqli_connect('localhost','m140392ca','m140392ca','db_m140392ca');
if(!$con)
	echo "database connection fail";
?>
<div class="header">
		<div class="header_top">
			
				<center><a href="home2.php"><img src="headr1.jpg" alt="" style="width:100%; height:200px;"/></a></center>
			
			 
	 <div class="clear"></div>
   </div>
	<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
		<li><a href="home2.php">Home</a></li>
		<li><a href="#">Scholarship</a>
			<ul>
				<li>
					
						<li><a href="all.php">All Scholarships</a></li>
						<li><a href="sports2.php">Sports Scholarships</a></li>
						<li><a href="state2.php">State Scholarships</a></li>
					
				</li>
				<li><a href="student.php">Student's List</a></li>
			</ul>
		</li>
		<li><a href="#">People</a>
			<ul>
				<li><a href="trusties2.php">Trustees</a></li>
				<li><a href="contributor2.php">Contributors</a></li>
			</ul>
		</li>
		
		<li><a href="gallery2.php">Gallery</a></li>
		<li><a href="about2.php">About</a> </li>
		<li><a href="contact2.php">Contact Us</a> </li>
		<li><a href="finallogin.php">Admin Login</a> </li>
	<div class="clear"></div>
</ul>
</div>
 </div>
