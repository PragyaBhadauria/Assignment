<?php
session_start();
?>

<html>
<head>
<Title>Admin HomePage</Title>
<style>
div.a{
	position:absolute;
	left:80px;
	top:220px;
}
div.b{
	position:absolute;
	left:80px;
	top:355px;
}
div.c{
	position:absolute;
	left:80px;
	top:480px;
}
div.d{
	position:absolute;
	left:650px;
	top:220px;
}
div.e{
	position:absolute;
	left:650px;
	top:355px;
}

div.ab{
	position:absolute;
	left:1165px;
	top:117px;
}
div.f{
	position:absolute;
	left:650px;
	top:480px;
}
div.hh{
	position:absolute;
	
	top:150px;
	
}
div.xx{
	position:absolute;
	left:1150px;
	top:125px;
}
</style>
</head>
<body style="background-color: #ffdab9">

<?php

if(isset($_SESSION['currentuser'])){

 ?><div class="hh">
 <h3><b>Welcome ,  To Your Dashboard.........................................</h3>   
</div>
<div class="top">
<center><a href="#"><img src="headr1.jpg" alt="" height="150px" width="100%"/></a></center>
</div>				

<div class="xx" >
<div  style=" background-color:#F0EFE7;border:1px solid black; padding:7%">
<a href ="finallogin.php?logout=1" style =" width : 400px; color:black; height:50px">Logout</a>
</div>
</div>



<div class="a">
<button onclick="window.location.href='adminhome.php'" style =" width : 500px; color:black; height:80px">Scholarship List & Operations</button>
</div>
<div class="b">
<button onclick="window.location.href='adminhome2.php'" style =" width : 500px; color:black; height:80px">Student List & Operations</button>
</div>
<div class="c">
<button onclick="window.location.href='adminhome3.php'" style =" width : 500px; color:black; height:80px">Trustee List & Operations</button>
</div>
<div class="d">
<button onclick="window.location.href='adminhome4.php'" style =" width : 500px; color:black; height:80px">Contributor List & Operations</button>
</div>
<div class="e">
<button onclick="window.location.href='notify.php'" style =" width : 500px; color:black; height:80px">Notifications List & Operations</button>
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
