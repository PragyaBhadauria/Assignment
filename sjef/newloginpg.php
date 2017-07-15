<html>
<head>

<title>Admin Login</title>
<style>
div.a{ 
    background-color: lightblue;
     
    margin: 20px 0 20px 0;
    padding: 20px;
	border: 1px solid black;
	width:360px;
	position:absolute;
	top:250px;
	left:390px;
}
div.b{
	position:absolute;
	left:1190px;
	top:117px;
}
</style>
</head>
<body style="background-color: #ffdab9">
<div class="top">
<center><a href="#"><img src="headr1.jpg" alt="" height="150px" width="100%"/></a></center>
</div>						
<div class="b">
<button onclick="window.location.href='home2.php'"style =" width : 140px; color:red; height:40px">Home</button>
</div>

<div class="a">
<h3><u>Admin Login</u></h3>
<form action="loginnext2.php" method="post">
<table>
<tr>
<th>UserName</th>
<th><input type="text" name="name"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th>Password</th>
<th><input type="password" name="email"></th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<th><input type="submit" value= "Login" name="login" >
</th>

</table>
</form>

</div>
</body>
</html>
