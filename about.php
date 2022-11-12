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

.lnkbtn/*button link class*/{
	margin-top:-24px;/*top margin*/
	background:rgba(0,0,0,0.4)url("img/about.jpg");/*image link class*/
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;/*button size class*/
	background-blend-mode:darken;
	height:50vh;/*button height class*/
}
h1{margin-top:-170px;color:#fff;text-align:center;font-size:50px;}/*Header 1 class*/

h2{color:#000;text-align:center;font-size:40px;}/*Header 2 class*/

p{color:#000;text-align:center;font-size:20px;margin-right:50px;margin-left:50px;}/*paragraph class*/

.copyright{background:#000;height:48px;}/*footer - copyright class*/

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}/*footer - copyright H4 class*/

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}/*footer - copyright H3 class*/
</style>

<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><!--To display content according to the device size-->
<body><!--body-->
<br>
<div class = 'lnkbtn'></div>
<h1>About Us</h1>
<br><br><br><br><br>
<h2>Vision</h2><!--header 2-->
<p><!--paragraph-->We will keep on expanding on our legacy of shared reliability, 
making believing associations with our colleagues, our kin and our local area. 
We need to accomplish the best worth and an economical future for every one of our customers. 
</p>
<br><br>
<h2>Mission</h2>
<p>TKV Enterprises provides best quality construction materials in all over our area for our trustworthy customers.</p>
<br><br>
<div class = 'copyright'><!--footer class-->
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>
</body>