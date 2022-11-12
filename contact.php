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

.lnkbtn{
	margin-top:-24px;
	background:rgba(0,0,0,0.5)url("img/contact.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
	height:50vh;
}
h1{margin-top:-170px;color:#fff;text-align:center;font-size:50px;}

table{width:50%;margin-top:10%;}

th,td{padding:1%;text-align:center;}

th{background:#000;color:#fff;}

form{width:50%;}

textarea{width:92%;padding:1%;font-size:20px;outline:none;}

input[type=text],input[type=email]{width:45%;margin:5px;padding:1%;outline:none;}

input[type=submit]{
	margin-bottom:20px;
	margin-top:20px;
	width:92%;
	background:#0082e6;
	border:2px solid #000;
	padding:1%;
	color:#fff;
	font-size:20px;
	outline:none;
}
.copyright{background:#000;height:48px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}

</style>

<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<br>
<div class = 'lnkbtn'></div>
<h1>Contact Us</h1>

<center>
<table border = '1'>
<tr>
<th>Company Name</th>
<th>Address</th>
<th>Contact Number</th>
</tr>
<tr>
<td>T K V Enterprises</td>
<td>No 58 , Colombo Rd , Pothuhara</td>
<td>077 186 5633</td>
</tr>
</table>
<br><br>
<h2>Send Your Question</h2>

<form action = 'contact.php' method = 'post'>
<input type = 'text' name = 'name' placeholder = "Name">
<input type = 'email' name = 'email' placeholder = "email"><br><br>
<textarea name = 'msg'></textarea><br>
<input type = 'submit' name = 'submit' value = "Send">
</form>
<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		$date = date("Y-m-d");
		
		$sqli = "insert into msg values('$name','$email','$msg','$date')";
		if($conn->query($sqli) === TRUE){
			echo "<h2>Thanks For Join With Us..!</h2>";
		}
	}
?>
<br><br><br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>
</body>