<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
	 width: 100%;
	 background-color:white;
}
table, th {
    border: 2px solid black;
}
table {
    background-color: #E67855;
    border-collapse: collapse;
    width: 100%;
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: #0E6BBD;
    clear: left;
    text-align: left;
}

 div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 10px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 70%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
 
</style>
</head>
<body>

<div class="container">

<header>
<img src="C:\Users\megalh\Desktop\cs\nit-calicut.jpg" alt="Mountain View" style="width:100px;height:102px;">

   <h1>Silver Jubilee Endowment Trust </h1>
   <h3>National Institute of Technology Calicut</h3>
</header>

<table>
  <tr>
<th><h2><a href="home.php">Home</a></h2></th>
<th><h2><a href="sch.php">Scholarship</a></h2></th>
<th><h2><a href="trusties.php">Trusties</a></h2></th>
<th><h2><a href="about_us.php">About Us</a></h2></th>
<th><h2><a href="FAQ.php">FAQ</a></h2></th>
<th><h2><a href="Gallery.php">Gallery</a></h2></th>
<th><h2><a href="contact.php">Contact us</a></h2></th>
</div>
</table>
 <div class="responsive">
  <div class="img">
     
      <img src="C:\Users\megalh\Desktop\cs\f1.jpg" alt="s chandran" width="300" height="200">
    
    <div class="desc"><a href="DrS">Dr S Chandrankaran</a></div>
  </div>
</div>

<div class="responsive">
  <div class="img">
     
      <img src="C:\Users\megalh\Desktop\cs\f33.jpg" alt="unnikrishanan" width="300" height="200">
    
    <div class="desc"><a href="Drg">Dr G Unnikrishanan </a></div>
  </div>
</div>
<div class="responsive">
  <div class="img">
     
      <img src="C:\Users\megalh\Desktop\cs\f2.jpg" alt="Dr shridharan" width="300" height="200">
    
    <div class="desc"><a href="Drr">Dr R Shridhran</a></div>
  </div>
</div>




</body>
</html>

