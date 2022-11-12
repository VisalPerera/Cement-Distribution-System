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

body{
	background:rgba(0,0,0,0.4)url("img/back.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
	margin-bottom:15px;
	height:80vh;
}
h1{color:#fff;}

.salandincome{margin-top:27px;}

.salandincome a{
	outline:none;
	text-decoration:none;
	border:2px solid #fff;;
	font-size:20px;
	color:#fff;
	background:#00A170;
	padding:1%;
	padding-left:1.5%;
	padding-right:1.5%;
}
.lnkbtn a{
	text-decoration:none;
	border:2px solid #000;
	font-size:20px;
	color:#fff;
	background:#8d9440;
	padding:1%;
	padding-left:3.5%;
	padding-right:3.5%;
	margin:10px;
}
.copyright{background:#000;height:48px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}
</style>

<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<br><br><br><br><br><center>
<div class = 'lnkbtn'>
	<a href = "ordFrmCmtCompany.php">
	Order From Cement Company</a>

	<a href = "delevertToCustomer.php">
	Distribute to Customers

	<a href = "delevertToStore.php">
	Distribute to Store</a>
</div>
<br><br><br>
<?php

$date = date("Y - m - d");
echo "<h2 style = 'color:#eee;font-size:35px;'>" . $date . "</h2>";//link the date 
?>
 
<div id = "clock">
</div>
<?php
$sqlourstore = "SELECT * FROM ourstore";//select all outshore from database
$resultourstore = $conn->query($sqlourstore);
if ($resultourstore->num_rows >0){
	while($rowourstore = $resultourstore->fetch_assoc()){
		$qtyourstore = $rowourstore['qty'];
	}
}
echo "<h2 style = 'color:#fff;'>Our Stock: " . $qtyourstore . "</h2>";

?>
<br><br>
<center>

<div class = 'salandincome'>
	<a href = 'income.php'>Income</a>
	<a href = 'employees.php'>Employees & drivers</a>
	<a href = 'salDriver.php'>Pay Salary To Drivers</a>
	<a href = 'salEmployee.php'>Pay Salary To Employees</a>
	<a href = 'regEmployee.php'>Register New Employee or Driver</a>
	<a href = 'changeprice.php'>Change Prices</a>
</div>
</center>

<script type = "text/javascript">
	setInterval(displayclock, 10);
	function displayclock(){
		var time = new Date();
		var hrs = time.getHours();
		var min = time.getMinutes();
		var sec = time.getSeconds();
		
		if(sec < 10){
			sec = '0' + sec;
		}
		
		if(min < 10){
			min = '0' + min;
		}
		
		if(hrs < 10){
			hrs = '0' + hrs;
		}
		
		document.getElementById('clock').innerHTML = "<h2 style = 'color:#fff;font-size:65px;'>" + hrs + " : " + min + " : " + sec + "</h2>";
	}
</script>
<br>
<br>
<br>
<br>
<br> 	
<br>
<br>

<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>
</body>