<?php
include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel = 'stylesheet' type = 'text/css' href = 'css/bootstrap.min.css'>
<style>
*{margin:0;padding:0;}

.head{background:#fff;text-align:center;padding:10px;height:50px;}

.n{color:#990000;}

.n:hover{text-decoration:none;color:#990000;}

.head h2{color:#990000;font-size:35px;line-height:25px;float:left;margin-left:2px;}

.head h3{float:right;font-size:21px;line-height:30px;margin-right:20px;}

.head h3 a{color:#000;margin-right:10px;text-decoration:none;}

hr{background:#fff;height:4px;border:none;outline:none;}

</style>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class = "head">
	<img src = 'img/logo2.jpg' alt = 'email' width = "50" height = "50" style = 'margin-left:-10px;margin-top:-9.8px;float:left;'>
	<h2><a href = "homepage.php" class = "n">T K V Enterprises</a> <a href = "viewemails.php" class = "env"> <img src = 'img/evn.jpg' alt = 'email' width = "33" style = 'margin-left:10px;'> </a></h2>
	<h3>
		<a href = 'homepage.php'><img src = 'img/home.png' alt = 'email' width = "30" style = 'margin-left:10px;margin-top:-4px;'></a>
		<a href = 'about.php'>About Us</a>
		<a href = 'service.php'>Services</a>
		<a href = 'products.php'>Our Products</a>
		<a href = 'contact.php'>Contact Us</a>
	</h3>
	
</div>
</body>

</html>