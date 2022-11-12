<?php
session_start();
?>
<?php
include('database.php');//link the database php file
?>
<?php
include('head.php');//link the header php file
?>
<html>
<head>

<style>
*{margin:0;padding:0;}

body{
	background:rgba(0,0,0,0.4)url("img/change.jpg");/*image link class*/
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}
input{outline:none;font-size:20px;color:#fff;padding:1%;width:49%;margin-bottom:5px;}/*Input - to describe all inputs*/

input[type=text]{background:#ccc;border:2px solid #000; color:#000;}/*Input - text*/

input[type=submit]{border:none;border:2px solid #fff;margin-top:20px;cursor:pointer;/*Input - submit*/
background:#005960;width:98%;}

form{width:50%;}/*to desrcibe form*/
::-webkit-input-placeholder{color:#000;}/*Input type - text - placeholder (to display text in textbox*/

.copyright{background:#000;height:48.5px;margin-top:47.5px;}/*footer - copyright class*/

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}/*footer - copyright H4 class*/

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}/*footer - copyright H3 class*/
table{width: 100%;}
th{background: #000;color: #fff;text-align: center;}
th,td{padding: 2%;}
td{background: #fff;color: #000;text-align: center;}
</style>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<?php
$sql = "SELECT * FROM price" ;
$result = $conn->query($sql);
if ($result->num_rows >0){
	while($row = $result->fetch_assoc()){
		$buyp = $row['buy'];
		$salep = $row['sale'];
	}
}
		
?>
<br><br>
<center>
<form action = 'x.php' method = 'post'>
<table border = 1>
	<tr><th colspan = '2'>Price Table</th></tr>
	<tr><th>Buy Price</th><th>Sale Price</th></tr>
	<tr><td>Rs.<?php echo $buyp ;?>/=</td><td>Rs.<?php echo $salep ;?> /=</td></tr>
</table>
<br><br>
<input type = 'text' name = 'buy' placeholder = 'Buy Price'>
<input type = 'text' name = 'sale' placeholder = 'Sale Price'><br><br><br>
<input type = 'submit' name = 'change' value = 'Change'>
<br><br><br><br><br>
</form>
<br> 	
<br>
<br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>