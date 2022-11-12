<?php
session_start();
?>
<?php
include('database.php');
?>
<?php
include('head.php');
?>
<html>
<head>
<style>
*{margin:0;padding:0;}

h1{color:#000;text-align:center;margin-top:40px;}

.click h2{color:#000;text-align:center;margin-top:40px;font-size:20px;}

hr{background:#000;height:2px;border:none;outline:none;margin-top:-24px;}

.copyright{background:#000;height:48.5px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}

.products{width:100%;}

.products img{width:15%;margin:70px;margin-bottom:-30px;}
</style>
<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<br><hr>
<h1><u>Our Products</u></h1>
<div class = 'click'>
<h2>Click Any Item to View Details.</h2>
</div>
<br>
<center>
<div class = 'products'>
	<a href = 'pOne.php'> <img src = 'img/p1.jpg'> </a>
	<a href = 'pTwo.php'> <img src = 'img/p2.jpg'> </a>
	<a href = 'pThree.php'> <img src = 'img/p3.jpg'> </a>
	<br><br>
	<a href = 'pFour.php'> <img src = 'img/p5.jpg'> </a>
	<a href = 'pFive.php'> <img src = 'img/p4.jpg'> </a>
	<a href = 'pSix.php'> <img src = 'img/p6.jpg'> </a>
</div>
<br><br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>
</body>