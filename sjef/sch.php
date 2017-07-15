<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!--<link rel="stylesheet" type="text/css" href="file1.css">
	<link rel="stylesheet" type="text/css" href="file2.css">
	<link rel="stylesheet" type="text/css" href="file3.css">-->
	<link rel="stylesheet" type="text/css" href="file4.css">
	<link rel="stylesheet" type="text/css" href="file5.css">
	<!--<link rel="stylesheet" type="text/css" href="file6.css">-->	
<head>
<title>Scholarship List</title>
 

</head>
<body>
<?php include_once('css_js.php');?>
<div class="wrap">
<?php include_once('header.php');?>
<div class="main">
    <div class="content">
<?php include("db1.php");?>

 
 
 <?php 
	$sql='select * from scholarship where category="obc"';
	mysql_select_db('jubilee');
	$r=mysql_query($sql,$con);
	if(!$r)
	{
		die('not found'.mysql_error());
		
	}
	?>
	
<div style="padding:0 2%;">
<?php
	while($row=mysql_fetch_array($r,MYSQL_ASSOC))
	{
		?>
		<div class="colleges-list">
		<div id="text-13" class="widget widget_text">
<ul class="colleges">
		<li><a href="<?php echo $row['link'];?>" style="text-decoration:none;" ><?php echo $row['scholarship_name'];?></a>
		</li>
		</ul>
					
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

