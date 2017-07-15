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

	<div class="wrap">
		<?php include_once('header.php');?>
		
		<?php// include("db1.php");?>
		<div class="main">
		<div class="content">
		<div class="content_top">
    		<div class="heading">
    		<h3>All Notifications</h3>
    		</div>
    		
    		<div class="clear"></div>
    	</div><br>
		<?php 
//	$sql='select * from notification';
//	mysql_select_db('jubilee');
//	$r=mysql_query($sql,$con);
//	if(!$r)
//	{
//		die('not found'.mysql_error());
		
//	}
//	while($row=mysql_fetch_array($r,MYSQL_ASSOC))
	$sql=$con->query("select * from notification order by time desc");
	if($con and $sql -> num_rows > 0)
	while($row= $sql->fetch_assoc())
	{
		?>
		
		<font color="black" size="4"><a href="<?php echo $row['link'];?>" ><?php echo $row['title'];?></a>
		
		<!--<img src="<?php echo $row['image'];?>">-->
					
		<br><br>	
		<?php
		;
	}
	
?>
</div>
</div>
</div>
</body>
</html>
