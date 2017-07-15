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
 
<?php include_once('css_js.php');?>
<body bgcolor="red">

<div class="wrap">
<?php include_once('header.php');?>
<div class="main">
    <div class="content">


 
 
 <?php 
//	$sql='select link,scholarship_name from scholarship where category="sports"';
//	mysql_select_db('jubilee');
//	$r=mysql_query($sql,$con);
//	if(!$r)
//	{
//		die('not found'.mysql_error());
		
//	}
	?>
	
<div style="padding:0 2%;"><div class="colleges-list">
		<div id="text-13" class="widget widget_text">
<ul class="colleges">
<?php
	$sql=$con->query("select file_name,name from scholarship where category='sports'");
	if($con and $sql -> num_rows > 0)
	while($row= $sql->fetch_assoc())
	{
		?>
		  
		
	
		 <li class="big-text"><a href="http://docs.google.com/gview?url=http://andromeda.nitc.ac.in/~m140392ca/sjef/<?php echo $row['file_name'];?>" style="text-decoration:none;" ><?php echo $row['name'];?></a>
		</li>
		<?php
		;
	}
	
?>
</div>
</div>
</div>

</body>
</html>
