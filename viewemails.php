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

.lnkbtn{
	margin-top:-20px;
	background:rgba(0,0,0,0.4)url("img/back.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
	height:50vh;
}
h1{margin-top:-170px;color:#fff;text-align:center;font-size:50px;}

table{width:80%;margin-top:10%;}

th,td{padding:1%;text-align:center;width:20%;}

th{background:#000;color:#fff;}

.copyright{background:#000;height:48px;margin-top:28.5px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}
</style>

<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<br>
<div class = 'lnkbtn'></div>
<h1>Emails</h1>

<center>
<table border = '1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Question or Message</th>
<th>Date</th>
</tr>
<?php
	$sqlemail = "SELECT * FROM msg";
	$resultemail = $conn->query($sqlemail);
	if ($resultemail->num_rows > 0){
		while($rowemail = $resultemail->fetch_assoc()){
			$name = $rowemail['name'];
			$email = $rowemail['email'];
			$msg = $rowemail['msg'];
			$date = $rowemail['date'];
			echo "<tr>";
			echo "<td>" . $name . "</td>" . "<td>" . $email . "</td>" . "<td>" . $msg . "</td>" . "<td>" . $date . "</td>";
			echo "</tr>";
		}
	}
?>
</table>

<br><br><br><br><br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>

</body>