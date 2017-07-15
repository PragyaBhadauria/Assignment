<?php
$con=mysqli_connect('localhost','root','','jubilee');
if(!$con)
	echo "database connection failed";
	else
	{
		$sql_insert = " INSERT INTO contact VALUES
		('$_POST[in_nam]',
		'$_POST[in_rol]',
		'$_POST[in_eml]',
		'$_POST[in_mob]',
		'$_POST[in_qry]')";
		
		$queryStatus=mysqli_query($con,$sql_insert);
		if($queryStatus==TRUE)
			echo "\nRecord Inserted Successfully";
		else
			echo"\nRecord not inserted";
	}
?>