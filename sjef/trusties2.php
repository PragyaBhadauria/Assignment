<!DOCTYPE HTML>
<html>
<head>
<title>Trustees List</title>
<?php include_once('css_js.php');?>  
</head>
<body>

<div class="wrap">
	<?php include_once('header.php');?>
	
 

 
 <div class="main">
 
	<div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Trustees</h3>
    		</div>
    		
    		<div class="clear"></div>
    	</div>
		<!--<div class="content_top">-->

		<?php

				$sql='select * from trustee';
				$r = $con->query($sql);
				if ($r and $r->num_rows > 0) 
				{
					$count1 = 0;
					$count=0;
					$row;
				// output data of each row
					while($r->num_rows >= ($count1 * 4) ){
							$count=0;	
							$count1++;
						
		?>
		<div class="section group">
		<?php 
						while($count < 4 and $row=$r->fetch_assoc()) {
								$count++;
		?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="#"><img src="<?php echo $row['tr_image'];?>" alt="" height="150" width="150"/></a>
						<h2><a href="<?php echo $row['link'];?>"><?php echo $row['tr_name']?></a></h2>

					</div>
					
		<?php
						}
		?>
		</div>
		<?php
				}
	
						}
		?>
					
				
		
					
    
<!--	</div>-->
</div>
</div>
</div>
<div class="clear"></div>

</body>
</html>

