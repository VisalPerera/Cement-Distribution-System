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
	background:rgba(0,0,0,0.4)url("img/change.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}.copyright{background:#000;height:48.5px;margin-top:62px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}
.emp{width:50%;float:left;}
.drv{width:50%;float:right;}
table{width: 100%;}
th{background: #000;color: #fff;text-align: center;}
th,td{padding: 2%;}
td{background: #fff;color: #000;text-align: center;}
</style>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<br><br>

<div class = 'emp'>
<table border = 1>
<?php
	$sql = "SELECT * FROM employee" ;//select employees from database
	$result = $conn->query($sql);
	echo "<tr><th colspan = '3'>Employees</th></tr>";
	if ($result->num_rows >0){
		while($row = $result->fetch_assoc()){
			$nic = $row['nic'];
			$name = $row['name'];
			$phone = $row['phone'];
			echo "<tr><td>{$nic}</td><td>{$name}</td><td>0{$phone}</td></tr>";
		}
	}	
?>
</table>
</div>

<div class = 'drv'>
<table border = 1>
<?php
	$sql = "SELECT * FROM driver" ;//select drivers from database
	$result = $conn->query($sql);
	echo "<tr><th colspan = '3'>Drivers</th></tr>";
	if ($result->num_rows >0){
		while($row = $result->fetch_assoc()){
			$nic = $row['nic'];
			$name = $row['name'];
			$phone = $row['phone'];
			echo "<tr><td>{$nic}</td><td>{$name}</td><td>0{$phone}</td></tr>";
		}
	}	
?>
</table>
</div>
<br> 	
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>